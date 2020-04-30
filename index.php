<?php

/*
 * Shah Emran
 * 4/17/2020
 *
 * Dating Website
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

// Create an instance of the Base Class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function(){
    //echo '<h1> Pet Home</h1>';
    $view = new Template();
    echo $view->render('views/home.html');
}
);

// Run fat free
$f3->run();

?>
