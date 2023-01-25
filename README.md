## Requirenments

## Install dependencies
1.  composer dependencies
    > composer install
2. NPM dependencies
    > npm install

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

## Start local server
1. Start Vite server
    > npm run dev
2. Start php server
    > php artisan serve
## Aditional documentation
1. Laravel documentation: https://laravel.com/docs/9.x/
