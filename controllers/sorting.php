<?php

$list_of_names = "Enter name #1: Jason; Enter name #2: Mark; Enter name #3: Alex; Enter name #4: Chris; Enter name #5: John";
$names = []; //names added with algorythm in testing_field.php
$lines = explode(";", $list_of_names);

for ($i=0; $i < count($lines); $i++) {
    $names[] = explode(":", $lines[$i])[1];
}

asort($names);
$names = array_values($names);


require 'views/sorting.view.php';