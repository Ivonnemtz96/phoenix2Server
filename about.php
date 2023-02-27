<?
include("indexcontroller.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Sobre';
$sobre = 'active';

include('includes/head.php');
?>

<body>
    <div class="page-wrapper">

    <?php 
        include('includes/preloader.php');
        include($lenguaje.'/header.php');
        include($lenguaje.'/about.php');
        include($lenguaje.'/footer.php');
        include('includes/scripts.php');
    ?>

    </div>
    

</body>

</html>