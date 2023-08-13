# Use the official PHP image with Apache as the base image
FROM php:8.1-apache

# Install system dependencies required for PDO and pgsql
RUN apt-get update && apt-get install -y libpq-dev

# Set the working directory inside the container
WORKDIR /var/www/html

# Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo pgsql

# Enable Apache mod_rewrite for Laravel URL rewriting
RUN a2enmod rewrite

# Copy the Laravel application files to the container
COPY . .

COPY .env.example .env

# Install Composer and dependencies
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN alias composer='php composer.phar'
# RUN composer install


# Set appropriate permissions for Laravel storage directory
RUN chmod 777 -R /var/www/html/
RUN chmod o+w ./storage/ -R

# Expose port 80 for Apache
EXPOSE 80

# Start Apache when the container is run
CMD ["apache2-foreground"]
