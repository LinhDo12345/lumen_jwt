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
### check lumen
send get request to: localhost:8000
