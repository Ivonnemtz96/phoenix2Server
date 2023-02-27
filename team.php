<?
include("indexcontroller.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Equipo';
$sobre = 'active';

include('includes/head.php');
?>

<body>
    <div class="page-wrapper">

    <?php 
        include('includes/preloader.php');
        include($lenguaje.'/header.php');
        include($lenguaje.'/team.php');
        include($lenguaje.'/footer.php');
        include('includes/scripts.php');
    ?>

    </div>
    

</body>

</html>