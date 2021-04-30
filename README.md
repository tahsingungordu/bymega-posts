# Posts for Laravel 5/6/7

## Installation

```json
{
    "require": {
        "laravel/framework": "5.0.*",
        "tahsingungordu/bymega-posts": "dev-main"
    },
    "minimum-stability": "dev"
}
```

or

Require this package with composer:
```
composer require tahsingungordu/bymega-posts
```

## Configuration

To use your own settings, publish config.

```$ php artisan vendor:publish```

`config/bymegaposts.php`

```php
return [
  'posts_table' => 'posts',
];
```