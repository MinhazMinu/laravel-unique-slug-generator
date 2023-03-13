# laravel-unique-slug-generator

## Installation

```sh
composer require minhaz/laravel-unique-slug
```

## Use from controller

```php
// Import this first
use Akash\LaravelUniqueSlug\Facades\UniqueSlug;

$slug = UniqueSlug::generate(App\Models\User::class,'jonedoe ','emails');
//jonedoe

//after creating a new user with name jonedoe, then hit again
$slug = UniqueSlug::generate(App\Models\User::class,'jonedoe ','emails');
//jonedoe-1
```

### Publish configuration

```sh
php artisan:publish xxx
```

## Contribution

You`re open to create any pull request
