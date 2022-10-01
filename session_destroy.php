<?php
ob_start();
session_start();

if(!isset($_SESSION['auth'])){
    header('Location:index.php');
}

session_destroy();
header('Location:index.php');
exit();

?>