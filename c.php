<?php
if(!isset($_GET['name']) || !isset($_GET['rankid']) || !isset($_GET['role']) || !isset($_GET['imgurl'])){
    echo "Error";
}
else{
    include "connection.php";

    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }


    $name = $_GET['name'];
    $rank = $_GET['rankid'];
    $role = $_GET['role'];
    $imgurl = $_GET['imgurl'];

    $query = "INSERT INTO champions (champimg, champname, champrole, rankid) VALUES ('$imgurl', '$name', '$role', '$rank')";

    $mysqli->query($query);




}





?>