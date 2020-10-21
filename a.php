<?php
if(!isset($_GET['rankid']) || !isset($_GET['role'])){
    echo "Rank not chosen";
}
else{
    include "connection.php";

    $rankid = $_GET['rankid'];
    $role = $_GET['role'];

    if($rankid == "0" && $role == "any"){
        $query = "select c.champimg as img, c.champname as name, c.champrole as role, r.rankname as rank from champions c inner join rank r on (c.rankid = r.rankid)";
    }
    else if($rankid != "0" && $role == "any"){
        $query = "select c.champimg as img, c.champname as name, c.champrole as role, r.rankname as rank from champions c inner join rank r on (c.rankid = r.rankid) where c.rankid = '$rankid'";
    }
    else if($rankid == "0" && $role != "any"){
        $query = "select c.champimg as img, c.champname as name, c.champrole as role, r.rankname as rank from champions c inner join rank r on (c.rankid = r.rankid) where c.champrole = '$role'";
    }
    else {
        $query = "select c.champimg as img, c.champname as name, c.champrole as role, r.rankname as rank from champions c inner join rank r on (c.rankid = r.rankid) where c.rankid = '$rankid' and c.champrole = '$role'";
    }
    
    
    $result = $mysqli->query($query);

    echo "<table class='table'>
            <tr>
            <th></th>
            <th>Champion</th>
            <th>Role</th>
            <th>Rank</th>
            </tr>";
    
    while ($row = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . "<img src='" . $row->img . "' alt='pic' width='56' height='56'>" . "</td>";
        echo "<td>" . ucwords($row->name) . "</td>";
        echo "<td>" . ucwords($row->role) ."</td>";
        echo "<td>" . ucwords($row->rank) ."</td>";
        echo "</tr>";
    }
    echo "</table>";

    $mysqli->close();
}




?>