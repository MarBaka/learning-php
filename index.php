<?php

echo __DIR__.'/core/bootstrap.php';
$query = require __DIR__.'/core/bootstrap.php';



require Router::load('routes.php')
    ->direct(Request::uri());


//echo"chlen";

//require 'core/bootstrap.php';
//require 'core/router.php';
//
//require Router::load('routes.php')
//    ->direct($pure_uri);
