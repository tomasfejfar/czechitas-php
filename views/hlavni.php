<section>
<?php foreach ($posts as $post) { ?>
    <article>
        <h2><?= e($post['title']) ?></h2>
        <p><?= e($post['text']) ?></p>
    </article>
<?php } ?>
</section>
