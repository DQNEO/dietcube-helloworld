<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dietcube\Dispatcher;
use Pimple\Container;

class Application extends Dietcube\Application
{
    public function config(Container $c)
    {
    }
}

class Route implements Dietcube\RouteInterface
{
    public function definition(Container $c)
    {
    }
}

Dispatcher::invoke('Application', __DIR__ . '/..', 'development');
