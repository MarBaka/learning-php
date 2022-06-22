<?php
// path for after localhost is /www/testing_field.php?name=Marat


$greeting = "Hello! <br>
        My name is " . htmlspecialchars($_GET['name']) . ", and this is my <u>testing field</u> for different aspects of PHP, HTML and CSS<br>
        The file will be updated often and some things could be deleted or moved around<br>
        <em>Might also include JS in the future, who knows?)</em>";

$is_site_done = false;

function my_sort($arr) {
    for ($iteration = 0; $iteration < count($arr); $iteration++) {
        for ($i = 0; $i < count($arr); $i++) {
            if ($i < count($arr) - 1) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $data_holder = $arr[$i + 1];
                    $arr[$i + 1] = $arr[$i];
                    $arr[$i] = $data_holder;
                }
            }
        }
    }
    return $arr;
}

$list_of_names = "Enter name #1: Jason; Enter name #2: Mark; Enter name #3: Alex; Enter name #4: Chris; Enter name #5: John";
$names = []; //names added with algorythm in testing_field.php
$lines = explode(";", $list_of_names);
for ($i=0; $i < count($lines); $i++) {
    $names[] = explode(":", $lines[$i])[1];
}
asort($names);
$names = array_values($names);


require 'testing_field.view.php';
