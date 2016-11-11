<?php
$template = 'hlavni';

$pdo = getDb();
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();
