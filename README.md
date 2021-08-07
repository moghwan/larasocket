This laravel project was dockerized using laradock with some instructions i ghathered in an [old post](https://dev.to/moghwan/dockerize-your-laravel-project-with-laradock-2io1)


in your .env file:
```
BROADCAST_DRIVER=redis

REDIS_CLIENT=predis

REDIS_HOST=redis

DB_HOST=mysql
```

using laradock (build containers if nessecery):
``` bash
# start containers
docker-compose up -d nginx mysql phpmyadmin redis workspace

# start echo without -d for debug purpose
docker-compose up laravel-echo-server
```