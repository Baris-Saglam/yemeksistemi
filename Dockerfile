FROM php:8.2-apache

# MySQL ile konuşmak için gerekli sürücüleri kur
RUN docker-php-ext-install pdo pdo_mysql

# Dosyaları kopyala
COPY ./src/ /var/www/html/

# Yetkilendirme (Hata almamak için önemli)
RUN chown -R www-data:www-data /var/www/html

# Port ayarı
ENV PORT 80
EXPOSE 80

# Başlatma komutu
CMD ["apache2-foreground"]
