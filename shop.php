<?php
// add.php
include "./component/connection.php";


$sql = "SELECT * FROM cards";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0){
    header("Location:./index.php");
    exit();
}
else{
    header("Location:./basket.php");
    exit();
}
// Close the connection
$con->close();
?>



