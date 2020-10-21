<?php
if(!isset($_GET['name'])){
    echo "Error";
}
else{
    include "connection.php";

    $name = $_GET['name'];


    $query = "DELETE FROM champions WHERE champname = '$name'";

    $mysqli->query($query);




}





?>