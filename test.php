<?php
$ip_addr = gethostbyname('apsouth1-mysql-instance2.cpip3m9hs2h0.ap-south-1.rds.amazonaws.com'); 

$username = "adminer";
$password = "adminer123";
$dbname = "bardyahdb";

// Create connection
$conn = new mysqli($ip_addr, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_id, user_first, user_email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["user_first"]. " " . $row["user_email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>