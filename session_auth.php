<?php
ob_start();
session_start();

if(!isset($_SESSION['auth'])){
    header('Location:login.php');
}

if(isset($_POST['auth'])){
    $_SESSION['auth']=$_POST['auth'];    
}