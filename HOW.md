#####1. Installation Project Livewire Jetstream & Template Layout Setup
composer create-project --prefer-dist  laravel/laravel .  
composer require livewire/livewire  
php artisan make:livewire HomeComponent  

Edit  env. file  

mysql -u root -p  
create database db_name;  
drop database laravel8_ecommerce;   
show databases;   
USE db_name;  
show tables;  
drop table table_name;  
exit   

composer require laravel/Jetstream  
php artisan jetstream:install livewire  
npm install  
npm run dev  
php artisan migrate  

git init  
git add .  
git commit –m "Comment"  
git remote add origin https://github.com/SergeyHub/repository-name.git  
git push -u origin master  
 
#####2. Create Shop, Cart and Checkout Page
php artisan make:livewire ShopComponent  
php artisan make:livewire CartComponent  
php artisan make:livewire CheckoutComponent  

#####3. Make Shop Page Products Dynamic
php artisan make:model Category -m   
php artisan make:model Product -m   
php artisan migrate  
php artisan make:factory CategoryFactory --model=Category  
php artisan make:factory ProductFactory --model=Product  
php artisan db:seed  

#####4. Admin and User Authetication  
// composer require laravel/Jetstream  
// php artisan jetstream:install livewire  
npm install  
npm run dev  
php artisan migrate  
php artisan migrate:refresh  

php artisan make:middleware AuthAdmin  

php artisan make:livewire admin/AdminDashboardComponent    
php artisan make:livewire user/UserDashboardComponent    


