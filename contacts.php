<?php
require('config/init.php');

$sql = 'SELECT * FROM contacts';
$query = $pdo->prepare($sql);
$query->execute();
$contacts = $query->fetchAll(PDO::FETCH_ASSOC); 

?>

<?php include('includes/header.php')?>
<div class="container">
        <h3>Minu kontaktandmed</h3>
<?php
foreach ($contacts as $contact) {
    echo "Address: " . $contact['address'] . "<br>";
    echo "Email: " . $contact['email'] . "<br>";
    echo "Phone: " . $contact['phone'] . "<br><br>";
    }
?>
</div>
<?php include('includes/footer.php')?>