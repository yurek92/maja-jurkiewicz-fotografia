<?php

namespace App\Http\Livewire\WeedingForms;

use App\Models\Notification;
use App\Models\Pdf;
use Livewire\Component;

class WeedingForm extends Component
{
    public $weedingFormId;

    public $form = [];
    public $fields = [];
    public $fieldsToShow = [];

    protected function rules()
    {
        $rules = [];

        if (count($this->fields) > 0)
        {
            foreach ($this->fields as $key => $field)
            {
                if ($field['show'])
                {
                    if (isset($field['rules']))
                    {
                        $rules['form.'.$key] = $field['rules'];
                    }
                }
            }
        }

        return $rules;
    }

    public function mount()
    {
        $this->initForm();
        $this->controlFieldsVisibility();
    }

    public function render()
    {
        return view('livewire.weeding-forms.weeding-form');
    }

    public function updated($field, $value)
    {
        if ($field == 'form.zgoda_rodo' && ! $value)
        {
            $fieldElements = explode('.', $field);
            $this->form[$fieldElements[1]] = null;
        }

        if ($field == 'form.rodzaj_reportazu' && \App\Models\WeedingForm::$fields['rodzaj_reportazu']['values'][$value] == 'Pełny')
        {
            $this->form['przygotowania'] = $this->form['ceremonia'] = $this->form['wesele'] = $this->form['oczepiny'] = 1;
        }

        $this->controlFieldsVisibility();
        $this->validateOnly($field);
    }

    public function submit()
    {
        $data = $this->validate();

        if (\App\Models\WeedingForm::$fields['rodzaj_reportazu']['values'][$data['form']['rodzaj_reportazu']] == 'Pełny')
        {
            $data['form']['przygotowania'] = $data['form']['ceremonia'] = $data['form']['wesele'] = $data['form']['oczepiny'] = 1;
        }

        if ($this->weedingFormId)
        {
            \App\Models\WeedingForm::where('id', $this->weedingFormId)->update($data['form']);
            $this->emit('toast', 'Zmiany zostały zapisane!');
        }
        else
        {
            $weedingForm = \App\Models\WeedingForm::create($data['form']);

            $attachment = Pdf::renderPdf($weedingForm->toArray(), true);

            Notification::sendWeedingFormNotification($weedingForm->toArray(), $attachment);

            return redirect()->route('thanks');
        }
    }

    public function initForm()
    {
        $this->fields = \App\Models\WeedingForm::$fields;

        if (count($this->fields) > 0)
        {
            $weedingForm = null;
            if ($this->weedingFormId)
            {
                $weedingForm = \App\Models\WeedingForm::find($this->weedingFormId);
            }

            foreach ($this->fields as $key => $field)
            {
                if ($weedingForm)
                {
                    $this->form[$key] = $weedingForm->$key;
                }
                else
                {
                    if (isset($field['default_value']))
                    {
                        $this->form[$key] = $field['default_value'];
                    }
                    else
                    {
                        $this->form[$key] = null;
                    }
                }
            }
        }
    }

    public function controlFieldsVisibility()
    {
        if (count($this->fields) > 0)
        {
            foreach ($this->fields as $key => $field)
            {
                if (isset($field['constraints']) && count($field['constraints']) > 0)
                {
                    foreach ($field['constraints'] as $keyConstraint => $constraint)
                    {
                        if (in_array($this->form[$keyConstraint], $constraint))
                        {
                            $this->fields[$key]['show'] = true;
                        }
                        else
                        {
                            $this->fields[$key]['show'] = false;
                        }
                    }
                }
                else
                {
                    $this->fields[$key]['show'] = true;
                }
            }
            $this->addFieldsToCategories();
        }
    }

    public function addFieldsToCategories()
    {
        $this->fieldsToShow = [];
        $categories = \App\Models\WeedingForm::$categories;

        if (count($categories) > 0)
        {
            foreach ($categories as $keyCategory => $category)
            {
                if (count($this->fields) > 0)
                {
                    foreach ($this->fields as $keyField => $field)
                    {
                        if ($field['show'])
                        {
                            if ($field['category'] == $keyCategory)
                            {
                                $this->fieldsToShow[$keyCategory][$keyField] = $field;
                            }
                        }
                    }
                }
            }
        }
    }
}
