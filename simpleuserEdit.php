<?php

if($_SERVER['REQUEST_METHOD'] == 'post'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $file = fopen('data/employee/simpleuserData.json','r');
    $data = fread($file,filesize('data/employee/simpleuserData.json'));
    $data = json_decode($data,true);
    fclose($file);
}
?>