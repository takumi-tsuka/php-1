<?php
    // include './config.php';
    function dbconnect(){
        include './config.php'; //if this line is out side of this function, does it work?
        $dbcon = new mysqli($hostName,$userName,$password,$dbName);
        if($dbcon->connect_error){
            return false;
        }
        return $dbcon;
    }

    function insertVal($tbName,$id,$fname,$lname,$mail,$pass){
        // include './config.php';
        if($con = dbconnect()){
            $insertcmd = "INSERT INTO $tbName VALUES ('$id','$fname','$lname','$mail','$pass')";
            if($con->query($insertcmd) ===true){
                echo "record added";
            }else{
                echo "record not added";
            }
            $con->close();
        }
    }

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