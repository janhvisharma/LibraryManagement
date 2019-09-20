<?php

$host = 'localhost';
$username = 'sharjanh_admin';
$password = 'N_58O^7R2m_&';
$db_name = 'sharjanh_mydb';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (empty($conn)) {
    die("Connection problem:" . mysqli_connect_error());
}


