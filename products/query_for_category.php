<?php
$conn = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query database
$sql = "SELECT `Category_ID`, `Category_Name` FROM `Category`";
$result = $conn->query($sql);

// Convert result to array
$rows = array();
while($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

// Convert array to JSON and print it
echo json_encode($rows);

// Close connection
$conn->close();

?>