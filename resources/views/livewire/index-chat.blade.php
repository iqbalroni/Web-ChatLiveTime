<div class="--dark-theme" id="chat">
    <div class="chat__conversation-board" wire:poll>
        @foreach ($data_chat as $chat)
            @if ($chat->id == Auth::user()->id)
                <div class="chat__conversation-board__message-container reversed">
                    <div class="chat__conversation-board__message__person">
                        <div class="chat__conversation-board__message__person__avatar"><img
                                src="{{ asset('template/default.jpg') }}" /></div>
                        <span class="chat__conversation-board__message__person__nickname">Dennis Mikle</span>
                    </div>
                    <div class="chat__conversation-board__message__context">
                        <div class="chat__conversation-board__message__bubble">
                            <span>
                                <b>{{ $chat->name }}</b><br>
                                {{ $chat->chat }} <br>
                                <b class="time">{{ date('H:i', strtotime($chat->jam)) }}</b>
                            </span>
                        </div>
                    </div>
                </div>
            @else
                <div class="chat__conversation-board__message-container">
                    <div class="chat__conversation-board__message__person">
                        <div class="chat__conversation-board__message__person__avatar"><img
                                src="{{ asset('template/default.jpg') }}" /></div>
                        <span class="chat__conversation-board__message__person__nickname">Dennis Mikle</span>
                    </div>
                    <div class="chat__conversation-board__message__context">
                        <div class="chat__conversation-board__message__bubble">
                            <span>
                                <b>{{ $chat->name }}</b><br>
                                {{ $chat->chat }} <br>
                                <b class="time">13:20</b>
                            </span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <livewire:add-chat>
</div>
