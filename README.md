## Requirenments

## Install dependencies
1.  composer dependencies
    > composer install

## initial setup
1. Create .env file
    > mv .env.example .env
2. Clear caché and temp files
    > php artisan cache:clear
    > composer dump-autoload
3. Generate Laravel's local keys
    > php artisan key:generate

## Migrations
1. Run all the migrations
    > php artisan migrate

## Aditional documentation
1. Laravel documentation: https://laravel.com/docs/9.x/
