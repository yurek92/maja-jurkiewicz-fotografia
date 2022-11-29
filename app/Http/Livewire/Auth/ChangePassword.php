<?php

namespace App\Http\Livewire\Auth;

use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Auth;
use Livewire\Component;

class ChangePassword extends Component
{
    public $current_password;
    public $new_password;
    public $new_confirm_password;

    public function render()
    {
        return view('livewire.auth.change-password-form');
    }

    public function submit()
    {
        $this->validate([
            'current_password'     => ['required', new MatchOldPassword],
            'new_password'         => ['required', 'min:6'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        Auth()->user()->password = Hash::make($this->new_password);
        Auth()->user()->save();

        $this->emit('toast', 'Hasło zostało zmienione!');
        $this->clearFields();
    }

    public function clearFields()
    {
        $this->current_password = null;
        $this->new_password = null;
        $this->new_confirm_password = null;
    }
}
