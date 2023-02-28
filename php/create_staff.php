<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Role_ID = $_POST['Role_ID'];
$q_string = "INSERT INTO `Staff`(`Staff_ID`, `First_Name`, `Last_Name`, `Address`, `Phone`, `Email`, `Password`, `Role_ID`) VALUES (NULL, '$First_Name', '$Last_Name', '$Address', '$Phone', '$Email', '$Password', '$Role_ID')";

$query = mysqli_query($connect, $q_string);


?>
