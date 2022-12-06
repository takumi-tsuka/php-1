<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src= "<?php
     if(isset($_GET['picurl'])){
        echo $_GET['picurl'];
        } 
    ?>" alt="<?php 
        if(isset($_GET['msg'])) echo $_GET['msg'];
        ?>">
    <h3>
        <?php
            if(isset($_GET['msg'])){
                echo "File ".$_GET['msg']." has been uploaded";
            } 
        ?>
    </h3>
    <?php
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     $uploadedFile = $_FILES['avatarimg'];
    //     // print_r($uploadedFile);
    //     // $sourceName = (basename($uploadedFile['name']));
    //     // $sourceName = './data/userData.txt';
    //     // printf(pathinfo($sourceName,PATHINFO_EXTENSION)); //to extent the extension
    //     // echo "<br>";
    //     // printf(pathinfo($sourceName,PATHINFO_DIRNAME)); //to extract the filename and extention
    //     // echo "<br>";
    //     // printf(pathinfo($sourceName,PATHINFO_BASENAME)); //
    //     // echo "<br>";
    //     // printf(pathinfo($sourceName,PATHINFO_FILENAME)); //to extract only the filename
    //     // print_r(getimagesize($uploadedFile['tmp_name'])); //will get the details of an actual image
    //     function fileUpload($srcPath,$dstPath){
    //         if(move_uploaded_file($srcPath,$dstPath)){
    //             echo "File".pathinfo($srcPath,PATHINFO_FILENAME)."has been uploaded.";
    //             return true;
    //         }else{
    //             echo "File".pathinfo($srcPath,PATHINFO_FILENAME)."has not been uploaded.";
    //             return false;
    //         }
    //     }
    //     $targetdir = "./data/img/";
    //     if($uploadedFile['size']<300000){
    //         if($uploadedFile['type'] == "image/png" || $uploadedFile['type'] == "image/jpg" || $uploadedFile['type'] == "image/jpeg" || $uploadedFile['type'] == "image/gif" )
    //         {
    //             // $getImg = getimagesize(($uploadedFile['tmp_name']));
    //             // $width = $getImg[0];
    //             // $height = $getImg[1];
    //             // $width = getimagesize(($uploadedFile['tmp_name']))[0];
    //             // $height = getimagesize(($uploadedFile['tmp_name']))[1];
    //             // if($width > 800 || $height > 800){
    //             //     $srcPath = $uploadedFile['tmp_name'];
    //             //     $dstPath = $targetdir.$uploadedFile['name'];
    //                 if(fileUpload($srcPath,$dstPath)){
    //                     header("Location; ".$_SERVER['PHP_SELF']."?picurl=$dstPath");
    //                     exit();
    //                 }else{
                        
    //                 }
    //             // }else{
    //             //     echo "<h3>Image's height or width is too small so not uploaded</h3>";
    //             // }
    //         }else{
    //             echo "<h3>File is not accepted image type. (JPG,PNG,JPEG,GIF)</h3>";
    //         } 
    //     }else{
    //         echo "<h3>Image is too big</h3>";
    //     }
    // }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uploadedFile = $_FILES['avatarimg'];
        // $sourceName = basename($uploadedFile['name']);
        // $sourceName = './data/test/userData.txt';
        // printf(pathinfo($sourceName,PATHINFO_EXTENSION));//to extract the extension
        // echo "<br/>";
        // printf(pathinfo($sourceName,PATHINFO_BASENAME));//to extract the filename and extension
        // echo "<br/>";
        // printf(pathinfo($sourceName,PATHINFO_FILENAME));//to extract only the filename
        // echo "<br/>";
        // printf(pathinfo($sourceName,PATHINFO_DIRNAME));//tyo extract the directory path of the file
        // print_r(getimagesize($uploadedFile['tmp_name'])); //will get the details of an actual image
        function fileUpload($srcPath,$dstPath){
            if(move_uploaded_file($srcPath,$dstPath)){
                echo "File ".pathinfo($srcPath,PATHINFO_FILENAME)." has been uploaded.";
                return true;
            }else{
                echo "File ".pathinfo($srcPath,PATHINFO_FILENAME)." has not been uploaded.";
                return false;
            }
        }
        $targetdir = "./data/img/";
        if($uploadedFile['size']<300000){
            print_r($uploadedFile['type']);
            if($uploadedFile['type']=="image/png" || $uploadedFile['type']=="image/jpg" || $uploadedFile['type']=="image/jpeg" || $uploadedFile['type']=="image/gif"){
                $srcPath = $uploadedFile['tmp_name'];
                $dstPath = $targetdir.$uploadedFile['name'];
                if(fileUpload($srcPath,$dstPath)){
                    header("Location: ".$_SERVER['PHP_SELF']."?picurl=$dstPath&msg=".$uploadedFile['name']);
                    exit();
                }else{
                    
                }
            }else{
                echo "<h3>File is not accepted image type. (JPG,PNG,GIF)</h3>";
            }
        }else{
            echo "<h3>Image is too big</h3>";
        }
    }
?>
</body>
</html>
