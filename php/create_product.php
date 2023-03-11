<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
$Product_Name = $_POST['Product_Name'];
$Description = $_POST['Description'];
$Product_Unit = $_POST['Product_Unit'];
$Product_Price = $_POST['Product_Price'];
$Product_Quantity = $_POST['Product_Quantity'];
$Product_Status = $_POST['Product_Status'];
$Supplier_ID = $_POST['Supplier_ID'];
$Category_ID = $_POST['Category_ID'];

$q_string = "INSERT INTO `Product` (`Product_ID`, `Product_Name`, `Description`, `Product_Unit`, `Product_Price`, `Product_Quantity`, `Product_Status`, `Supplier_ID`, `Category_ID`) VALUES (NULL, '$Product_Name', '$Description', '$Product_Unit', '$Product_Price', '$Product_Quantity', '$Product_Status', '$Supplier_ID', '$Category_ID')";

$query = mysqli_query($connect, $q_string);

?>