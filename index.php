<?php
$connect = new mysqli('db', 'wakeicecream_user', 'password', 'WakeIceCreamDB');

if($connect){
    echo "Connected";
}

