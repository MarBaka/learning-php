<?php


$query = require 'core/bootstrap.php';



require Router::load('routes.php')
    ->direct(Request::uri());


//echo"huy";
//require 'core/bootstrap.php';
//require 'core/router.php';
//
//require Router::load('routes.php')
//    ->direct($pure_uri);
