<?php

$conn = mysqli_connect("localhost","root","","db_admin");

if(!$conn){
    echo "Database connected" . mysqli_connect_error();
}