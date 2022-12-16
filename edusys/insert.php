<?php
     include './services/dbservices.php';
     include './services/jsonService.php';
     include './config.php';
     $jsonSrv = new jsonService('./data/users.json');
     $data = $jsonSrv->jsontoArray();
     $dbSrv = new dbServices($hostName,$userName,$password,$dbName);
     if($dbSrv->dbConnect()){
         foreach($data as $json){
             $fields = [];
             $values = [];
             foreach($json as $key=>$val){
                 array_push($fields,$key);
                 if($key == "uid" || $key == "role"){
                     array_push($values,$val);
                 }else{
                     array_push($values,"'$val'");
                 }
             }
             if($dbSrv->insert('user_tb',$values,$fields)){
                 echo "added";
             }else{
                 echo "not added";
             }
         }
     }else{
         echo "problem";
     }









    // if($con = dbconnect()){
    //     $insertcmd = "INSERT INTO stu_tb VALUES (1001,'Matheus','Locas','malu@mail.com','test123')";
    //     if($con->query($insertcmd) ===true){
    //         echo "record added";
    //     }else{
    //         echo "record not added";
    //     }
    //     $con->close();
    // }


    //my idea
    // insertVal('stu_tb',1003,'masa','taira','test@mail.com','test');



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