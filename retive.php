<?php
    include('db.php');
    $result=mysqli_query($con, "SELECT * FROM intro");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(mysqli_num_rows($result)>0){
?>
<table  style="border:2px solid black;">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Father name</td>
        <td>Age</td>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result)){
    ?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["father_name"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    
</tr>
<?php
$i++;
    }
    ?>
</table>
<?php
}
else{
    echo "No result Found";
}
?>
</body>
</html>


