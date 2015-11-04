# Survey API

## Requirements
* Php>=5.4
* php5-mcrypt
* php5-mysql
* php5-pdo

## Instructions

First we need clone the repositorie

git clone [https://github.com/dgaleano/surveytest.git](https://github.com/dgaleano/surveytest.git "Clone")

Change the working directory to the project

cd survey/

Intalling the laravel dependencies

php composer install

Now we execute the below script for install database

./install_db

now run the server

php -S localhost:8000 -t public/

    