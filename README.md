//Creating Docker Image
docker build -t "gabsite:latest" .

//Loading the docker Image for the website
docker run -p 80:80 -d -v www:/var/www/site --env-file env-variables.env gabsite
