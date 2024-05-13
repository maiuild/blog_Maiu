<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<nav class="navbar">
    <p class="logo">Tere tulemast minu mängublogisse</p>
    <ul class="navbar-list">
        <?php

                echo '
                    <li class="navbar-item"><a href="index.php">Pealeht</a></li>
                    <li class="navbar-item"><a href="minust.php">Minust</a></li>
                    <li class="navbar-item"><a href="contacts.php">Kontaktid</a></li>

                ';

        ?>
    </ul>
</nav>