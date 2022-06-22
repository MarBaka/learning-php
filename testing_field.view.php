<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="мой сайт, тестирование веба">
    <title> testing field </title>
    <link rel="stylesheet" href="testing_style.css">
</head>

<body>

<header>
    <?= $greeting; ?>
    <br>
    <br>
    Contacts: GitHub - <a href="https://github.com/MarBaka" target="_blank">@Marbaka</a>, e-mail - marat31bv@gmail.com
    <br>
    <div class="caption">
        The testing field is <?= $is_site_done ? 'finished and all works are stopped' : 'still being used and updated';?>
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
<br>
<br>
<br>
<?= json_encode($names);?>
<br>
<?= "Input:" . $list_of_names; ?>
<br>
<ul>
    <?php foreach($names as $name) : ?>
        <strong><li><?= $name; ?></li></strong>
    <?php endforeach; ?>
</ul>
<br>
<br>
<br>
<br>
</body>
</html>
