<?php


    include "connection.php";

        $query = "select c.champimg as img, c.champname as name, c.champrole as role, r.rankname as rank from champions c inner join rank r on (c.rankid = r.rankid)";

    
    
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





?>