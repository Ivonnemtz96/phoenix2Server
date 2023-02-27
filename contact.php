<?
include("indexcontroller.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Contacto';
$contacto = 'active';

include('includes/head.php');
include_once("php/msg.php");
?>

<body>
    <div class="page-wrapper">

    <?php 
        include('includes/preloader.php');
        include($lenguaje.'/header.php');
        include($lenguaje.'/contact.php');
        include($lenguaje.'/footer.php');
        include('includes/scripts.php');
    ?>

    </div>
    

</body>

</html>