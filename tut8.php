<?php
if(isset($_POST['submit'])){
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="std_details";

    $name=$_POST['name'];
    $f_name=$_POST['father_name'];
    $age=$_POST['age'];

    $con=mysqli_connect($hostname,$username,$password,$dbname);
    $query="INSERT INTO `intro`(`name`, `father_name`, `age`)
     VALUES ('$name','$f_name','$age')";
     $run=mysqli_query($con, $query);
     if($run){
        echo "data is enter";
     }else{
        echo "data no enter";
     }
    //  mysqli_free_result($run);
     mysqli_close($con);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="post">
   Name: <input type="text" name="name" id="name" ><br>
    Father Name:<input type="text" name="father_name" id="father_name"><br>
   age: <input type="number" name="age" id="age"><br>
    <input type="submit" name="submit" id="submit" value="Submit">
</form>
</body>
</html>