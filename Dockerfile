# Dockerfile (sửa)
FROM php:8.2-apache

# Cài extensions cần thiết
RUN docker-php-ext-install mysqli pdo_mysql

# Bật mod_rewrite và cho phép .htaccess
RUN a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/i' /etc/apache2/apache2.conf

# Không đổi DocumentRoot (mặc định /var/www/html)
WORKDIR /var/www/html

# Copy source
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Hỗ trợ biến PORT (Render)
CMD ["bash", "-lc", "if [ -n \"$PORT\" ]; then sed -ri \"s/^Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf; fi; exec apache2-foreground"]
