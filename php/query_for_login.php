<?php
$login_id = ($_POST["email"]);
$password = ($_POST["password"]);
//TODO Seperate
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
// if($connect){
//     print_r("Connected \n");
// }

$table_name = "Staff";

$query = "SELECT * FROM $table_name WHERE Email='$login_id'";

$response = mysqli_query($connect, $query); 
$responseval = mysqli_fetch_assoc($response);
$querypass = $responseval['Password'];

if($querypass == $password){
    echo json_encode(1);
    //pass
}else{
    echo json_encode(0);
    //fail
}

exit;


//
// switch ($permission)
// {
// case 1:
// header ("Location: member-page.php"); // redirect to member page
// break;

// case 2:
// header ("Location: veteran-page.php"); // redirect to veteran page
// break;

// case 3:
// header ("Location: admin-page.php"); // redirect to admin page
// break;

// default:
// header ("Location: index.php"); // redirect to main page if no permission is set
// break;
// }






