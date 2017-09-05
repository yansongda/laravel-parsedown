<?php

if (!function_exists('parsedown')) {
    /**
     * convert markdown to html.
     *
     * @author yansongda <me@yansongda.cn>
     *
     * @param string $expression
     *
     * @return string
     */
    function parsedown($expression)
    {
        return resolve('parsedown')->text($expression);
    }
}
