<?php


function connectToDB (){
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=testing_field', 'root', 'absTraction-944');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


function fetchAllTasks ($pdo) {
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


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

function check_user ($user) {
    if ($user['age'] >= 18) {
        return true;
    } elseif (gettype($user) != 'array' || $user['age'] == null) {
        echo 'wrong data input for check_user';
        return false;
    } else {
        die('Error with check_user');
    }
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
}