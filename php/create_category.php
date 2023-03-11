<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
$Category_Name = $_POST['Category_Name'];
$Description = $_POST['Description'];

$q_string = "INSERT INTO `Category` (`Category_ID`, `Category_Name`, `Description`) VALUES (NULL, '$Category_Name', '$Description')";

$query = mysqli_query($connect, $q_string);


?>