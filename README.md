## Shift Test (React 17 & Laravel 8)

Please follow the guide.

## Prerequisite
Make sure you have [docker](https://docs.docker.com/install/) and [docker-compose](https://docs.docker.com/compose/install/) installed on you machine.

First clone the repository using `git clone`

run following command in terminal / power shell
```
docker-compose up -d
```

when docker will finish building the containers, access the "shift_test_api" container using following command

`docker exec -it shift_test_api sh`

now you will be inside container

run following commands
1. `composer install`
2. `php artisan migrate:refresh --seed`
3. `php artisan key:gen`

open browser and check the following address

`http://localhost`