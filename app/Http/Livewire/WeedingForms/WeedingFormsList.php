<?php

namespace App\Http\Livewire\WeedingForms;

use App\Models\Pdf;
use App\Models\WeedingForm;
use Livewire\WithPagination;
use Livewire\Component;

class WeedingFormsList extends Component
{
    use WithPagination;

    public function render()
    {
        $weedingForms = WeedingForm::paginate(25);

        return view('livewire.weeding-forms.weeding-forms-list', [
            'weedingForms' => $weedingForms,
        ]);
    }

    public function delete($id)
    {
        WeedingForm::where('id', $id)->delete();

        $this->emit('toast', 'Formularz został usunięty');
    }

    public function edit($id)
    {

    }
}
