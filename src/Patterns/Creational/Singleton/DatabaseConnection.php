<?php

namespace Patters\Creational\Singleton;

class DatabaseConnection
{
    private static $connection;
    private static $timestamp;


    public static function getConnection()
    {
        if (static::$connection == null) {
            static::$timestamp = time();
            static::$connection = new static();
        }

        return static::$connection;
    }

    public static function getTimestamp()
    {
        return static::$timestamp;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
        throw new Exception('Clone is forbidden');
    }

    private function __wakeup()
    {
        throw new Exception('Wakeup is forbidden');
    }
}
