<form action="{{ route('messages.update', $thread->id) }}" method="post" class="type_msg">
    {{ method_field('put') }}
    {{ csrf_field() }}

    <div class="input_msg_write">
        <!-- Message Form Input -->
        <input  name="message" type="text" class="write_msg" placeholder="Type a message" value="{{ old('message') }}" />

        {{-- @if($users->count() > 0)
            <div class="checkbox">
                @foreach($users as $user)
                    <label title="{{ $user->name }}">
                        <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                    </label>
                @endforeach
            </div>
        @endif --}}

        <!-- Submit Form Input -->
        <button type="submit" class="msg_send_btn">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
        </button>
    </div>
</form>