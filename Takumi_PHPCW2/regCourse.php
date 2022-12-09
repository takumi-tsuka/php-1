<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
    echo "<h1>hello</h1>";
    $course = $_POST['course'];
    $stID = $_POST['student'];
    $newArray = ['stID'=>$stID,'mark'=>0];

    if(!is_dir("./data/courses/$course")){
        mkdir("./data/courses/$course");
        $file = fopen("./data/courses/$course/$course.json",'w');
        fwrite($file,json_encode($newArray));
        fclose($file);
        header("Location: ".$baseName.'profileAdmin.php?msg=added');
        exit();

    }else{
        $file = fopen("./data/courses/$course/$course.json",'r');
        $dataArray = fread($file,filesize("./data/courses/$course/$course.json"));
        $dataArray = json_decode($dataArray,true);
        array_push($dataArray,$newArray);
        $file = fopen("./data/courses/$course/$course.json",'w');
        fwrite($file,json_encode($dataArray));
        fclose($file);
        header("Location: ".$baseName.'profileAdmin.php?msg=added');
        exit();
    }
}
?>