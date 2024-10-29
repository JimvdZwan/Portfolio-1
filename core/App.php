<?php

class App
{
    protected static $box =[];
    public static function bind($key, $value)
    {
        static::$box[$key] = $value;
    }

    public static function get($key)
    {
        return static::$box[$key];
    }
}