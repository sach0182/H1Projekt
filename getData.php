<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "h1_projekt";

// forbindelse
$conn = new mysqli($servername, $username, $password, $dbname);
// Check forbindelse
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, opslag, modified FROM opslag ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // få data 
    while($row = $result->fetch_assoc()) {

        $minId = $row["id"];
        $slet = "DELETE FROM opslag WHERE id=$minId";

        echo "
        <div class='opslag' id='div_".$minId."'> 

        <input style='float: right;margin-left: 1vw;' id='$minId' type='button' ' value='slet' onclick='parent.formAction(this.id+\"_slet\")'></input>
        <div style='float: right;'> " . $row["modified"]. "</div><br>

        <div>". $row["opslag"]. "</div>  <br>
        <input style='float:right;' type='button' onclick='parent.formAction(this.id+\"_rediger\")' value='redigere'></input>
        </div>";
    }
} else {
    echo "0 results";
}

?>   
