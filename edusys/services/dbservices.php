<?php
    // include './config.php';
    class dbServices{
        private $hostName;
        private $userName;
        private $password;
        private $dbName;
        private $dbcon;
        function __construct($hostName,$userName,$password,$dbName)
        {
            $this->hostName = $hostName;
            $this->userName = $userName;
            $this->password = $password;
            $this->dbName = $dbName;
        }
        function dbConnect(){
            $dbcon = new mysqli($this->hostName,$this->userName,$this->password,$this->dbName);
            if($dbcon->connect_error){
                return false;
            }
            $this->dbcon = $dbcon;
            return $dbcon;
        }
        function closeDb(){
            $this->dbcon->close();
        }
        function insert($tbName,$valuesArray,$fieldArray=null){
            if($fieldArray!=null){
                $fields = "(".implode(',',$fieldArray).")";
            }else{
                $fields = '';
            }
            $values = implode(',',$valuesArray);
            $insertCmd = "INSERT INTO $tbName $fields VALUES ($values)";
            if($this->dbcon->query($insertCmd) === TRUE){
                return true;
            }
            return false;
        }
    }


    // function dbconnect(){
    //     include './config.php'; //if this line is out side of this function, does it work?
    //     $dbcon = new mysqli($hostName,$userName,$password,$dbName);
    //     if($dbcon->connect_error){
    //         return false;
    //     }
    //     return $dbcon;
    // }

    // function insertVal($tbName,$id,$fname,$lname,$mail,$pass){
    //     // include './config.php';
    //     if($con = dbconnect()){
    //         $insertcmd = "INSERT INTO $tbName VALUES ('$id','$fname','$lname','$mail','$pass')";
    //         if($con->query($insertcmd) ===true){
    //             echo "record added";
    //         }else{
    //             echo "record not added";
    //         }
    //         $con->close();
    //     }
    // }

    // function insertToTable($tbName,$id,$fname,$lname,$mail,$pass){
    //     include './config.php';
    //     if($con = dbconnect()){
    //         $insertcmd = "INSERT INTO $tbName VALUES ('$id','$fname','$lname','$mail','$pass')";
    //         if($con->query($insertcmd) ===true){
    //             echo "record added";
    //         }else{
    //             echo "record not added";
    //         }
    //         $con->close();
    //     }
    // }


    // function dbTest(){
    //     include './config.php'; //if this line is out side of this function, does it work?
    //     $dbcon = new mysqli($hostName,$userName,$password,$dbName);
    //     if($dbcon->connect_errno){
    //         return $dbcon;
    //     }
    //     return false;
    // }
?>