<?php
    require('config/init.php');

    if(isset($_POST['submit'])){
        // Retrieve form data
        $title = $_POST['title'];
        $author = $_POST['author']; // You can set a default author or leave it empty
        $text = $_POST['text'];
        $created_at = date('Y-m-d H:i:s'); // You can set a default date or leave it empty
        $picture_address = $_POST['picture_address'];

        // Insert data into the database
        $sql = "INSERT INTO blog_posts(title, author, text, created_at, picture_address) VALUES (:title, :author, :text, :created_at, :picture_address)";
        $query = $pdo->prepare($sql);
        $query->execute(['title' => $title, 'author' => $author, 'text' => $text, 'created_at' => $created_at, 'picture_address' => $picture_address]);
        
        // Redirect back to the index page after insertion
        header('Location: index.php');
        exit();
    }
?>

<?php include('includes/header.php')?>
    <div class="container">
        <h1>Lisa postitus</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label>Pealkiri</label>
                <input type="text" class="form-input" name="title" required>
            </div>
            <div class="form-group">
                <label>Autor</label>
                <input type="text" class="form-input" name="author" required>
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea class="form-input" name="text" required></textarea>
            </div>
            <div class="form-group">
                <label>Pildi aadress (URL)</label>
                <textarea class="form-input" name="picture_address" ></textarea>
            </div>
            <input type="submit" class="btn btn-submit" value="Submit" name="submit">
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
        </form>
    </div> 
<?php include('includes/footer.php')?>
