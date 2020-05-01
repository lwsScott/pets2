<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate the F3 Base class
$f3 = Base::instance();

//define a default route
//when user visits the default root(file) - ...328/hello
//it runs the function
$f3->route('GET /', function(){
    echo '<h1>My Pets</h1>';
    echo "<a href='order'>Order a Pet</a>";



});

//run fat free
$f3->run();
