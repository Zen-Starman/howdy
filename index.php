<?php
/** Created by PHPStorm. ... */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
//you can do GET /home/main/hello/
$f3->route('GET /', function(){
    echo '<h1>Hello World!</h1>';
});


//Run Fat-free
$f3->run();