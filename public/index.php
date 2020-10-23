<?php

/**
 * Front Controller
 * The requests are proccesed 
 * in this file and this folder
 */

require __DIR__ . '/../vendor/autoload.php';

$request = new App\Http\Request;
$request->send();
