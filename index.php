<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password');

if($connect){
    echo "Connected";
}
