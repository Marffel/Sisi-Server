FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Update apt repositories and install necessary libraries
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Install Redis extension using PECL and enable it
RUN pecl install redis && docker-php-ext-enable redis

# Expose port 80 for web traffic
EXPOSE 80

# Command to run Apache in the foreground
CMD ["apache2-foreground"]
