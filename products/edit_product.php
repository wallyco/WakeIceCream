<?php
include "connection.php";
$Product_ID  = "";
$Product_Name = "";
$Description = "";
$Product_Unit = "";
$Product_Price = "";
$Product_Quantity = "";
$Product_Status = "";
$Supplier_ID = "";
$Category_ID = "";


$error = "";
$success = "";
// connect to the database
$mysqli = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB');

// check for connection errors
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['Product_ID'])) {
        header("location:products/inventory.php");
        exit;
    }
    $Product_ID = $_GET['Product_ID'];

    $sql = "select * from `Product` where Product_ID=$Product_ID";

    $result = $mysqli->query($sql);
    // loop through the result set
    $row = $result->fetch_assoc();

    $Product_Name = $row["Product_Name"];
    $Description = $row["Description"];
    $Product_Unit = $row["Product_Unit"];
    $Product_Price = $row["Product_Price"];
    $Product_Quantity = $row["Product_Quantity"];
    $Product_Status = $row["Product_Status"];
    $Supplier_ID = $row["Supplier_ID"];
    $Category_ID = $row["Category_ID"];
} else {
    $Product_ID = $_GET['Product_ID'];
    $Product_Name = $_POST["Product_Name"];
    $Description = $_POST["Description"];
    $Product_Unit = $_POST["Product_Unit"];
    $Product_Price = $_POST["Product_Price"];
    $Product_Quantity = $_POST["Product_Quantity"];
    $Product_Status = $_POST["Product_Status"];
    $Supplier_ID = $_POST["Supplier_ID"];
    $Category_ID = $_POST["Category_ID"];

    $Supplier_filter = '';
    if ($Supplier_ID) {
        $Supplier_filter = ", Supplier_ID='$Supplier_ID'";
    }

    $Category_filter = '';
    if ($Category_ID) {
        $Category_filter = ", Category_ID='$Category_ID'";
    }
    $sql = "update Product set Product_Name='$Product_Name', Description='$Description', Product_Unit='$Product_Unit', 
        Product_Price=$Product_Price,Product_Quantity=$Product_Quantity, Product_Status='$Product_Status' " . $Supplier_filter . $Category_filter .  " where Product_ID =$Product_ID ";

    $result = $conn->query($sql);
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!-- JS -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="js/products.js" type="text/javascript"></script>
</head>

<body onload="init();">
    <!-- SIDEBAR -->
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper" style="background-color: #a64de2;">
                <div class="logo">
                    <a href="" class="simple-text" id="username">
                        Hi, Username
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a onclick="redirectUser('')">
                            <i class="pe-7s-home"></i>
                            <p>DASHBOARD</p>
                        </a>
                    </li>
                    <li>
                        <a onclick="redirectUser('-users')">
                            <i class="pe-7s-note2"></i>
                            <p>USERS</p>
                        </a>
                    </li>

                    <li class="active">
                        <a onclick="redirectUser('-products')">
                            <i class="pe-7s-graph3"></i>
                            <p>PRODUCTS</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- MAIN CONTENT WINDOW -->
            <div class="content" style="background-color: rgb(255, 212, 249);">
                <div class="d-inline-flex">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <div class="container-fluid">

                                <button type="button" class="btn btn-primary btn" id="add-product">Update Product</button>
                                <a button type="button" class="btn btn-primary btn" href="inventory.php">Display Inventory</button></a>

                            </div>
                        </nav>
                        <div class="col-lg-6 m-auto">

                            <form method="post">

                                <br><br>
                                <div class="card">

                                    <div class="card-header bg-primary">
                                        <h1 class="text-white text-center"> Update Product </h1>
                                    </div><br>

                                    <input type="hidden" name="Product_ID " value="<?php echo $Product_ID; ?>" class="form-control"> <br>

                                    <label> Name: </label>
                                    <input type="text" name="Product_Name" value="<?php echo $Product_Name; ?>" class="form-control"> <br>

                                    <label> Description: </label>
                                    <input type="text" name="Description" value="<?php echo $Description; ?>" class="form-control"> <br>

                                    <label> Unit: </label>
                                    <input type="text" name="Product_Unit" value="<?php echo $Product_Unit; ?>" class="form-control"> <br>

                                    <label> Price: </label>
                                    <input type="number" name="Product_Price" value="<?php echo $Product_Price; ?>" class="form-control"> <br>

                                    <label> Quantity: </label>
                                    <input type="number" name="Product_Quantity" value="<?php echo $Product_Quantity; ?>" class="form-control"> <br>

                                    <label> Status: </label>
                                    <input type="text" name="Product_Status" value="<?php echo $Product_Status; ?>" class="form-control"> <br>


                                    <label> Supplier ID: </label>
                                    <select class="form-control" name="Supplier_ID">

                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM Supplier");
                                        while ($data = mysqli_fetch_array($records, MYSQLI_ASSOC)) :;
                                            $selected = '';
                                            if ($Supplier_ID == $data['Supplier_ID']) {
                                                $selected = 'selected';
                                            }
                                        ?>

                                            <option value="<?php echo $data['Supplier_ID']; ?>" <?php echo $selected ?>>
                                                <?php echo $data['Name']; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>

                                    </select>


                                    <label> Category ID: </label>
                                    <select class="form-control" name="Category_ID">

                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM Category");
                                        while ($data = mysqli_fetch_array($records, MYSQLI_ASSOC)) :;
                                            $selected = '';
                                            if ($Category_ID == $data['Category_ID']) {
                                                $selected = 'selected';
                                            }
                                        ?>

                                            <option value="<?php echo $data['Category_ID']; ?>" <?php echo $selected ?>>

                                                <?php echo $data['Category_Name']; ?>

                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>
                                    <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>

                                    <a class="btn btn-info" type="submit" name="cancel" href="inventory.php"> Cancel </a><br>

                                </div>
                            </form>
                        </div>
</body>
</html>
<script src="../js/redirect.js" type="text/javascript"></script>
<?php
if (isset($_POST['submit'])) {
    $url = '/products/inventory.php';

    echo "<script> location.href='$url'; </script>";
    exit;
}

?>
