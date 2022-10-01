<?php
include_once 'dbCrud.php';
$crudobj_=new Crud();

if(isset($_POST["username"])){
    $newuser=$_POST["username"];
    $newpass=$_POST["password"];


    $query="UPDATE tblpricinglogin SET username='$newuser',password='$newpass' WHERE flag=0";
    $result=$crudobj_->execute($query);

    if($result){
        echo "Updated successfully.";
    }
}