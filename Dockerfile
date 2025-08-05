# Dùng image PHP + Apache
FROM php:8.1-apache

# Cài đặt extension kết nối MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ thư mục `public` vào thư mục web của Apache
COPY public/ /var/www/html/

# Mở cổng 80 (Render sẽ sử dụng cổng này để truy cập website)
EXPOSE 80
