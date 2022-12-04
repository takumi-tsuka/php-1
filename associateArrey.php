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
        $students =['Damrok'=>78,'Clare'=>85,'Yooran'=>76,'Takumi'=>54];
        foreach($students as $name=>$mark){
            echo "<h3>$name:$mark</h3>";
        }

    ?>

    <table border='1'>
        <thead>
            <tr>
                <th>Students Name</th>
                <th>Students Mark</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($students as $name =>$mark){
                    echo '<tr>';
                    echo "<td>$name</td><td>$mark</td>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
    <?php
        $sum = 0;
        $max = 0;
        $min = 100;
        foreach($students as $name =>$mark){
            $sum += $mark; //$sum =$sum + $mark
            if($mark>$max){
                $max = $mark;
                $bst = $name;
            }
            if($mark<$min){
                $min=$mark;
                $lst = $name;
            }
        }

        echo "<h3>Best Student:$bst - Not Best Student:$lst - AVG:".$sum/count($students)."</h3>";
    ?>
</body>
</html>