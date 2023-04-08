<<!doctype html>
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


    </head>

    <body>
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
            <!-- END OF SIDE BAR -->
            <!-- TOP-NAV BAR -->
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
                                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
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
                <!-- END OF TOP-NAV BAR -->
                <!-- MAIN CONTENT WINDOW -->
                <div class="content" style="background-color: rgb(255, 212, 249);">
                    <div class="d-inline-flex">
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <div class="container-fluid">
                                    <!-- <a class="navbar-brand" id="create-user">Add products</a> -->
                                    <!-- <button type="button" class="btn btn-primary btn-lg" id="add-product">Add Products</button>
                                 -->
                                    <!-- <button type="button" class="btn btn-primary btn-lg" href="create_product_new.php">Add Products</button> -->
                                    <a button type="button" class="btn btn-primary btn-lg" id="add-products">Add Products</button></a>
                                    <!-- <button type="button" class="btn btn-primary btn-lg" id="update-product">Update Products</button>
                                    <button type="button" class="btn btn-primary btn-lg" id="delete-product">Delete Products</button> -->



                                    <!-- <button class="navbar-brand" type="button" id="add-product">Add products</button> -->
                                </div>
                            </nav>
                            <div class="container-fluid">
                                <table class="table table-hover table-danger mx-5">
                                    <thead>
                                        <tr scope="row">
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product ID</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product Name</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Description</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product Unit</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product Price</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product Quantity</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Product Status</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Supplier ID</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Category ID</th>
                                            <th scope="col" style="color: black; border: 1px solid #a64de2;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // connect to the database
                                        $mysqli = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB');

                                        // check for connection errors
                                        if ($mysqli->connect_error) {
                                            die('Connect Error (' . $mysqli->connect_errno . ') '
                                                . $mysqli->connect_error);
                                        }

                                        // query the database 
                                        $sql = "";
                                        if (isset($_GET['search'])) {
                                            $filtervalues = $_GET['search'];
                                            $sql = "SELECT * FROM `Product` WHERE CONCAT(Product_Name, Description, Product_Unit, Product_Price, Product_Quantity, Product_Status )  LIKE '%$filtervalues%' ";
                                        } else {
                                            $sql = "SELECT * FROM `Product` ";
                                        }
                                        $result = $mysqli->query($sql);
                                        // loop through the result set
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr scope=\"row\" style=\"border: 1px solid #a64de2;\">";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_ID'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_Name'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Description'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_Unit'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_Price'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_Quantity'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Product_Status'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Supplier_ID'] . "</td>";
                                            echo "<td scope=\"col\" style=\"border: 1px solid #a64de2;\">" . $row['Category_ID'] . "</td>";
                                            echo "
                                            <td class=\"\" scope=\"col\" style=\"border: 1px solid #a64de2;\">
                                            <div class=\"\" style=\"color: red;display: flex;\">
                                                <button type=\"button\" class=\"btn\" style=\"background-color: #b80ff2; color: white; border: 2px solid white; margin: 2px;\" onclick='editRow($row[Product_ID])'>Edit</button>
                                                <a button type=\"button\" class=\"btn\" style=\"background-color: #cc41f2; color: white;  border: 2px solid white; margin: 2px;\"  href='delete_product.php?Product_ID=$row[Product_ID]'>Delete</button></a>
                                            </div>  
                                            </td>
                                            <tr/>";
                                        }
                                        //  href='edit_product.php?Product_ID=$row[Product_ID]
                                        // close the database connection
                                        $mysqli->close();
                                        ?>
                                    </tbody>

                                </table>
    </body>

    </html>
    <script src="../js/redirect.js" type="text/javascript"></script>
    <script>
        document.getElementById("add-products").addEventListener("click", displayAddProduct);

        // REDIRECT
        function displayAddProduct() {
            redirectUser('-products');
        }

        function editRow(id) {
            document.location.href = 'edit_product.php?Product_ID=' + id;

            // redirectUser('edit_product.php?Product_ID='+id, true)
        }
    </script>

    <!-- <a class='btn btn-success' href='edit.php?Product_ID=$row[Product_ID]'>Edit</a> -->
    <!-- // <a class='btn btn-danger' href='delete_product.php?Product_ID=$row[Product_ID]'>Delete</a> -->