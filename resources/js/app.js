require('./bootstrap');

// laravel-echo-server
window.io = require('socket.io-client');
import Echo from 'laravel-echo';

window.Echo = new Echo({
    namespace: 'app\\Events',
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001',
    auth: {
        headers: {
            Authorization: 'Bearer ' + window.csrf_token,
        }
    }
});

window.Echo
    .channel('channel-msg-sent')
    .listen('.MsgSentEvent', function(e) {
        console.log('3ala barakati llah');
        console.info(e);
    }
);
