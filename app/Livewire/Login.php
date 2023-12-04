<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    #[Layout('layout.app')]
    public function submit(){
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        Auth::attempt($this->form);
        return redirect(route('/'));
    }
    public function render()
    {
        return view('livewire.login');
    }
}
