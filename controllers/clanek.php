<?php
$template = 'clanek';

$pdo = getDb();
$statement = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
$statement->execute(['id' => $_GET['id']]);
$post = $statement->fetch();
