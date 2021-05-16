# docker build -t my-php-app  -f .docker/Dockerfile . 
# docker run -it --rm --name my-running-app my-php-app
# docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache 
#
# docker-compose up -d
#  docker-compose  -f .docker/docker-compose.yml up --build
#
FROM php:7.4-apache 

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
		# && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
		# && echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 

COPY ./apache/start-apache /usr/local/bin
COPY ./php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/
COPY ./php/conf.d/variables_order.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

# CMD [ "ls", "-la /usr/local/bin/start*" ]
CMD [ "start-apache"]
# CMD [ "php", "./index.php" ]
# CMD [ "ls", "-la" ]

