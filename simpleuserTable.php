<?php

$file = fopen('./data/employee/simpleuserData.json','r');
$userData = fread($file,filesize('./data/employee/simpleuserData.json'));
$userData = json_decode($userData,true);
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($userData as $data){
                echo "<tr>";
                foreach($data as $val){
                    echo "<td>$val</td>";
                }
                echo "<td>";
                echo '<a class="btn btn-primary" role="button" href = "http://localhost:8080/php/simpleuser.php?">edit</a>';
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>