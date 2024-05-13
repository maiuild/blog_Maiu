<?php

    require('config/init.php');

    if(isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];

        $sql = 'DELETE FROM blog_posts WHERE id = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $delete_id]);

        header('Location: ' . ROOT_URL . "");
    }

    $id = $_GET['id'];

    $sql = 'SELECT * FROM blog_posts WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $post = $query->fetch();
?>
<?php
$sql = 'SELECT * FROM blog_posts';
$query = $pdo->prepare($sql);
$query->execute();
$posts = $query->fetchAll();

?>
<?php include('includes/header.php')?>
    <section class="container">
            <div class="blog-post">
                <h1><?php echo $post['title']; ?></h1>
                <small>Postitatud <?php echo $post['created_at'] ?> </small><br> <?php echo $post['author']; ?>
                <p><?php echo $post['text']; ?></p>
                <?php if(!empty($post['picture_address'])): ?>
                <img class="postituse-pilt" src="<?php echo $post['picture_address']; ?>" alt="">
            <?php endif; ?>
            <br>

                <?php 
                            echo '
                                <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" class="button-right" method="POST">
                                <input type="hidden" name="delete_id" value="' . $post['id'] . '">
                                <input type="submit" value="Delete" name="kustuta" class="btn btn-danger">
                                </form>
                                <a href="' . ROOT_URL . 'editpost.php?id=' . $post['id'] . '" class="btn btn-primary">Muuda postitust</a>
                            ';
                ?>
                <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Tagasi</a>
            </div>
    </section> 
    <aside class="container">
        <div>
            <h4>Postitused kuupäevade alusel</h4>
            <?php foreach($posts as $post) : ?>
        <div class="blog-post">
            <small>Postitatud <?php echo $post['created_at'] ?> </small>
            <a href="<?php echo ROOT_URL?>post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Loe postitust</a>
        </div>
    <?php endforeach; ?>
            </ul>
        </div>
    </aside>
<?php include('includes/footer.php')?>

