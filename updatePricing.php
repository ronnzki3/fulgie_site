<?php
include_once 'dbCrud.php';
$crudObj=new Crud();

if(isset($_POST['codes'])){
        $newdp=$_POST["dp"];
        $newmarkup=$_POST["markup"];
        $newInterest=$_POST["interest"];
        $newcodes=strtoupper($_POST["codes"]);
        $que="UPDATE tblcode SET dp='$newdp', markup='$newmarkup',interest='$newInterest',codes='$newcodes'";
        $insert_=$crudObj->execute($que);
        if($insert_){
            echo "Record/s successfully updated.";
        }
}