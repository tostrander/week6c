<?php
//This is my Controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function($f3) {

    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat-free
$f3->run();