<?php
require('config/init.php');

$sql = 'SELECT * FROM minust';
$query = $pdo->prepare($sql);
$query->execute();
$infos = $query->fetchAll(PDO::FETCH_ASSOC); 

?>

<?php include('includes/header.php')?>
<div class="container">
        <h3>Minust lähemalt</h3>
<?php
foreach ($infos as $info) {
    echo "<br>" . $info['me'] . "<br>";

    }
?>
<?php include('includes/footer.php')?>
