<h1 align="center">Laravel-Parsedown</h1>

<p align="center">
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/?branch=master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/build-status/master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/license" alt="License"></a>
</p>

## 安装

```shell
$ composer require yansongda/laravel-parsedown
```

### 添加 service provider

```php
Yansongda\LaravelParasedown\ParsedownServiceProvider::class,
```

### 添加 alias

```php
'Parasedown' => Yansongda\LaravelParsedown\Facades\Parsedown::class,
```

## 使用方法

```php
use Parsedown;

$md = '## h2'

return Parsedown::text($md);
```

具体方法请传送至 [这里](https://github.com/erusev/parsedown)

## License

MIT