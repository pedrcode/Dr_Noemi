<?php
include_once(__DIR__ . '/templates/header.php');
include_once(__DIR__ . '/data/posts.php');
?>


<main>
    <div id="title-container">
        <h1>Fisio N</h1>
        <p>O seu blog de fisioterapia</p>
    </div>

    <div id="posts-container">
        <?php foreach ($posts as $post): ?>
            <div class="posts-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">

                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>posts.php?id=<?= $post['id'] ?>">
                        <?= $post['title'] ?>
                    </a>
                </h2>

                <p class="post-description">
                    <?= $post['description'] ?>
                </p>

                <?php if (!empty($post['tags']) && is_array($post['tags'])): ?>
                    <div class="tags-container">
                        <?php foreach ($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    </div>
</main>


<?php include_once(__DIR__ . '/templates/footer.php'); ?>
