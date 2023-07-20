<?php
include("db.php");
if(count($_POST)>0){
    mysqli_query($con, "UPDATE `intro` SET name='$_POST[name]',father_name='$_POST[father_name]',age='$_POST[age]' WHERE id=$_POST[id]");
    $msg="Record Modified Sucessfully";
}
$result=mysqli_query($con, "SELECT * FROM `intro`");
$row=mysqli_fetch_array($result);
?>
<html>
    <head>
    <title>Update Intro Record</title>
    </head>
    <body>
        <form action="" method="post" name="frmUser">
            <div><?php if(isset($msg)){echo $msg;}?></div>
            <div style="padding-bottom:5px;">
                <a href="update.php">intro update</a>
            </div>
            Name: <br>
            <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
            <br>
            Father Name: <br>
            <input type="text" name="father_name" class="txtField" value="<?php echo $row['father_name']; ?>">
            <br>
            Age: <br>
            <input type="text" name="age" class="txtField" value="<?php echo $row['age'];?>">
            <br>
            <input type="submit" value="Submit" class="botton" name="submit">
        </form>
    </body>
</html>
