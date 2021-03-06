# laravel-reward

###  部署步骤

```
$ composer require hankin/laravel-reward

```

If you don't use auto-discovery, or using Laravel version < 5.5 Add service provider to your app.php file

`\Actuallymab\LaravelComment\LaravelCommentServiceProvider::class`

Publish configurations and migrations, then migrate comments table.


```
php artisan vendor:publish
php artisan migrate
```


Add CanComment trait to your User model.


```
use Hankin\LaravelReward\CanReward;

class User extends Model
{
    use CanReward;
    
    // ...   
}
```


Add Commentable interface and HasComments trait to your commentable model(s).


```
use Hankin\LaravelReward\Contracts\Rewardable;
use Hankin\LaravelReward\HasRewards;

class Product extends Model implements Rewardable
{
    use HasRewards;
    
    // ...   
}
```

If you want to have your own Comment Model create a new one and extend my Comment model.


```
use Hankin\LaravelReward\Models\Rewardas LaravelReward;

class Reward extends LaravelReward
{
    // ...
}
```
