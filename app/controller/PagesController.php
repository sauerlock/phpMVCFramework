<?php

namespace app\controller;

use app\core\Controller;

class PagesController extends Controller 
{
    public function __construct() 
    {

    }

    public function home() {
        $this->load('home/main');
    }
    public function categoria() {
        $this->load('categoria/main');
    }
    public function aboutUs() {
        $this->load('aboutUs/main');
    }
    public function contato() {
        $this->load('contato/main');
    }
}
?>