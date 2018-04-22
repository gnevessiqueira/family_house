//Creating Docker Image
docker build -t "gabsite:latest" .

//Loading the docker Image for the website
docker run -p 80:80 -d -v www:/var/www/site --env-file env-variables.env gabsite

Others

docker inspect -f '{{ .NetworkSettings.IPAddress }}' 283e14cbaa10

docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:tag

docker exec -it gabsite bash

