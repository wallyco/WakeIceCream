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

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['Product_ID'])) {
        header("location:products/inventory_new.php");
        exit;
    }
    $Product_ID = $_GET['Product_ID'];
    $Product_ID = $Product_ID[0];
    $sql = "select * from Product where Product_ID=$Product_ID";    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while (!$row) {
        header("location: products/inventory_new.php");
        exit;
    }
    $Product_Name = $row["Product_Name"];
    $Description = $row["Description"];
    $Product_Unit = $row["Product_Unit"];
    $Product_Price = $row["Product_Price"];
    $Product_Quantity = $row["Product_Quantity"];
    $Product_Status = $row["Product_Status"];
    $Supplier_ID = $row["Supplier_ID"];
    $Category_ID = $row["Category_ID"];
} else {
    // $Product_ID = $_POST["Product_ID"];
    $Product_ID = $_GET['Product_ID'];
    $Product_Name = $_POST["Product_Name"];
    $Description = $_POST["Description"];
    $Product_Unit = $_POST["Product_Unit"];
    $Product_Price = $_POST["Product_Price"];
    $Product_Quantity = $_POST["Product_Quantity"];
    $Product_Status = $_POST["Product_Status"];
    $Supplier_ID = $_POST["Supplier_ID"];
    $Category_ID = $_POST["Category_ID"];

    $sql = "update Product set Product_Name='$Product_Name', Description='$Description', Product_Unit='$Product_Unit', 
        Product_Price=$Product_Price,Product_Quantity=$Product_Quantity, Product_Status='$Product_Status' , Supplier_ID='$Supplier_ID', Category_ID='$Category_ID' 
        where Product_ID =$Product_ID ";
    // echo $sql;
    // exit;
    $result = $conn->query($sql);
}

?>
<!-- <!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">UPDATE PRODUCT</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
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
    <script src="/js/redirect.js" type="text/javascript"></script>

</head>

<body>
    <!-- SIDEBAR -->
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper" style="background-color: #a64de2;">
                <div class="logo">
                    <a href="" class="simple-text">
                        Hi, Username
                        <!-- TODO fetch -->
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="">
                            <i class="pe-7s-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a onclick="redirectUser('')">
                            <i class="pe-7s-note2"></i>
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
                            <i class="pe-7s-note2"></i>
                            <p>PRODUCTS</p>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="pe-7s-graph3"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-star"></i>
                            <p>Favorites</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-mail"></i>
                            <p>Emails</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-settings"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="">
                            <i class="pe-7s-rocket"></i>
                            <p>Upgrade to PRO</p>
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
                                <button type="button" class="btn btn-primary btn" id="add-products">Add Product</button>
                                <button type="button" class="btn btn-primary btn" id="update-product">Update Product</button>
                                <a type="button" class="btn btn-primary btn" id="display-inventory">Display Inventory</button></a>

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
                                        <option disabled selected>-- Select Supplier ID --</option>
                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM Supplier");
                                        while ($data = mysqli_fetch_array($records, MYSQLI_ASSOC)) :;
                                        ?>

                                            <option value="<?php echo $data['Supplier_ID'];
                                                            ?>">
                                                <?php echo $data['Name'];
                                                ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>


                                    <label> Category ID: </label>
                                    <select class="form-control" name="Category_ID">
                                        <option disabled selected>-- Select Category ID --</option>
                                        <?php
                                        $records = mysqli_query($conn, "SELECT * FROM Category");
                                        while ($data = mysqli_fetch_array($records, MYSQLI_ASSOC)) :;
                                        ?>

                                            <option value="<?php echo $data['Category_ID'];
                                                            ?>">
                                                <?php echo $data['Category_Name'];
                                                ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>
                                    <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                                    <a class="btn btn-info" type="submit" name="cancel" href="inventory_new.php"> Cancel </a><br>

                                </div>
                            </form>
                        </div>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $url = 'http://localhost:8000/products/inventory_new.php';

    echo "<script> redirectUser('/products/inventory.php',true); </script>";
    exit;
}

?>

<script>
        document.getElementById("add-products").addEventListener("click", displayAddProduct);
        document.getElementById("display-inventory").addEventListener("click", displayInventory);
        // REDIRECT
        function displayAddProduct(){
            redirectUser('-products');
        }
        function displayInventory(){
            redirectUser("/products/inventory.php",true);
        }
</script>
    