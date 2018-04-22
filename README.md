- Whenever we want to save the database image:
docker commit mysql

- Detroying Containers
docker-compose down

- Loading docker compose file
docker compose up

- Creating Docker Image
docker build -t "gabsite:latest" .

- Loading the docker Image for the website
docker run -p 80:80 -d -v www:/var/www/site --env-file env-variables.env gabsite
docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag

Others:

- Verify docker network
docker inspect [docker-hash]

- Login in the docker container using bash
docker exec -it gabsite bash

- Show all dockers up
docker ps

- Show all docker images
docker images

- Delete docker image
docker rmi -f [docker-hash]




