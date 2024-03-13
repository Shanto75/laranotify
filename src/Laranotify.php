<?php

namespace Shanto75\Laranotify;

class Laranotify
{
    protected static $message;
    protected static $type;
    protected static $color;

    public static function notify($message)
    {
        self::$message = $message;
        return new self();
    }

    public static function warning()
    {
        self::$type = 'warning';
        self::$color = '#ffc107';
        return new self();
    }

    public static function success()
    {
        self::$type = 'successful';
        self::$color = '#198754';
        return new self();
    }

    public static function error()
    {
        self::$type = 'failed';
        self::$color = '#dc3545';
        return new self();
    }

    public static function getMessage(){
        return self::$message;
    }

    public static function getType(){
        return self::$type;
    }

    public static function getColor(){
        return self::$color;
    }
}