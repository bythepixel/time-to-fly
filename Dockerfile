FROM php:7.2-apache-stretch

ADD ./provision/apache/000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite
