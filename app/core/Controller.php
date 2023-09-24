<?php

namespace app\core;

class Controller {

    protected function load(string $view, $params = [])
    {   
        $twig = new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader('../app/view/')          
        );
            
        $twig->addGlobal('BASE', BASE);
        return $twig->render($view . '.twig.php', $params);

    }
}





?>