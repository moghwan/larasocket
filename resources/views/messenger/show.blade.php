@extends('layouts.app')

@section('content')

<div class="messaging">
    <div class="inbox_msg">
        <div class="inbox_people">
            <div class="headind_srch">
                <div class="recent_heading">
                    <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                    <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search">
                        <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span> </div>
                </div>
            </div>
            <div class="inbox_chat">
                @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
            </div>
        </div>
        <div class="mesgs">
            <div class="msg_history">
                @each('messenger.partials.messages', $thread->messages, 'message')
            </div>
            @include('messenger.partials.form-message')
        </div>
    </div>

</div>
@stop