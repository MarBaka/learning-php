<?php
// path for after localhost is /www/testing_field.php?name=Marat

require 'testing_field.functions.php';
require 'Task.php';


$site_info = [
    'Dev name' => 'Marat',
    'last big upd' => '22.06.22',
    'is done' => false,
    'langs used' => ['PHP', 'HTML', 'CSS']
];

$greeting = "Hello! <br>
        My name is " . $site_info['Dev name'] . ", and this is my <u>testing field</u> for different aspects of PHP, HTML and CSS<br>
        The file will be updated often and some things could be deleted or moved around<br>
        <em>Might also include JS in the future, who knows?)</em>";

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


$pdo = connectToDB();

$tasks = fetchAllTasks($pdo);


require 'testing_field.view.php';
