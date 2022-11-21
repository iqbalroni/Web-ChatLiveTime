<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AddChat extends Component
{
    public $message;

    protected $rules = [
        'message' => 'required',
    ];

    public function sendMessage()
    {
        $this->validate();
        DB::table('chat')->insert([
            'id_user' => Auth::user()->id,
            'chat' => $this->message,
        ]);

        $this->RemoveText();

        $this->emit('Done', true);
    }

    public function RemoveText()
    {
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.add-chat');
    }
}
