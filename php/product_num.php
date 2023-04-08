<?php
include "connection.php";
$table_name_product = "Product";

$query = "SELECT * FROM $table_name_product";
if ($result = mysqli_query($conn, $query)) {
    $rowcount = mysqli_num_rows($result);
 }

 echo json_encode($rowcount);
