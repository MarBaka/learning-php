<?php


function fetchAllTasks ($pdo) {
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function fetchSiteInfo ($pdo) {
    $statement = $pdo->prepare('select * from site_info where dev_name=:devname');
    $statement->execute([':devname' => 'Marat']);

    return $statement->fetch(PDO::FETCH_ASSOC);
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
        die( 'wrong data input for check_user');
    } else {
        return false;
    }
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
}