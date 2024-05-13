<?php

    require('config/init.php');

    $sql = 'SELECT * FROM blog_posts';
    $query = $pdo->prepare($sql);
    $query->execute();
    $posts = $query->fetchAll();

?>

<?php include('includes/header.php')?>
    <section class="container">

    <a href="<?php echo ROOT_URL?>addpost.php" class="btn btn-submit">Lisa uus postitus</a>
        <h1>Postitused</h1>
        <?php foreach($posts as $post) : ?>
            <div class="blog-post">
                <h3><?php echo $post['title']; ?></h3>
                <small>Postitatud <?php echo $post['created_at'] ?> </small><br> <?php echo $post['author']; ?>
                <p><?php echo $post['text']; ?></p>
                <?php if(!empty($post['picture_address'])): ?>
                <img class="postituse-pilt" src="<?php echo $post['picture_address']; ?>" alt="" width="300px">
            <?php endif; ?>
            <br>
                <a href="<?php echo ROOT_URL?>post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Loe postitust</a>
            </div>
        <?php endforeach; ?>
    </section> 
<?php include('includes/footer.php')?>

