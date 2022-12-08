<?php
    include './data/config.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];
        $file = fopen('./data/students/students.json','r');
        $stArray = json_decode(fread($file,filesize('./data/students/students.json')),true);
        $fileTech = fopen('./data/teachers/teachers.json','r');
        $techArray = json_decode(fread($fileTech,filesize('./data/teachers/teachers.json')),true);
        foreach($stArray as $st){
            if($st['email']==$email && $st['pass']==$pass &&$role == 'st'){
                $_SESSION['logUser'] = $st;
                header("Location: ".$baseName.'profile.php');
                exit();
                break;
            }
        }
        foreach($techArray as $tech){
            if($tech['email'] == $email && $tech['pass']== $pass && $role == 'tech'){
                $_SESSION['logUser'] = $tech;
                header("Location: ".$baseName.'profileTech.php');
                exit();
                break;
            }
        }
        if("takumi@test.com" == $email && "takumi" == $pass && $role == 'admin'){
            $_SESSION['logUser'] = $tech;
            header("Location: ".$baseName.'profileAdmin.php');
            exit();
        }

        header("Location: ".$baseName.'index.php?msg=1');
        exit();


    }
?>