<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h1_projekt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$myText = $_POST["opslag"];
$sql = "INSERT INTO opslag (opslag) VALUES ('$myText')";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>