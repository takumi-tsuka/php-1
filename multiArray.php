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
        $students =['Damrok'=>[78,89,57,100],'Clare'=>[85,68,78,95],'Yooran'=>[76,98,45,100],'Takumi'=>[54,89,88,98]]; 
        // echo $students['Takumi'][0];

    ?>
    <table border= '1'>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course 1</th>
                <th>Course 2</th>
                <th>Course 3</th>
                <th>Course 4</th>
                <th>Max</th>
                <th>Min</th>
                <th>Avg</th>

            </tr>
        </thead>
        <tbody>
            <?php

            $totalAvg = [];
            $Min =100;
            $Max = 0;
            foreach($students as $names => $marks){
                echo "<tr>";
                echo "<td> $names</td>";
                $max = 0;
                $min = 100;
                $sum = 0;
                foreach($marks as $mark){
                    echo "<td>$mark</td>";
                    $sum +=$mark;
                    if($max< $mark){
                        $max=$mark;
                    }
                    if($min>$mark){
                        $min = $mark;
                    }
                }
                // array_push($totalAvg,$sum/count($marks));
                $totalAvg[$names] = $sum/count($marks);
                echo "<td>$max</td><td>$min</td><td>".$sum/count($marks)."</td>";
                echo "</tr>";
                if($Max < $max){
                    $Max =$max;
                    $Maxst = $names;
                }
                
                if($Min > $min){
                    $Min = $min;
                    $Minst = $names;
                }
            }
            echo "max score student: $Maxst";
            echo "<br>";
            echo "minimum score student: $Minst";
            

            ?>
        </tbody>
    </table>
    <?php
        $sum = 0;
        $max = 0;
        $min = 100;
        
        foreach($totalAvg as $names =>$avg){
            $sum += $avg;
            if($max<$avg) {
                $max = $avg;
                $bst =$names;
            }
            if($min>$avg){
                $min = $avg;
                $lst = $names;
            }
        }
        echo "<h3>Max is:$bst - Min is :$lst -AVG:".$sum/count($totalAvg)."</h3>";

        $totalAvgSum = $sum/count($totalAvg);
        foreach($totalAvg as $names =>$avg){
            if($totalAvgSum<$avg){
                echo "<h2>higher than avg:$names</h2>";        
            }
            if($totalAvgSum>$avg){
                echo "<h2>lower than avg:$names</h2>";
            }
        }
    ?>
</body>
</html>