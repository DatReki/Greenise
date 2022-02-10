# Backend
For the backend [Laravel](https://github.com/laravel/framework) is utilized as an API. To compile the backend follow these steps:<br>

Copy .env file and fill in the correct details
> cp .env.example .env

Install composer
> composer install

Prepare database, run migrations and seeders
> composer refresh

Generate key
> php artisan key:generate

Run project
> php artisan serve