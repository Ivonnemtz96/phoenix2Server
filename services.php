<?
include("indexcontroller.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Servicios';
$servicios = 'active';

include('includes/head.php');
?>

<body>
    <div class="page-wrapper">

    <?php 
        include('includes/preloader.php');
        include($lenguaje.'/header.php');
        include($lenguaje.'/services.php');
        include($lenguaje.'/footer.php');
        include('includes/scripts.php');
    ?>

    </div>
    

</body>

</html>