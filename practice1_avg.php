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
    $marks = [67,89,56,45,90,100,56,89,20,76,85,93];
    $sum =0;
    for($idx =0; $idx < count($marks); $idx++){
        $sum = $sum + $marks[$idx];
    }

    // foreach($marks as $key => $val){
    //     echo "<h4>$key : $val</h4>";
    // }

    $max = $marks[0];
    $min = $marks[0]; //assumptions
    foreach($marks as $key => $val){
        if($val > $max){
            $max = $val;
        }    
    }
    echo "<h1>max:$max</h1>";

    foreach($marks as $key => $val){
        if($val < $min){
            $min = $val;
        }
    }
    echo "<h1>min:$min</h1>";
    
    print_r(array_sum($marks));//calculate the total sum of a collection (cannot use function in midterm though)
    echo "<br>";
    print_r(array_slice($marks,4,4,true));
    echo "<br>";
    print_r($marks);
    echo "<br>";
    print_r(array_splice($marks,2,0,['a','b'])); //to delete items and add 
    echo "<br>";
    print_r($marks);
    echo "<br>";
    
    
    // Practice:having an array of your best friends, add["Bella","Honey","Nao"] to the middle of this collection.
    $friend = ["yusuke","shotaro","angel","eden","jun"];
    // $num = count($friend) / 2; //don't need this variables
    // echo $num; //2.5
    // print_r(array_splice($friend,count($friend) / 2,0,['Bella','Honey','Nao']));
    // echo "<br>";
    // print_r($friend);
    // echo "<br>";
    // array_shift($friend); //remove the first item
    // print_r($friend);
    // echo "<br>";
    // array_unshift($friend,"Autstin","Su"); //add one item to the biginning of an array
    // print_r($friend);
    
    //add an item to the beginning of an array without using any method
    
    $friend2 = ['Bella','Honey','Nao'];
    
    // $friend[7] = $friend[4];
    // $friend[6] = $friend[3];
    // $friend[5] = $friend[2];
    // $friend[4] = $friend[1];
    // $friend[3] = $friend[0];
    
    
    for($i=count($friend)-1;$i >= 0;$i--){
        $friend[$i+1] = $friend[$i];
    }
    
    echo "<br>";
    
    $friend[0] = $friend2[0];
    
    print_r($friend);
    echo "<br>";

    
    // example(add one item without function)
    for($idx =count($friend);$idx>0;$idx--){
        $friend[$idx] =$friend[$idx-1];
    }
    
    $friend[0] = "new value";
    print_r($friend);
    
    // example(add two item without function)
    $newItem = ["A","B","C"];
    echo "<br>";

    for($idx =count($friend)+count($newItem)-1;$idx>count($newItem);$idx--){
        $friend[$idx] =$friend[$idx-count($newItem)];
    }

    for($i=0;$i<count($newItem);$i++){
        $friend[$i] = $newItem[$i];
    }

    // $friend[0] = "new value";
    print_r($friend);
    
    //mine
    // for($i=count($friend)-1;$i >= 0;$i--){
        //     $friend[$i+3] = $friend[$i];
        // }
        
        // echo "<br>";
        
        // for($i=0;$i<count($friend2);$i++){
            //     $friend[$i] = $friend2[$i];
            // }

    // $friend[0] = $friend2[0];

    // print_r($friend);

    // for($i=0;$i<count($friend2);$i++){
    //     $friend[$i] = $friend2[$i];
    // }
    
    // $friend[0] = $friend2[0];
    // $friend[1] = $friend2[1];
    // $friend[2] = $friend2[2];

 





    // $min =$max;
    // foreach($marks as $key){
    //     if($key<$min){
    //         $min = $key;
    //     }
    // }
    
    $avg = $sum /count($marks);
    echo "<h1>$avg</h1>"; //when we don't need variables, don't use variable!
    ?>    
</body>
</html>