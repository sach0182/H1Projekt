<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h1_projekt";

$pnr = $_GET["id"];
// forbindelse
$conn = new mysqli($servername, $username, $password, $dbname);
// Check forbindelse
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$slet = "DELETE FROM opslag WHERE id=$pnr";
if ($conn->query($slet) === TRUE){

}

$conn->close();
?>