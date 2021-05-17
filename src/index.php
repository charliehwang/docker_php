<?php

// $f3=require('../vendor/bcosca/fatfree-core/base.php');
require '../vendor/autoload.php';

$f3 = \Base::instance();

$f3->route(
    'GET /',
    function ($f3) {
        $f3->set('var', 'value');
        echo View::instance()->render('./ui/views/template.html');
        // echo \Template::instance()->render('./views/template.html');

// echo 'Hello, world! F3';
    }
);

$f3->run();
