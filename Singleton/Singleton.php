<?php

class Singleton
{
    // public static $instance = null;
    public static $instances = [];
    private final function __construct()
    {
    }
    private final function __clone()
    {
    }
    private final function __wakeup() // prevent deserialize
    {
    }
    public static function getInstance()
    {
        // if (static::$instance == null) {
        //     static::$instance = new static();
        // }

        $class = get_called_class();
        if (!isset(static::$instances[$class])) {
            static::$instances[$class] = new static();
        }

        return static::$instances[$class];
    }
}
