<?php
namespace  {
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
        return [
            ['GET', '/', 'Example::hello'],
        ];
    }
    }

}

namespace Controller {

    class ExampleController extends \Dietcube\Controller
{
    public function hello()
    {
        return 'hello world';
    }
    }
}

namespace  {
    \Dietcube\Dispatcher::invoke('Application', __DIR__ . '/..', 'development');
}
