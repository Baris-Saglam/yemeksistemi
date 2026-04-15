FROM php:8.2-cli

# MySQL eklentilerini kur
RUN apt-get update && apt-get install -y libmariadb-dev \
    && docker-php-ext-install pdo pdo_mysql

# Çalışma dizinini ayarla
WORKDIR /var/www/html

# Dosyaları kopyala (Eğer dosyaların src içindeyse ./src/ yap)
COPY ./src/ .

# Port ayarı (Railway bunu otomatik atar ama biz 80'e sabitleyelim)
ENV PORT 80
EXPOSE 80

# Apache yerine doğrudan PHP'nin kendi sunucusunu başlat (MPM hatasını engeller)
CMD ["sh", "-c", "php -S 0.0.0.0:$PORT"]
