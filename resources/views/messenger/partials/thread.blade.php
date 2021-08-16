<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="chat_list active_chat {{ $class }}">
    <div class="chat_people">
        <div class="chat_img">
            <img src="//www.gravatar.com/avatar/{{ md5($thread->creator()->email) }} ?s=64"
             alt="{{ $thread->creator()->name }}" class="img-circle">
        </div>
        <div class="chat_ib">
            <h5 class="media-heading">
                <a href="{{ route('messages.show', $thread->id) }}">
                    {{ $thread->creator()->name }}: {{ $thread->subject }}
                </a>
                @if ($thread->userUnreadMessagesCount(Auth::id()))
                <p class="badge badge-danger text-light">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</p>
                @endif
                <span class="chat_date">{{ $thread->latestMessage->created_at->diffForHumans() }}</span></h5>
            <p>
                {{ $thread->latestMessage->body }}
            </p>
            <p class="text-muted">
                Participants: {{ $thread->participantsString(Auth::id()) }}
            </p>
        </div>
    </div>
</div>