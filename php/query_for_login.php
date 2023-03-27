<?php
$login_id = ($_POST["email"]);
$password = ($_POST["password"]);
//TODO Seperate
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB'); 
// if($connect){
//     print_r("Connected \n");
// }

$table_name_staff = "Staff";
$table_name_role = "Role";

$query = "SELECT * FROM $table_name_staff  WHERE Email='$login_id'";

$response = mysqli_query($connect, $query); 
$responseval = mysqli_fetch_assoc($response);
$querypass = $responseval['Password'];
$queryroleID = $responseval['Role_ID'];
$queryFirstName = $responseval['First_Name'];
$queryFirstNameLength = strlen($queryFirstName);

$query = "SELECT * FROM $table_name_role  WHERE Role_ID='$queryroleID'";
$response = mysqli_query($connect, $query); 
$responseval = mysqli_fetch_assoc($response);
$queryAuthLevel = $responseval['Auth_Level'];



if($querypass == $password){
    //pass
    echo json_encode(1);
    echo json_encode((int)$queryAuthLevel);
    echo json_encode($queryFirstNameLength);
    echo json_encode($queryFirstName);
    
}else{
    echo json_encode(0);
    //fail
}
exit;







