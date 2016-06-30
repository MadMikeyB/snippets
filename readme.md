## Installing

Installation requires a few steps

## Composer

Ensure you have composer installed. You can do this from the getcomposer.org website.

[**Make sure to follow the "Installing Globally" instructions**](https://getcomposer.org/doc/00-intro.md#globally)

## Clone the Repo

`git clone https://github.com/MadMikeyB/snippets.git .`

## Download Dependencies

`composer install` or `php composer.phar install`

## Edit Config

Copy `.env.example` to `.env` and change the values contained within to the appropriate ones which match the database you have created.

## Populate Database

Open Terminal and cd to the directory where you cloned the repository, and run:

`php artisan migrate`

## Modifying 

Templates are located in `/resources/views/`

Controllers are located in `app/Http/Controllers/`

Router is located `app/Http/routes.php` (this tells Laravel which controller should handle which request)

## Documentation

[Routers](https://laravel.com/docs/master/routing) 

[Controllers](https://laravel.com/docs/master/controllers) 

[Blade Templating Language](https://laravel.com/docs/master/blade)

[Templates](https://laravel.com/docs/master/views)

