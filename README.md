# Lumen PHP Framework With JWT, Mysql and Docker

## How to build
### Prerequisites
[docker](https://docs.docker.com/engine/install/)
[docker-compose](https://docs.docker.com/compose/install/)
## Run docker
sudo docker-compose --env-file .env up --build
## Migrate database (first time install)
sudo docker exec lumenDocker php artisan migrate
## Check project
### Check lumen framework
Send get request to: localhost:8000
### Check MySql connection
Send get request to: localhost:8000/checkDB

## Usage
Import testApi/lumen_api.postman_collection.json to postman and enjoy!
## Documentation
https://www.youtube.com/watch?v=g_22EUfibJ8&list=WL&index=4&ab_channel=CodeForYou

https://github.com/yossi-abramov/lumen-mysql-docker

http://www.gacoder.info/bao-mat-lumen-voi-jwt/

https://www.youtube.com/watch?v=3c-iBn73dDE&ab_channel=TechWorldwithNana

and from offical website of lumen and docker, ...
