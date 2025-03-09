Setting up environment
================================================
1. Download and install Xampp or Wamp : local server environment
2. Download and install IDE preferrably VS code
3. Download and install Composer.exe
4. Download and install Node.js

Creating a new project
==================================================
1. navigate to C:\xampp\htdocs\ folder
2. Open terminal and run this command
   - "composer create-project laravel/laravel PhotoApp"
   - on .env file
       - uncomment db config 
       - rename from sqlite to mysql
       - rename database name
    - Auth scaffolding
      run command
      - composer require laravel/breeze
      - php artisan breeze:install
      - php artisan migrate
      - php artisan serve


Clonning existing PhotoApp project from repo to local machine
===============================================================
1. Rename .env.example into .env

2. Uncomment db config 

- Rename from sqlite to mysql

- Rename : Appname 

3. Run this command 

- composer install

- php artisan key:generate

- composer update

- php artisan migrate

- npm install

- npm run dev

- php artisan serve