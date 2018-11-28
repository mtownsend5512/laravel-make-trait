Rapid trait generation in Laravel.

## Installation

Install via composer:

```
composer require mtownsend/laravel-make-trait
```

## Quick start

### Generating a trait

```
php artisan make:trait YourTraitName
```

Your trait will be created in the ``App\Traits`` directory.

### Subdirectories

If you wish to further organize your traits by subdirectories, you can do so in the same way you would any other ``artisan make`` command.

```
php artisan make:trait Orders\\StatusCompleted --scope
```

Your StatusCompleted trait will be created in the ``App\Traits\Orders`` directory and namespaced appropriately.

## Arguments

**-b** or **--boot**

```
php artisan make:trait YourTraitName --boot
```

Creates a trait with a boot method.

**-s** or **--scope**

```
php artisan make:trait YourTraitName --scope
```

Creates a trait with a scope method.

## Purpose

Laravel provides wonderful time saving generation commands for almost all of the components developers need to build a successful web application. This package introduces the convenience of Laravel's ``artisan make`` for trait generation.

## Credits

- Mark Townsend
- [All Contributors](../../contributors)

## Testing

Due to the simple nature of this package, testing has been purposefully omitted.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.