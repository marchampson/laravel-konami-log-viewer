# Laravel Logs in Popup Window

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marchampson/laravel-konami-log-viewer.svg?style=flat-square)](https://packagist.org/packages/marchampson/laravel-konami-log-viewer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marchampson/laravel-konami-log-viewer/run-tests?label=tests)](https://github.com/marchampson/laravel-konami-log-viewer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marchampson/laravel-konami-log-viewer/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marchampson/laravel-konami-log-viewer/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marchampson/laravel-konami-log-viewer.svg?style=flat-square)](https://packagist.org/packages/marchampson/laravel-konami-log-viewer)

This package will display your laravel log files in a popup window when you type in the Konami code key combination [up-up-down-down-left-right-left-right-B-A]. Once open you have the option to view any files in the log directory.

## Installation

You can install the package via composer:

```bash
composer require marchampson/laravel-konami-log-viewer
```

You can publish the Javascript file with:

```bash
php artisan vendor:publish --tag="konami-log-viewer-assets"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="konami-log-viewer-views"
```

## Usage
Once the assets are published (above). Call the JS file in your main layout file and then invoke using the key combination.
```javascript
<script src="{{ asset('vendor/konami-log-viewer/js/konami-log-viewer.js')}}"></script>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

[//]: # (## Contributing)

[//]: # (Please see [CONTRIBUTING]&#40;https://github.com/marchampson/.github/blob/main/CONTRIBUTING.md&#41; for details.)

## Security Vulnerabilities

This package is used entirely at your own risk. If you wish to report a vulnerability, please contact me directly.

## Credits

- [Marc Hampson](https://github.com/marchampson)

[//]: # (- [All Contributors]&#40;../../contributors&#41;)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
