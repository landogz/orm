<?php
//for testing purposes.
use Core\Schemas\Products_Joined;

require(__DIR__ . '/vendor/autoload.php');

try {
    $config = [
        'store_url' => 'http://fsadx.hqmfs.servertrust.com',
        'api_user' => 'erdem@optimum7.com',
        'encrypted_key' => '7CDFF1C911E49F57A90477E0FA5F62CD9E96ACFE4283CF9117C12F599F3CA46A',
    ];
    $core = new Core();
    $core::init($config);

} catch (Exception $e) {
    dd($e);
}

dd(Products_Joined::skip(112)->force()->get());