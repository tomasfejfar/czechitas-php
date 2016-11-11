<section>
<?php foreach ($posts as $post) { ?>
    <article>
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <p><?= htmlspecialchars($post['text']) ?></p>
    </article>
<?php } ?>
</section>
