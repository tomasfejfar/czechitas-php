<section>
<?php foreach ($posts as $post) { ?>
    <article>
        <a href="/?page=clanek&id=<?= $post['id'] ?>"><h2><?= e($post['title']) ?></h2></a>
        <p><?= e($post['text']) ?> </p>
    </article>
<?php } ?>
</section>
