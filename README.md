<h1 align="center">Laravel-Parsedown</h1>

<p align="center">
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/?branch=master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/build-status/master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/license" alt="License"></a>
</p>

This Package is depends on [erusev/parsedown](https://github.com/erusev/parsedown)  

## Installation

```shell
$ composer require yansongda/laravel-parsedown
```

### Add service provider

```php
<?php

Yansongda\LaravelParasedown\ParsedownServiceProvider::class,
```

### Add alias

```php
<?php

'Parsedown' => Yansongda\LaravelParsedown\Facades\Parsedown::class,
```

### Config(OPTION)

```shell
$ php artisan vendor:publish --provider="Yansongda\\LaravelParsedown\\ParsedownServiceProvider" --tag=config
```

## Usage

### Using blade
```php
<?php

@parsedown('## h2');
```

### Using Helper
```php
<?php

{{ parsedown('## h2') }}
```

## License

MIT