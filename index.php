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

// Create an instance of the Base Class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function(){
    //echo '<h1> Pet Home</h1>';
    $view = new Template();
    echo $view->render('views/home.html');
}
);


//Order route
$f3->route('GET|POST /person', function($f3) {

    $genders = getGender();

    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //["food"]=>"tacos" [$_POST);"meal"]=>"lunch"

        //Validate the data
//        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['age'])) {
//            echo "<p>Please enter a name</p>";
//        }
//        //Data is valid
//        else {
            //Store the data in the session array
            $_SESSION['fname'] = $_POST['fname'];
            $_SESSION['lname'] = $_POST['lname'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['gender'] = $_POST['gender'];
            $_SESSION['phone'] = $_POST['phone'];

            //Redirect to Order 2 page
            $f3->reroute('profile');
        }


    $f3->set('gender', $genders);
    $view = new Template();
    echo $view->render('views/PersonInfo.html');

});

//Order route
$f3->route('GET|POST /profile', function($f3) {

    $seeks = getSeek();

    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['seek'] = $_POST['seek'];
        $_SESSION['bio'] = $_POST['bio'];


        //Redirect to summary page
        $f3->reroute('interest');
    }

    $f3->set('seek', $seeks);
    $view = new Template();
    echo $view->render('views/ProfileInfo.html');
});

//Breakfast route

$f3->route('GET|POST /interest', function($f3) {

    $outdoor = getOutdoor();
    $indoor =  getIndoor();

    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['indoor'] = $_POST['indoor'];
        $_SESSION['outdoor'] = $_POST['outdoor'];


        //Redirect to summary page
        $f3->reroute('summary');
    }

    $f3->set('indoor', $indoor);
    $f3->set('outdoor', $outdoor);
    $view = new Template();
    echo $view->render('views/Interests.html');
});




// Summary of the profile
$f3->route('GET /summary', function() {
    //echo '<h1>Thank you for your order!</h1>';

    $view = new Template();
    echo $view->render('views/ProfileSummary.html');

    session_destroy();
});

// Run fat free
$f3->run();

?>
