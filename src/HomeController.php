<?php

namespace Ben\StructureYourPhpProject;

use Jenssegers\Blade\Blade;


class HomeController {

    public function __construct()
    {
        $this->blade = new Blade('views', 'cache');
    }

    public function home(){
        echo $this->blade->render('home', array('name' => 'Ben', 'level' => 'master'));
    }

    public function index(){
        echo "Hello from Controller";
    }
}