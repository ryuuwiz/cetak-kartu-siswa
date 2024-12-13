# Use the official PHP 8.3 image with Apache
FROM php:8.3-apache

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
  libzip-dev \
  libicu-dev \
  && docker-php-ext-install zip intl \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

# Install Node.js and npm
RUN apt-get update && apt-get install -y \
  curl \
  && curl -sL https://deb.nodesource.com/setup_22.x | bash - \
  && apt-get install -y nodejs \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the application files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install application dependencies
RUN composer install --no-interaction --prefer-dist

# Install Node.js dependencies
RUN npm install

# Build the frontend assets
RUN npm run build

# Generate application key
RUN php artisan key:generate

# Link storage
RUN php artisan storage:link

# Create the SQLite database file
RUN touch /var/www/html/database/database.sqlite

# Set permissions for the entire application directory
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Copy custom Apache configuration
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

# Run migrations and seed the database
RUN php artisan migrate --force && php artisan db:seed --force

# Expose the port Apache is running on
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]