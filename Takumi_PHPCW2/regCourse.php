<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    $course = $_POST['course'];
    $stID = $_POST['student'];
    $newArray = ['stID'=>$stID,'mark'=>0];

    if(!is_dir("./data/courses/$course")){
        mkdir("./data/courses/$course");
        $dataArray = [];
        array_push($dataArray,$newArray);
        $file = fopen("./data/courses/$course/$course.json",'w');
        fwrite($file,json_encode($dataArray));
        fclose($file);
        header("Location: ".$baseName.'profileAdmin.php?msg=added');
        exit();
    }else{
        $file = fopen("./data/courses/$course/$course.json",'r');
        $dataArray = fread($file,filesize("./data/courses/$course/$course.json"));
        $dataArray = json_decode($dataArray,true);
        fclose($file);
        foreach($dataArray as $students){
            if($students['stID']==$newArray['stID']){
                header("Location: ".$baseName."profileAdmin.php?aaa=Already exist so it couldn't be added");
                exit;
            }
        }
        if($students['stID']!==$newArray['stID']){
            array_push($dataArray,$newArray);
            $file = fopen("./data/courses/$course/$course.json",'w');
            fwrite($file,json_encode($dataArray));
            fclose($file);
            header("Location: ".$baseName.'profileAdmin.php?msg=Added');
            exit();
        }
    }
}
?>