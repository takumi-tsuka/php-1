<?php include('./modules/docObj.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $newArray = [];
    $newdoc = new doctor("Nao","Ogata","1935","Cardiorogy",258745968);
    // $newArray = array_push($newArray,$newdoc);
    // print_r($newdoc->show_info());
    $newdoc1 = new doctor("shotaro","ogata","1940","Cardiorogy",234523455);
    // print_r($newdoc->show_info());
    $newdoc2 = new doctor("yusuke","ogata","1945","Cardiorogy",123412341);
    // array_push($newArray,$newdoc);
    // array_push($newArray,$newdoc1);
    // array_push($newArray,$newdoc2);
    $newArray = [$newdoc,$newdoc1,$newdoc2];
    // print_r($newArray);

    ?>
    <table border="1">
        <thead>
            <tr>
                <th>First name</th>
                <th>last name</th>
                <th>dob</th>
                <th>speciality</th>
                <th>medID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($newArray as $datas){
                echo "<tr>";
                foreach($datas as $data){
                    echo "<td>$data</td>";
                }
                echo "</tr>";
            }
                
                // echo "<tr>";
                // foreach($newdoc as $datas){
                //     echo "<td>".$datas."</td>";
                // }
                // echo "</tr>";
                // echo "<tr>";
                // foreach($newdoc1 as $datas){
                //     echo "<td>".$datas."</td>";
                // }
                // echo "</tr>";
                // echo "<tr>";
                // foreach($newdoc2 as $datas){
                //     echo "<td>".$datas."</td>";
                // }
                // echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>