<?php
// add.php
include "./component/connection.php";

// Retrieve the submitted values
$img = "./image/inak_basic.webp";
$card_text ="Informatika inak Základ";
$price ="35";

// Construct the SQL query
$sql1 = "INSERT INTO cards (img, card_text, price) VALUES ('$img', '$card_text', '$price')";



// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Execute the query
if ($con->query($sql1) === TRUE) {
    echo "Record inserted successfully";
    header("Location:./index.php?");
    exit();
} else {
    echo "Error inserting record: " . $con->error;
}

// Close the connection
$con->close();
?>



