```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Reactor;

try {
    $dbInfo = [
            'store_url' => 'http://yrmse.vpkhf.servertrust.com/',
            'api_user' => 'yigit@optimum7.com',
            'encrypted_key' => 'DA820649F4696C7F8717FE245CC29435F46D07284E4CE9B5EF9288381B0C4075'
        ];

        $db = new Reactor();
        $db::init($dbInfo, ['filename' => 'orm.asp', 'debug' => false]);
} catch(Exception $e) {
    dd($e);
}
```
