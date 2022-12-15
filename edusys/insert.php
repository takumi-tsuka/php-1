<?php
    include './services/dbservices.php';
    // if($con = dbconnect()){
    //     $insertcmd = "INSERT INTO stu_tb VALUES (1001,'Matheus','Locas','malu@mail.com','test123')";
    //     if($con->query($insertcmd) ===true){
    //         echo "record added";
    //     }else{
    //         echo "record not added";
    //     }
    //     $con->close();
    // }

    insertVal('stu_tb',1003,'masa','taira','test@mail.com','test');



    // insertstudent('1002','Masa','Eden','test@mail.com','test');


    // $insert = "INSERT INTO `stu_tb`(`stid`, `fname`, `lname`, `email`, `pass`) VALUES ('1001','Eden,'Masa','test@mail.com','test')";

    // if ($con->query($insert) === TRUE) {
    //     echo "New record created successfully";
    //   } else {
    //     echo "Error: " . $insert . "<br>" . $con->error;
    // }
    // $con -> close();

    // if(mysqli_query($con,$insert)){
    //     echo "succesed";
    // }
    // $con -> close();
    // if($con = dbTest()){
    //     echo "db connected";
    //     $con-> close();
    // }

?>