<?php
include_once 'dbCrud.php';

$crud=new Crud();

if(isset($_POST['password'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT * FROM tblpricinglogin WHERE BINARY username='$user' AND BINARY password='$pass'";
    $result=$crud->getNumRowsOfData($query);

    if($result>0){
        echo "1";
    }else{
        echo "2";
    }
    // echo $result;
}