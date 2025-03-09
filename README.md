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
- Rename .env.example into .env

- uncomment db config 

- rename from sqlite to mysql

- Rename : Appname 

- run this command 

1.composer install

2.php artisan key:generate

3.composer update

4.php artisan migrate

5.npm install

6.npm run dev

7.php artisan serve