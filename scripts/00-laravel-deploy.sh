#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Optimizing filament..."
php artisan filament:optimize

echo "Caching icons..."
php artisan icons:cache

echo "Optimizing..."
php artisan optimize

echo "Linking storage..."
php artisan storage:link

echo "Running migrations..."
php artisan migrate --force