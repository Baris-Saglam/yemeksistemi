FROM php:8.2-apache

# MySQL eklentisini kur (Bu kısım MPM hatası yapmaz)
RUN docker-php-ext-install pdo pdo_mysql

# Kodları kopyala
COPY ./src/ /var/www/html/

# Port ayarını Railway'e bırakalım (Ekstra komuta gerek yok)
EXPOSE 80

# Apache'nin temiz başlamasını sağlar
CMD ["apache2-foreground"]
