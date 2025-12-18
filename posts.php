<?php
include_once(__DIR__ . '/templates/header.php');

$currentPost = null;

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
            break;
        }
    }
}
?>

<main id="posts-container">
    <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
          <p id="posts-description"><? =$currentPost['description']?></p>
     <div clas="img-container">
  <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<? $currentPost['title']?>">
</div>
<p class="posts-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nemo consequuntur eos, quod voluptatum eligendi suscipit vero non sed consequatur, ipsam debitis ad distinctio sunt facilis doloremque commodi, dolor expedita.
Tempora molestias, neque nulla impedit, sint, corrupti maiores reprehenderit quia sit veniam ut velit repellendus deleniti. Pariatur ab eos eligendi debitis sint fugit, exercitationem iste in maiores atque quas ullam?
Nisi vel reprehenderit debitis ea, repudiandae ab harum saepe officia aliquid mollitia consequuntur optio, similique dolorem esse eligendi, tempore laborum at quaerat exercitationem quas hic sit? Repudiandae minus tenetur vel.
Itaque ut repellat repudiandae. Culpa laborum, animi esse aliquam deleniti quisquam iste sint veniam voluptas nostrum temporibus quam, voluptatem sequi! Beatae consectetur laudantium fugit error harum aspernatur sit recusandae esse!
Corrupti veniam aut debitis aspernatur vero eius quae ad porro quibusdam suscipit obcaecati laboriosam, hic veritatis sint est. Soluta itaque autem unde aut minus aliquid, id labore beatae eaque ex!</p>

</main>

<?php
include_once(__DIR__ . '/templates/footer.php');
?>
