# laravel-reward

##### 部署步骤
1. composer require hankin/laravel-reward

If you don't use auto-discovery, or using Laravel version < 5.5 Add service provider to your app.php file

2.\Actuallymab\LaravelComment\LaravelCommentServiceProvider::class

Publish configurations and migrations, then migrate comments table.

php artisan vendor:publish
php artisan migrate
