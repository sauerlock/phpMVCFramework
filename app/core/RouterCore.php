<?php

namespace app\core;

class RouterCore
{
    private $uri;
    private $method;
    private $getArray = [];

    public function __construct()
    {
        $this->initialize();
        require_once('../app/config/router.php');
        $this->execute();
    }
    /**
     * The function initializes the PHP script by setting the global method variable, normalizing the URI,
     * and removing unnecessary parts of the URI.
     */
    private function initialize()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        $explodeURI = explode('/', $uri);

        $uri = $this->normalizeURI($explodeURI);

        for ($i = 0; $i < UNSET_URI_COUNT; $i++) {
            unset($uri[$i]);
        }

        $this->uri = implode('/', $this->normalizeURI($uri));
        if (DEBUG_URI) {
            dd($this->uri);

            // Uma das maneiras de tratar a url
            // dd(str_replace('/mini-framework-mvc-php/', '', $uri));
        }
    }

    private function get($router, $callback)
    {
        $this->getArray[] = [
            'router' => $router,
            'callback' => $callback
        ];
    }

    private function execute()
    {
        switch ($this->method) {
            case 'GET':
                $this->executeGet();
                break;
            case 'POST':

                break;
        }
    }

    private function executeGet()
    {
        foreach ($this->getArray as $get) {
            $route = substr($get['router'], 1);
            if (substr($route, -1) == '/'){
                $route = substr($route, 0, -1);
                dd($route);
            } 
            if ($route == $this->uri) {
                if(is_callable($get['callback'])) {
                    $get['callback']();
                    break;
                }
            }
        }
    }

    private function normalizeURI($array)
    {
        return array_values(array_filter($array));
    }
}
