<!-- <?php
// session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // session_unset();
    // session_destroy();
    ?>
   

   <table>
    <tr>
        <td>Filter name</td>
        <td>filter id</td>
    </tr>
    <?php
    foreach(filter_list() as $id=>$filter){
        echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
    }?>
   </table>


<?php
    class Fruit{
        public $name;
        public $color;

        function _construct($name){
            $this-> name = $name;
        }
        function get_name(){
            return $this -> name;
        }
    }

    $apple=new Fruit();
    $car=new Fruit();
    $apple->set_name('Apple');
    $car->set_name('BMW');
    echo $apple->get_name();
    echo "<br>";
    echo $car->get_name();
?>



MYSql
Mysqli
PDO
</body>
</html>