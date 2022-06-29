<?php
// path for after localhost is /www/testing_field.php

require 'core/testing_field.functions.php';
require 'classes/Task.php';
require 'classes/Site_info.php';


$tasks = $app['database']->select('todos', 'Task');

$sinfo_args = ['where dev_name = ', 'dev_name', 'Marat'];
$site_info = $app['database']->select("site_info", "Site_info", $sinfo_args[0], $sinfo_args[1], $sinfo_args[2]);
unset ($site_info_args);

$greeting = "Hello! <br>
        My name is " . $site_info->dev_name . ", and this is my <u>testing field</u> for different aspects of PHP, HTML and CSS<br>
        The file will be updated often and some things could be deleted or moved around<br>
        <em>Might also include JS in the future, who knows?)</em>";


//redirector

$list_of_names = "Enter name #1: Jason; Enter name #2: Mark; Enter name #3: Alex; Enter name #4: Chris; Enter name #5: John";
$names = []; //names added with algorythm in testing_field.php
$lines = explode(";", $list_of_names);

for ($i=0; $i < count($lines); $i++) {
    $names[] = explode(":", $lines[$i])[1];
}

asort($names);
$names = array_values($names);

$test_user = [
    'name' => 'JoJo',
    'age' => 17,
    'pref_highlight' => 'red'
];






require 'views/main.view.php';