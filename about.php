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
        include('includes/header.php');
        include('modules/about.php');
        include('includes/footer.php');
        include('includes/scripts.php');
    ?>

    </div>
    

</body>

</html>