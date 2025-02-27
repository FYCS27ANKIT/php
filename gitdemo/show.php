<?php

include 'connect.php';

$q = "select * from Emp";
$res = mysqli_query($con, $q);
while ($row = mysqli_fetch_assoc($res)) {
    echo "Id => " . $row["id"] . ", Name => " . $row["name"];
    echo "<br>";
}
?>