<?php
// add.php
include "./component/connection.php";


$sql = "DELETE FROM `cards`";
$result = mysqli_query($con, $sql);


header("Location:./basket.php");
exit();

// Close the connection
$con->close();
?>




