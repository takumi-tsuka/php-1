<?php
    // show a table containing fullname, email, position name and department name
    function loadFiles($fileName){
        $file = fopen("./data/employee/$fileName.json",'r');  
        $data =   fread($file,filesize("./data/employee/$fileName.json"));
        $data = json_decode($data,true);
        fclose($file);
        return $data;
    }
    $user_info = loadFiles("user_info");
    $positions = loadFiles("positions");
    $departments = loadFiles("departments");
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
    <table>
        <thead>
            <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Position Name</th>
                <th>Department Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($user_info as $user){
                    echo "<tr>";
                        echo "<td>".$user['firstName']." ".$user['lastName']."</td>";
                        echo "<td>".$user['email']."</td>";
                        foreach($positions as $pos){
                            if($pos['pid']==$user['positionId']){
                                echo "<td>".$pos['p_name']."</td>";
                                break;
                            }
                        }
                        foreach($departments as $dep){
                            if($dep['did']==$user['departmentId']){
                                echo "<td>".$dep['d_name']."</td>";
                                break;
                            }
                        }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>