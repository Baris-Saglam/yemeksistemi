FROM php:8.2-apache

# MySQL eklentilerini zorla kuruyoruz
RUN docker-php-ext-install pdo pdo_mysql

# Dosyaları kopyala
COPY ./src/ /var/www/html/

# Port ayarı
ENV PORT 80
EXPOSE 80
