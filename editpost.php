<?php

    require('config/init.php');

    if(isset($_POST['submit'])){
        $update_id = filter_var($_POST['update_id'], FILTER_SANITIZE_NUMBER_INT);
        $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        $text = filter_var($_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS); 
        $picture_address = filter_var($_POST['picture_address'], FILTER_SANITIZE_SPECIAL_CHARS); 
    
        $sql = "UPDATE blog_posts SET title = :title, text = :text, picture_address = :picture_address WHERE id = :update_id";
        $query = $pdo->prepare($sql);
        $query->execute(['title' => $title, 'text' => $text, 'picture_address' => $picture_address, 'update_id' => $update_id]);

        header('Location: ' . ROOT_URL . "");
    }

    $id = $_GET['id'];

    $sql = 'SELECT * FROM blog_posts WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $post = $query->fetch();
?>

<?php include('includes/header.php')?>
    <section class="container">
        <h1>Muuda postitust</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="form-group">
                <label>Pealkiri</label>
                <input type="text" class="form-input" name="title" value="<?php echo $post['title']; ?>" >
            </div>
            <div class="form-group">
                <label>Tekst</label>
                <input type="text" class="form-input" name="text" value="<?php echo $post['text']; ?>" >
            </div>
            <div class="form-group">
                <label>Pildi aadress (URL)</label>
                <textarea class="form-input" name="picture_address" ></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" class="btn btn-submit" value="Submit" name="submit">
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Tagasi</a>
        </form>
    </section> 
<?php include('includes/footer.php')?>