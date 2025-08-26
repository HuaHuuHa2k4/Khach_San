FROM php:8.2-apache

# PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Đổi DocumentRoot -> /var/www/html/public (KHÔNG sửa apache2.conf hàng loạt)
RUN sed -ri 's!DocumentRoot /var/www/html!DocumentRoot /var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf

# Khai báo quyền cho đúng thư mục public
RUN printf '<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/public.conf \
 && a2enmod rewrite \
 && a2enconf public

WORKDIR /var/www/html
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Render đặt biến PORT -> cho Apache lắng nghe PORT đó
CMD ["bash", "-lc", "if [ -n \"$PORT\" ]; then sed -ri \"s/^Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf; fi; exec apache2-foreground"]
