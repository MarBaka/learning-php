<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="мой сайт, тестирование веба">
    <title> testing field </title>
    <link rel="stylesheet" href="views/main.css">
</head>

<body>

<header>
    <?= $greeting; ?>
    <br>
    <br>
    Contacts: GitHub - <a href="https://github.com/MarBaka" target="_blank">@Marbaka</a>, e-mail - marat31bv@gmail.com
    <br>
    <div class="caption">
        The testing field is <?= $site_info->is_finished ? 'finished and all works are stopped' : 'still being used and updated';?>;
        Last big update: <?= $site_info->last_big_upd;?>
    </div>

</header>

<?php
    $sorting_array = [1, 2, -1, -2, 3,412, -256,2.23, -32,0];
    echo "<br> Array before sorting: ";
    print_r($sorting_array);
    echo "<br> Array after sorting: ";
    print_r(my_sort($sorting_array));
    echo "<br>";
?>
<hr>
<br>
<br>
<?= "Input:" . $list_of_names; ?>
<br>
<ul>
    <?php foreach($names as $name) : ?>
        <strong><li><?= $name; ?></li></strong>
    <?php endforeach; ?>
</ul>
<hr>

<br>

<ul>
    <?php if (check_user($test_user)==true) : ?>
        <li><strong><?= $test_user['name'] . '</strong> is approved to be on this site';?></li>
    <?php else : ?>
        <li><strong><?= $test_user['name'] . '</strong> is not approved to be on this site';?></li>
    <?php endif?>
</ul>
<hr>
<br>
<ul>
    <?php foreach ($tasks as $task) : ?>
    <li> <?= "<strong>$task->description</strong><em>" ?> <?=  $task->completed ? ': <s>done</s></em>': ': unfinished</em>' ?></li>
    <?php endforeach;?>
</ul>

</body>
</html>