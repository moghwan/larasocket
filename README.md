# larasocket (WIP)

This is just a reference laravel project that will use [cmgmyr/laravel-messenger](https://github.com/cmgmyr/laravel-messenger) with livewire, bootstrap 4 and socket.io, and dockerized using laradock with some instructions I ghathered in an [old post](https://dev.to/moghwan/dockerize-your-laravel-project-with-laradock-2io1).


Update your `.env` file:
```
BROADCAST_DRIVER=redis

REDIS_CLIENT=predis

REDIS_HOST=redis

DB_HOST=mysql

REDIS_PREFIX=null
```

using laradock (build containers if nessecery):
``` bash
# start containers
docker-compose up -d nginx mysql phpmyadmin redis workspace
```

Terminals:
``` bash
# docker-compose exec workspace bash
artisan queue:work
npm run watch

# docker-compose exec redis bash
redis-cli monitor

# start echo without -d for debug purpose
docker-compose up laravel-echo-server
```