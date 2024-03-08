<p align="left"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Resources

1. [Technical Documentation](https://laravel.com/docs)
2. [Laracasts Blog](https://laracasts.com)

## Starting Up the Project

1.  Navigate to the project folder

    ```bash
    cd project-folder
    ```

2.  Create a .env file and copy the required key value pairs from .env.example

    ```bash
    touch .env
    ```

3.  Fire up docker to setup the database

    ```bash
    docker compose up -d
    ```

4.  Migrate the database

    ```bash
    php artisan migrate
    ```

5.  Start dev server

    ```bash
    php artisan serve
    ```

## Basic Laravel Commands

1.  Reset the db back to basics

    ```bash
    php artisan migrate:refresh
    ```

2.  Seed data to the db

    ```bash
    php artisan db:seed
    ```

3.  Reset the db back to basics and seed data at the same time

    ```bash
    php artisan migrate:refresh --seed
    ```

4.  Generate your application encryption key

    ```bash
    php artisan key:generate
    ```
