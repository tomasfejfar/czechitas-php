<h2>O mně</h2>
<ul>
    <?php foreach ($me as $key => $characteristic) { ?>
        <li><?= $key ?>: <?= $characteristic ?></li>
    <?php } ?>
</ul>

<h2>Kamarádi</h2>
<ul>
    <?php foreach ($friends as $person) { ?>
        <li><?= $person['name'] ?> <?= $person['surname'] ?></li>
    <?php } ?>
</ul>


<h2>Záliby</h2>
<ul>
    <?php foreach ($hobbies as $hobby) { ?>
        <li><?= $hobby ?></li>
    <?php } ?>
</ul>
