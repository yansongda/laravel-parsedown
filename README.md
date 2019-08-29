temp edit to open PR
<h1 align="center">Laravel-Parsedown</h1>

<p align="center">
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/?branch=master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/build-status/master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/license" alt="License"></a>
</p>

This Package depends on [erusev/parsedown](https://github.com/erusev/parsedown) 

## Requirement

- composer
- laravel | lumen >= 5.1

## Installation

```shell
$ composer require yansongda/laravel-parsedown
```

### Add service provider(if laravel<5.5 || lumen)

```php
<?php

Yansongda\LaravelParsedown\ParsedownServiceProvider::class,

// lumen
// $app->register(Yansongda\LaravelParsedown\ParsedownServiceProvider::class);
// $app->withFacades();
```

### Add alias(if laravel<5.5)

```php
<?php

'LaravelParsedown' => Yansongda\LaravelParsedown\Facades\Parsedown::class,
```

### Config(OPTION)

```shell
$ php artisan vendor:publish --provider="Yansongda\\LaravelParsedown\\ParsedownServiceProvider" --tag=laravel-parsedown-config
```

**Lumen user please manually copy the configuration file**

|     config    |            desc            | default |
| :-----------: | :------------------------: | :-----: |
| breaksEnabled | automatic line breaks      | true |
| markupEscaped | escapes markup (HTML)      | true |
| urlsLinked    | automatic linking of URLs  | true |
| safeMode      |  safeMode | false |

Reference: [erusev/parsedown](https://github.com/erusev/parsedown/wiki/Tutorial:-Get-Started)

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
