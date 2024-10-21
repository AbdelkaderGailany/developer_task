This repository is for developer task

This repository based on php laravel project.

Please make sure you have .env file with mysql configuration

Please make sure you have the following configuration

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

note: please change the parameters accordingly to your desired values

run the following command

composer install

will install all dependencies on your machine

Run the following command

php artisan migrate

then you will must have the needed tables in the database

Run the following command

php artisan serve

now you will can access the project on 127.0.0.1:8000

The main page is the login page, on the nav bar you can see the registration link as well




