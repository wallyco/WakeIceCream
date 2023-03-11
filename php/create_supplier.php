<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Fax = $_POST['Fax'];
$Email = $_POST['Email'];
$Comments = $_POST['Comments'];

$q_string = "INSERT INTO `Supplier` (`Supplier_ID`, `Name`, `Address`, `Phone`, `Fax`, `Email`, `Comments`) VALUES (NULL, '$Name', '$Address', '$Phone', '$Fax', '$Email', '$Comments')";

$query = mysqli_query($connect, $q_string);

?>