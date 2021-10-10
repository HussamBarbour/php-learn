<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// insert 
// $sql = "INSERT INTO todo_list (`text`,`important`) VALUES ('test11',1)";

//$conn->query($sql);

// select

$sql = "SELECT * FROM `todo_list`";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo $row['text'];
    echo '<br>';
}

?>
