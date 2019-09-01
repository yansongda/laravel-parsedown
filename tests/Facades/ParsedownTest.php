<?php

namespace Yansongda\LaravelParsedown\Tests\Facades;

use Yansongda\LaravelParsedown\Facades\Parsedown;
use Yansongda\LaravelParsedown\Tests\TestCase;

class ParsedownTest extends TestCase
{
    public function testHelperWorks()
    {
        $result = parsedown('# Heading 1');

        $this->assertEquals('<h1>Heading 1</h1>', $result);
    }

    public function testFacadeWorks()
    {
        $result = Parsedown::text('# Heading 1');

        $this->assertEquals('<h1>Heading 1</h1>', $result);
    }

    public function testSingletonWorks()
    {
        $result = app('parsedown')->text('# Heading 1');

        $this->assertEquals('<h1>Heading 1</h1>', $result);
    }
}
