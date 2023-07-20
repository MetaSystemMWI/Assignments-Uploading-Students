<?php

$sername="localhost";
$username="root";
$password="";
$database="std_details";

$con=new mysqli($sername,$username,$password,$database);

if($con->connect_error){
    die("Connect Failed".$con->connect_error);
}
$sql="INSERT INTO `intro`(`name`, `father_name`, `age`) 
VALUES ('ali','ahme','18')";
if($con->query($sql)==TRUE){
    $last_id=$con->insert_id;
    echo "New Record is enter".$last_id;
}else{
    echo "Error".$sql."<br>".$con->error;
}
$con->close();
?>


<?php

// $sername="localhost";
// $username="root";
// $password="";
// $database="std_details";

// $con=mysqli_connect($sername,$username,$password,$database);

// if(!$con){
//     die("Connect Failed".mysqli_connect_error());
// }
// echo "connect successully";

?>


<?php

// $sername="localhost";
// $username="root";
// $password="";
// $database="std_details";

// try{
//     $con=new PDO("mysql:host=$sername;dbname=std_details",$username,$password);
//     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "successfully";
// }catch(PDOException $e){
//     echo "Conectio faile".$e->getMessage();
// }

?>