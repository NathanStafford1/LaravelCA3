## Laravel 8 Complete Blog

# Link to my youtube video demonstrating my website
<a href="http://www.youtube.com/watch?feature=player_embedded&v=https://youtu.be/Kcf8EIpy9aQ
" target="_blank"><img src="http://img.youtube.com/vi/https://youtu.be/Kcf8EIpy9aQ/0.jpg" 
alt="IMAGE ALT TEXT HERE" width="240" height="180" border="10" /></a>

## Website homepage
![alt text](https://ibb.co/f8Xkx85 "Homepage")

## Website blog 
![alt text](https://ibb.co/1QNg5B8 "Blog")

## Wesbite Login page
![alt text](https://ibb.co/dLcydbz "Login")

## Wesbite blog posts
![alt text](https://ibb.co/RpZYKF3 "Blogs")


This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
