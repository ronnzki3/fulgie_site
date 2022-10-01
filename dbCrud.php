<?php
include_once 'dbConfig.php';

class Crud extends DbConfig{
    public function __construct(){
        parent::__construct();
    }

    //function/method to select data
    public function getData($query){
        $result=$this->connection->query($query);
        if($result==false){
            return false;
        }
        $rows=array();

        while($row=$result->fetch_assoc()){
            $rows[]=$row;
        }
        return $rows;
    }


    //function/method to select data and count number of rows found
    public function getNumRowsOfData($query){
        $result=$this->connection->query($query);
        if($result==false){
            return false;
        }      

        //$result->num_rows is equivalent to mysqli_num_rows($result)
        $numRows=$result->num_rows;

        return $numRows;        
    }



    //function/method to ADD or UPDATE data to the database
    public function execute($query){
        $result=$this->connection->query($query);
        if($result==false){
            echo 'Error found: Cannot execute the command.';
            return false;
        }else{
            return true;
        }
    }

    //function/method to delete
    public function delete($id,$table){
        $query="Delete FROM $table WHERE ID=$id";
        $result=$this->connection->query($query);
        if($result==false){
            echo 'Error found: Cannot execute delete command.';
            return false;
        }else{
            return true;
        }
    }

    public function escape_string($str_value){
        return $this->connection->real_escape_string($str_value);
    }
    //to implement in php, example: $name = $crud->escape_string($_POST['name']); 

}

?>
