<?php
class DbConfig{

   private $_host="localhost";
   private $_user="root";
   private $_password="";
   private $_dbname="dbpricing";

   protected $connection;

    public function __construct(){
        if(!isset($this->connection)){
            $this->connection=mysqli_connect($this->_host,$this->_user,$this->_password,$this->_dbname);
            if(!$this->connection){
                echo "Cannot connect to database.";
                exit;
            }
        }
        return $this->connection;
    }

}