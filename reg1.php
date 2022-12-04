<?php
// if(!isset($_SERVER['data'])){
//     $_SERVER['data'] = [];
// }


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // echo "<h3>$fname $lname</h3>";
    // array_push($_SERVER['data'],[$fname,$lname]);
    // print_r($_SERVER['data']);
    // $dataFile = fopen('./data/userData.txt','a') or die("Unable to create the file!");
    // fwrite($dataFile,"[$fname,$lname]");
    // fclose($dataFile);

    $newData = ['fname'=>$fname,'lname'=>$lname];
    if(file_exists('./data/userData.txt')){
        $dataFile = fopen('./data/userData.txt','r');
        $stringData = fread($dataFile,filesize('./data/userData.txt'));
        fclose($dataFile);
        $mainArray = json_decode($stringData,true);
        array_push($mainArray,$newData);
        $dataFile = fopen('./data/userData.txt','w');
        fwrite($dataFile,json_encode($mainArray));
        fclose($dataFile);
    }else{ //file doesn't exists = no DATA
        $mainArray = [];
        array_push($mainArray,$newData);
        $dataFile = fopen('./data/userData.txt','w');
        fwrite($dataFile,json_encode($mainArray));
        fclose($dataFile);
    }        
}

    
    
?>