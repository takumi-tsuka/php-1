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
        $places = ["Stanly Park", "Gas town", "Christmas market", "Whistler"];
        $places[4] = "New westmister";
        $places[1] = "Joffre lake";
        print $places[count($places)-1];
        $places[count($places)] = "Canada place";
        array_pop($places);  //to delete the last item of an array
        $temPlaces = ["Burenaby" , "White rock"];
        array_push($places, "vancouver" , "park royal","Edomoton"); //add one or more than item to the end of the array
        $places = array_merge($places,$temPlaces);  //merge two or more array and return the array
        print_r($places);
        echo "<br>";

        $random = array_rand($places, 3);

        echo "<ol>
        <li>".$places[$random[0]]."</li>
        <li>".$places[$random[1]]."</li>
        <li>".$places[$random[2]]."</li>
        </ol>";

        //myidea
        $ran1 = array_rand($places); 
        $ran2 = array_rand($places);
        $ran3 = array_rand($places);
        echo "<ol>
        <li>".$places[$ran1]."</li>
        <li>".$places[$ran2]."</li>
        <li>".$places[$ran3]."</li>
        </ol>";
    
        echo "<ol>
        <li>".$places[array_rand($places)]."</li>
        <li>".$places[array_rand($places)]."</li>
        <li>".$places[array_rand($places)]."</li>
        </ol>";

        print_r(array_rand($places,2)); //to returen a randam index / key from an array
        echo "<h3>$places[3]</h3>";
        echo "<ul>
                    <li>$places[0]</li>
                    <li>$places[1]</li>
                    <li>$places[2]</li>
                    <li>$places[3]</li>
                    <li>$places[4]</li>
                    <li>$places[5]</li>
        </ul>";

        $counter = 1;
        while($counter < 5){
            echo "<h4>$counter</h4>";
            $counter++;
        }


        echo "<ul>";
        $counter = 0;
        while($counter < count($places)){
            echo "<li>$places[$counter]</li>";
            $counter++;
        }
        echo "</ul>";

        $counter = 10;
        echo "<ul>";
        do{         //will executed at least once
            echo "<li>$places[$counter]</li>";
            $counter++;
        }while($counter < count($places));
        echo "</ul>";

        echo "<ol>";
        for($idx =0;$idx < count($places);$idx++){
            echo "<li>$places[$idx]</li>";
        }
        echo "</ol>";

        
    ?>
</body>
</html>