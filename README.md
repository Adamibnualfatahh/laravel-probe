# laravel-probe
Easily monitor CPU, memory, storage, web server, and network connections in your Laravel applications. Gain insights into system performance and enhance your app's efficiency. Quick integration for seamless resource tracking.

## Installation

You can install the package via composer:

```bash
composer require laravel-probe/probe
```

## Integration
After installing the package, add the following line to the providers array in your config/app.php file:
```bash
Laravel\Probe\ProbeServiceProvider::class,
```

## Usage
To start monitoring system resources, you can use the provided artisan command:
```bash
php artisan probe:listen
```

## Credits

- [AdamIbnu](https://github.com/Adamibnualfatahh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
