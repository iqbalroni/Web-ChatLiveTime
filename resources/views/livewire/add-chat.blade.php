<div class="chat__conversation-panel">
    <form wire:submit.prevent='sendMessage' class="chat__conversation-panel__container">
        <input autofocus wire:model='message' class="chat__conversation-panel__input panel-item"
            placeholder="Masukan Pesan Disini" />
        <button type="submit" class="chat__conversation-panel__button panel-item btn-icon send-message-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                data-reactid="1036">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
            </svg>
        </button>
    </form>
</div>
