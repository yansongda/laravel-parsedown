<h1 align="center">Laravel-Parsedown</h1>

<p align="center">
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/?branch=master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/build-status/master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-parsedown/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-parsedown"><img src="https://poser.pugx.org/yansongda/laravel-parsedown/license" alt="License"></a>
</p>

本包依赖于 [erusev/parsedown](https://github.com/erusev/parsedown)  

## 安装

```shell
$ composer require yansongda/laravel-parsedown
```

### 添加 service provider

```php
<?php

Yansongda\LaravelParasedown\ParsedownServiceProvider::class,
```

### 添加 alias

```php
<?php

'Parsedown' => Yansongda\LaravelParsedown\Facades\Parsedown::class,
```

## 使用方法

### 使用 blade 语法
```php
<?php

@parsedown('## h2');
```

### 使用辅助函数
```php
<?php

{{ parsedown('## h2') }}
```

## License

MIT