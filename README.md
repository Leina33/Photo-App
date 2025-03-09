
🔐 Features
Landing Page
Login and Sign Up
Authenticated Pages (Home, User, Album, Photo)
Search Functionality
API Integration
🧪 Quality Assurance
✅ Manual Testing
The manual test cases for Photo-App are documented in the following file:

Enhanced Manual Test Cases
✅ Test Automation
Automated search functionality using [your chosen tool/language].
The automation script is located in the /tests/automation/ directory.
✅ API Testing
API test cases for all endpoints.
Files are under /tests/api/.
✅ Performance Testing
Load, stress, and response time tests.
Test plans are in /tests/performance/.

📦 How to Run the Project
Clone the repo:
bash
Copy
Edit
git clone https://github.com/Leina33/Photo-App.git
Start XAMPP (Apache and MySQL).
Access the app:
bash
Copy
Edit
http://localhost/PhotoApp
Run tests (manual or automated) using the test plans provided.
=======
Setting up environment
----------------------------------------------------------------
1. Download and install Xampp or Wamp : local server environment
2. Download and install IDE preferrably VS code
3. Download and install Composer.exe
4. Download and install Node.js

Creating a new project
==================================================
1. navigate to C:\xampp\htdocs\ folder
2. Open terminal and run this command
   -"composer create-project laravel/laravel PhotoApp"
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



===================================================
clonning existing PhotoApp project from repo to local machine

Rename .env.example into .env

uncomment db config 

rename from sqlite to mysql

Rename : Appname 

run this command 

1.composer install

2.php artisan key:generate

3.composer update

4.php artisan migrate

5.npm install

6.npm run dev

7.php artisan serve
