FROM richarvey/nginx-php-fpm:latest
MAINTAINER Dan Daggett <ddaggett@gmail.com>
COPY *.php /var/www/html/
RUN chmod 775 /var/www/html
