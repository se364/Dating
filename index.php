<?php

/*
 * Shah Emran
 * 4/17/2020
 *
 * Dating Website
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();


//Require the autoload file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");
//require_once ("model/validation.php");

// Create an instance of the Base Class
$f3 = Base::instance();


//Instantiate a Validation object
$validator = new Validation();

//Instantiate a Controller object
$controller = new Controller($f3, $validator);


// Home route
$f3->route('GET|POST /', function() {

    $GLOBALS['controller']->home();

});


//Personal Information route
$f3->route('GET|POST /person', function(){

    $GLOBALS['controller']->person();

});


//Profile route
$f3->route('GET|POST /profile', function(){

    $GLOBALS['controller']->profile();

});

//Interests route
$f3->route('GET|POST /interests', function(){

    $GLOBALS['controller']->interests();

});


//Summary route
$f3->route('GET|POST /summary', function(){

    $GLOBALS['controller']->summary();

});

// Run Fat Free
$f3->run();

?>
