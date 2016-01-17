<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Pimple\Container;

class Application extends \Dietcube\Application
{
    public function config(Container $c)
    {
    }
}

class Route implements \Dietcube\RouteInterface
{
    public function definition(Container $c)
    {
    }
}

$app = new Application(__DIR__ . '/..', 'development');
$dispatcher = new \Dietcube\Dispatcher($app);
$dispatcher->boot();
$response = $dispatcher->executeAction(function () {
    return 'hello action';
}, [], false);

echo $response;
