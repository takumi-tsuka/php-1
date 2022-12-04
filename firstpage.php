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
        $name = "Riku";
        $family = "Tomphson";
        $Name = "Daniel";
        $age = 56;
        $saraly = 2500.70;
        $eatingFood = true;
        $pockets = null;
        var_dump($pockets);
        $pockets = 0;
        var_dump($pockets);
        $pockets = "";
        var_dump($pockets);

        echo "<h1>Hello World. $name $family</h1>";
        echo "<h1>Hello World. I am PHP! $Name $family</h1>";
        echo "<h1>Hello World. I am PHP!</h1>";
        Echo "What's your name?";

        $whistler = "Whistler";
        $toronto = "Toronto";
        $cunkun = "Cankun";
        $newYork = "New york";

        echo "<ul>
                <li>$whistler</li>
                <li>$toronto</li>
                <li>$cunkun</li>
                <li>$newYork</li>
            </ul>";

        $num1 = 10;
        $num2 = 0;
        if($num2 == 0){
            echo "<h3>Seecond number shoud not be zero</h3>";
        }else{
            echo "<h3>$num1 / $num2 = " . $num1 / $num2 . "</h3>";
        }

        echo "end of codes";

        // Imagin that you are in charge of designing  a grade system. his systen shiuld assign a letter grade ti student based on the following condition;
        // grade > 90; grade mark = A;
        // grade between 80 to 90:grade mark = B;
        // grade between 70 to 80:grade mark = C;
        // grade below 70: mark grade = F;
        $num3 =90;

        if($num3 >= 90){
            $mark = "A";
        }elseif($num3 >= 80 && $num3 < 90){
            $mark = "B";
        }elseif($num3 >= 70 && $num3 < 80){
            $mark = "C";
        }else{
            $mark = "F";
        }

        echo "<h3>student score mark:$mark</h3>";

        echo "<h3>$num1 + $num2 = " . $num1 + $num2 . "</h3>";
        echo "<h3>$num1 * $num2 = " . $num1 * $num2 . "</h3>";
        // echo "<h3>$num1 / $num2 = " . $num1 / $num2 . "</h3>";
        // echo "<h3>$num1 % $num2 = " . $num1 % $num2 . "</h3>";
    ?>
</body>
</html>