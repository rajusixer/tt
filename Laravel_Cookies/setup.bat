@echo off
echo Setting up Laravel project...
echo.

echo Installing dependencies...
composer install
echo.

echo Setting up environment...
copy .env.example .env
php artisan key:generate
echo.

echo Running migrations...
php artisan migrate
echo.

echo Clearing caches...
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
echo.

echo Setup complete! You can now run: php artisan serve
pause