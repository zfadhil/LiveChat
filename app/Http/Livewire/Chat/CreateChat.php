<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use Livewire\Component;

class CreateChat extends Component
{

    public $users;

    public function render()
    {
        $this->users = User::whereId('id','!=', auth()->user()->id)->get();
        return view('livewire.chat.create-chat');
    }
}
