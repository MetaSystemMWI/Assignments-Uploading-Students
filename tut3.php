<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo (pi());
        echo "<br>";
        echo (min(0,40,30,-90));
        echo "<br>";
        echo (max(0,40,30,-90));
        echo "<br>";
        echo (abs(-6.5));
        echo "<br>";
        echo (sqrt(64));
        echo "<br>";
        echo (round(0.40));
        echo "<br>";
        echo (rand());
        echo "<br>";
        echo (rand(10,100));
        echo "<br>";
        define("Coding","Welcome to programming");
        echo Coding;
        echo "<br>";
        $x=5;
        $y=10;
        echo ($x<=>$y);
        echo "<br>";
        $t= date("H");
        if($t<"20")
        {
           echo "<a href='https://www.google.com'>Google</a>";
        }else{
            echo "<a href='https://www.google.com'>Google</a>";
        }


        $color="red";
        switch($color){
            case "red":
                echo "Your best color";
                break;
            case "red":
                echo "Your best color";
                break;
            default:
            echo "you are select wronge case";
        }

        echo "<br>";
    $x= 1;
    while($x<=5){
        echo "The number is : $x <br>";
        $x++;
    }
    $color=array("red","green","blue");
    
    foreach($color as $value){
       
            echo "$value <br>";
       
    }
    ?>
</body>
</html>