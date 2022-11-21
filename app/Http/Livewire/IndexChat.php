<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class IndexChat extends Component
{
    protected $listeners = [
        'Done' => 'SelesaiChat'
    ];

    public function render()
    {
        $total = DB::table('chat')->count() - 5;
        return view('livewire.index-chat', [
            'data_chat' => DB::table('chat')
                ->join('users', 'chat.id_user', 'users.id')
                ->orderBy('id_chat', 'asc')
                ->skip($total)
                ->take(5)
                ->get(),
        ]);
    }

    public function SelesaiChat()
    {
    }
}
