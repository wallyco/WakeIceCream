<?php

include "connection.php";
if (isset($_GET['Product_ID'])) {
    $Product_ID = $_GET['Product_ID'];
    $sql = "DELETE from `Product` where Product_ID =$Product_ID";
    $conn->query($sql);

    $url = '/products/inventory.php';

    echo "<script> location.href='$url'; </script>";
    exit;
}
