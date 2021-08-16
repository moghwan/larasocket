<div class="{{ $message->user->id == Auth::id() ? 'outgoing_msg' : 'incoming_msg' }}">
    {{-- @if ($message->user->id != Auth::id())
        <div class="incoming_msg_img">
            <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64" alt="{{ $message->user->name }}" class="img-circle">
        </div>
    @endif --}}
    <div class="{{ $message->user->id == Auth::id() ? 'sent_msg' : 'received_msg' }}" class="">
        @if ($message->user->id == Auth::id())
                <p>{{ $message->body }}</p>
                <span class="time_date"> {{ $message->created_at->diffForHumans() }}</span>
        @else
            <div class="received_withd_msg">
                <p>{{ $message->body }}</p>
                <span class="time_date"> {{ $message->created_at->diffForHumans() }}</span>
            </div>
        @endif
    </div>
</div>