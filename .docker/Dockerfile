# docker build -t my-php-app  -f .docker/Dockerfile . 
# docker run -it --rm --name my-running-app my-php-app
# docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache 
#
# docker-compose up -d
#  docker-compose  -f .docker/docker-compose.yml up --build
#
FROM php:7.4-apache
COPY ./apache/start-apache /usr/local/bin

WORKDIR /var/www/html

# CMD [ "ls", "-la /usr/local/bin/start*" ]
CMD [ "start-apache"]
# CMD [ "php", "./index.php" ]
# CMD [ "ls", "-la" ]

