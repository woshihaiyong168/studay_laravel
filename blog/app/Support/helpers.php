<?php


//项目中提取的一些公共函数

if (! function_exists('route_class')) {
    /**
     *
     * 测试公共函数
     *
     * @return string
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

