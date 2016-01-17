<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Pimple\Container;
use Dietcube\Application;
use Dietcube\RouteInterface;
use Dietcube\Dispatcher;

class MyApplication extends Application
{
    public function config(Container $c)
    {
    }
}

class Route implements RouteInterface
{
    public function definition(Container $c)
    {
    }
}

$app = new MyApplication(__DIR__ . '/..', 'development');
$dispatcher = new Dispatcher($app);
$dispatcher->boot();
$response = $dispatcher->executeAction(function () {
    return 'hello action';
}, [], false);

echo $response;
