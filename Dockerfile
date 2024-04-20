FROM debian:latest


RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install php apache2
RUN a2enmod rewrite


VOLUME /var/www/html
WORKDIR /var/www/html
EXPOSE 80

CMD chown www-data:www-data /var/www/html/.htaccess && service apache2 restart && \
  chmod 0644 /var/www/html/.htaccess && \
  tail -f /var/log/apache2/error.log

