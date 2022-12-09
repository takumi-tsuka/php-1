<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:8080/php/simpleuserTable.php" method="post">
        <input type="text" name = "fname" placeholder="First name">
        <input type="text" name = "lname" placeholder="last name">
        <input type="submit" value="edit"> 
    </form>
    <?php
        $file = fopen('data/employee/simpleuserData.json','r');
        $datas = fread($file,filesize('data/employee/simpleuserData.json'));
        $datas = json_decode($datas,true);
        fclose($file);

        // foreach($datas as $data){
        //     if($data['id'] == )
        // }

    ?>
</body>
</html>