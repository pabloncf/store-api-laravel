# Store stock API with Laravel

## Installation Guide
### First steps
* First clone the git repository: git clone https://github.com/pabloncf/store-api-laravel.git

* Go into the directory: 
    ```
    cd store-api-laravel
    ```
* After this, install composer: 
    ```
    composer install
    ```
* Based on .env.example make your .env file

* Generate teh APP_KEY puting on terminal: 
    ```
    php artisan key:generate
    ```
* Create an empty database on your MySQL server and define the connection information in the .env file in the variables DB_DATABASE, DB_USERNAME and DB_PASSWORD.

* Use migrate to make the migrations on the Data Base:
    ```
    php artisan migrate
    ```
     

### Downloading the node modules
    npm install

### Downloading the laravel-mix modules
    npm install laravel-mix --save-dev

### Runing the server
    php artisan server

## Tests
    
### Create a new test file:
    php artisan make:test NameTest

### Run test:
    php artisan test .\tests\Feature\NameTest.php
