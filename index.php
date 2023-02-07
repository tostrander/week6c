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

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67);
    $f3->set('radius', 10);

    //Define an array of fruits
    $fruits = array("apple", "banana", "orange");
    /*
    foreach ($fruits as $fruit) {
        echo $fruit;
    }
    */

    $f3->set('fruits', $fruits);
    //$f3->set('fruits', array("apple", "banana", "orange"))

    $f3->set('colors', array("red", "blue", "yellow"));

    $cupcakes = array("chocolate"=>"Chocolate Ganache", "strawberry"=>"Strawberry Shortcake",
        "maple"=>"Maple Walnut");
    $f3->set('cupcakes', $cupcakes);

    //Add a variable that stores your age
    $f3->set('age', 25);

    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat-free
$f3->run();