<?php

include 'connect.php';

$q = "insert into Emp values(4,'Arpit')";
if (mysqli_query($con, $q)) {
    echo "inserted";
    echo "<br><br>";
}else {
    echo mysqli_error;
}
include 'show.php';

?>