<?php
    // 1. take the photo and save it [*]
    // 2. take the data and create a class with those data [*]
    // 3. use the class method to convert to json [*]
    // 4. save the information into the data.txt [*]
    include './modules/docObj.php';
    include './data/config.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname = $_POST['fname']; //name = "fname" in form of regform.php
        $lname = $_POST['lname']; //name = "lname" in form of regform.php
        $pass = $_POST['pass']; //name = "pass" in form of regform.php
        $spec = $_POST['spec']; //name = "spec" in form of regform.php
        $medid = $_POST['medid']; //name = "medid" in form of regform.php
        $avatar = $_FILES['logoimg']; //file information of name = "logoimg" in form of regform.php
        //Array([name] => test.csv　[type] => text/plain[tmp_name] => /tmp/php5dkdaFd [error] => 0[size] => 123)
        $targetDir = "./data/avatars/";  //directory of target to put
        if($avatar['size']<400000){
            if($avatar['type']=="image/jpeg" || $avatar['type']=="image/jpg"){
                if(getimagesize($avatar['tmp_name'])!== false){  //Is it same as if(getimagesize($avatar['tmp_name']) == true){}?
                    $targetDir = $targetDir.$fname.rand(10,1000).".jpeg";
                    if(move_uploaded_file($avatar['tmp_name'],$targetDir)){
                        $imgurl = $targetDir;
                        $doc = new doctor($fname,$lname,$pass,$spec,$medid,$imgurl);
                        if(!file_exists('./data/data.txt')){
                            $dataArray = [];
                        }else{
                            $file = fopen('./data/data.txt','r');
                            $dataArray = fread($file,filesize('./data/data.txt'));
                            $dataArray = json_decode($dataArray,true);
                            fclose($file);
                        }
                        array_push($dataArray,$doc->show_info());
                        $file = fopen('./data/data.txt','w');
                        fwrite($file,json_encode($dataArray));
                        fclose($file);
                        header("Location: ".$baseName."regform.php?s=1");
                        exit();

                    }else{
                        echo "$targetDir not uploaded";
                    }
                }else{
                    echo "its not an image?!!!!!";
                }
            }else{
                echo $avatar['type'];
            }
        }else{
            echo "Image is big!!!!!";
        }
    }
?>