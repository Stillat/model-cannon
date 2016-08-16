# Model Cannon for Laravel

Model Cannon is an incredibly simple Laravel package that gives you back your "Models" directory, if you are into that sort of thing. Using it is super simple.

## Configuration

### Composer

First, you need to add the Model Cannon package to your `composer.json` file and run the `composer update` command:

```
"stillat/model-cannon": "~1.0"
```

### Service Provider

Next, register the `Stillat\ModelCannon\ModelCannonServiceProvider` service provider in your `app` configuration file. Simply add this line to the "packages" section of the `app` config:

```
Stillat\ModelCannon\ModelCannonServiceProvider::class,
```

## Usage

It couldn't be simpler! Just use Laravel's `make:model` command like you always ahve. The only difference is now models will be stored in a `Models` directory and have the correct `Models` namepsace added automatically. Seriously, that is all there is to it.

```
php artisan make:model User
```

## License

Model Cannon is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).