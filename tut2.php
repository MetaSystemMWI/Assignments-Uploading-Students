<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $color="red";
        // echo "My Color is" .$color."<br>";
        /*this is multiple line c
        comments*/
        #that is single line comments

        $x = 5 /*+15*/+5;
        echo $x;

        $s="hello";
        $y=6;
        $d=5.6;
        $X=6;
        $age=12;
        $Age=34;
        echo "i love $Age";



        echo "<h1>" .$s."</h1><br>";


        $m=5985;
        var_dump($m);
        var_dump($s);
        var_dump($d);

        echo "<br>";
        $cars=array("bmw",2);
        var_dump($cars);
        echo "<br>";

        echo strlen("Hello World");
        echo "<br>";
        echo str_word_count("This Hello World is used for example");
        echo "<br>";
        echo strrev("Hello world");
        echo "<br>";
        echo strpos("Hello world","world");
        echo "<br>";
        echo str_replace("Hello world","world","Hello world Dolly");

        echo "<br>";

        $x=600;
        var_dump(is_int($x));

        echo "<br>";

        $x=6.0;
        var_dump(is_int($x));

        echo "<br>";

        $x=6.5;
        var_dump(is_float($x));
        echo "<br>";
        $x=600;
        var_dump(is_float($x));

        echo "<br>";
        $x=1.9e411;
        var_dump($x);

        echo "<br>";
        $x=acos(8);
        var_dump($x);


        echo "<br>";
        $x=9999;
        var_dump(is_numeric($x));

        echo "<br>";

        $x= 34.5;
        $int_cast=(int)$x;
        echo $int_cast;

        echo "<br>";
        $x= 34;
        $y=0.0;
        $z=$x+$y;
        echo $z;
    ?>
</body>
</html>