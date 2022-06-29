<?php require 'partials/head.php';?>

<h1>This is a header1 </h1>
<ul>
    <li title="but it is a llst item!">and this isn't</li>
</ul>


<?= "Input:" . $list_of_names; ?>
<br>
<ul>
    <?php foreach($names as $name) : ?>
        <strong><li><?= $name; ?></li></strong>
    <?php endforeach; ?>
</ul>
<hr>

<?php require 'partials/foot.php';?>
