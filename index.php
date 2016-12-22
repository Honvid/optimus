<?php
/**
 * @author Honvid
 * @time: 2016/12/15  下午5:39
 */

/*
|--------------------------------------------------------------------------
| Register composer
|--------------------------------------------------------------------------
|
| Composer provides a generated class loader for the application.
|
*/

require __DIR__.'/bootstrap/autoload.php';


/*
|--------------------------------------------------------------------------
| Load framework
|--------------------------------------------------------------------------
|
| This bootstraps the framework and loads up this application.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

$klein = new \Klein\Klein();
//phpinfo();
$klein->respond('GET', '/hello-world', function () {
    return 'Hello World!';
});

$klein->dispatch();