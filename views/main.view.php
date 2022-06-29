<?php require 'partials/head.php';?>
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

<?php require 'partials/foot.php';