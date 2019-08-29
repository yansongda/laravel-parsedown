<?php namespace Yansongda\LaravelParsedown\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Yansongda\LaravelParsedown\ParsedownServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ParsedownServiceProvider::class,
        ];
    }
}
