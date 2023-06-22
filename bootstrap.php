<?php

use Core\Database\Capsule\Manager as Capsule;

class Core
{
    public static $capsule;

    /**
     * @param $config
     * @throws Exception
     */
    public static function init($config)
    {
        if (empty($config['store_url'])) {
            throw new Exception('Please check your config file');
        }

        self::$capsule = new Capsule;
        self::$capsule->addConnection([
            'store_url' => $config['store_url'],
            'api_user' => $config['api_user'],
            'encrypted_key' => $config['encrypted_key'],
            'file' => $config['filename'] ?? 'core.asp'
        ]);
        self::$capsule->setAsGlobal();
        self::$capsule->bootEloquent();
    }
}