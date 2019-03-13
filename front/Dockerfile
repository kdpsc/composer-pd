# Nginx Reverse Proxy
FROM richarvey/nginx-php-fpm
# Image maintainer label
LABEL maintainer 'Passei Direto'
# Remove default page
RUN rm /var/www/html/index.php
# Nginx reverse proxy configuration
COPY ./nginx/nginx.conf /etc/nginx/sites-available/default.conf
# Simple application files
COPY ./nginx/html/* /var/www/html/
