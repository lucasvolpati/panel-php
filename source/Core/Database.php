<?php

namespace Source\Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database
{
    private static ?Capsule $capsule = null;

    public static function connect():Capsule {
        if (self::$capsule === null) {
            self::$capsule = new Capsule;

            self::$capsule->addConnection([
                'driver'    => CONF_DB_DRIVER,
                'host'      => CONF_DB_HOST,
                'database'  => CONF_DB_NAME,
                'username'  => CONF_DB_USER,
                'password'  => CONF_DB_PASS,
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]);

            self::$capsule->setEventDispatcher(new Dispatcher(new Container));
            self::$capsule->setAsGlobal();
            self::$capsule->bootEloquent();
        }

        return self::$capsule;
    }
}
