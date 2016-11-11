<h2>O mně</h2>
<ul>
    <?php foreach ($me as $key => $characteristic) { ?>
        <li><?= e($key) ?>: <?= e($characteristic) ?></li>
    <?php } ?>
</ul>

<h2>Kamarádi</h2>
<ul>
    <?php foreach ($friends as $person) { ?>
        <li><?= e($person['name']) ?> <?= e($person['surname']) ?></li>
    <?php } ?>
</ul>


<h2>Záliby</h2>
<ul>
    <?php foreach ($hobbies as $hobby) { ?>
        <li><?= e($hobby) ?></li>
    <?php } ?>
</ul>
