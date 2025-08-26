FROM php:8.2-apache

# PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# (Giữ nguyên DocumentRoot = /var/www/html)
# Thêm cấu hình cho root và bật rewrite
RUN printf '<Directory /var/www/html>\n\
    Options -Indexes +FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    DirectoryIndex index.php index.html\n\
</Directory>\n' > /etc/apache2/conf-available/app.conf \
 && a2enmod rewrite \
 && a2enconf app

WORKDIR /var/www/html
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Render sẽ đưa biến PORT, cho Apache nghe đúng cổng
CMD ["bash", "-lc", "if [ -n \"$PORT\" ]; then sed -ri \"s/^Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf; fi; exec apache2-foreground"]
