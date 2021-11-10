<?php

namespace App;

use App\Controllers\ControllerInterface;

/**
 * Application entry point.
 */
class App
{
    /**
     * @var string
     */
    private $page;

    /**
     * @var Request
     */
    private $request;

    /**
     * Uruchamia aplikację.
     */
    public function run(): void
    {
        $something = function (){
                echo '123';
                return '456';
        };
        $something2 = '123';
        var_dump(is_callable($something), is_callable($something2));

        var_dump($something);

        //$this->processRouting();
        $this->request = Request::initialize();
        $serviceContainer = ServiceContainer::getInstance();
        $router = $serviceContainer->get('router');

        /** @var Router $router */
        $matchedRoute = $router->match($this->request);
//        if ($matchedRoute instanceof ControllerInterface) {
//            $response = $matchedRoute($this->request);
//            foreach ($response->getHeaders() as $header) {
//                header($header);
//            }
//
//            echo $response->getBody();
//
//        } else {
//            $layout = new Layout($this->request, $matchedRoute);
//            $layout->render();
//        }
    }
}