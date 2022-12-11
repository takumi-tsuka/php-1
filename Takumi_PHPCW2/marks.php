<?php
    include './data/config.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $mark = $_POST['mark'];
        $file = fopen("./data/courses/".$_SESSION['course']."/".$_SESSION['course'].".json",'r');
        $data = fread($file,filesize("./data/courses/".$_SESSION['course']."/".$_SESSION['course'].".json"));
        $data = json_decode($data,true);
        fclose($file);
        $aaa= [];
        foreach($data as $val){
            if($val['stID'] == $_SESSION['stID']){
                $val['mark'] = $mark;
            }
            array_push($aaa,$val);
        }
        $file = fopen("./data/courses/".$_SESSION['course']."/".$_SESSION['course'].".json",'w');
        fwrite($file,json_encode($aaa));
        fclose($file);
        header("Location: ".$baseName."profileTech.php?msg=mark is changed!");
        exit();
    }
?>