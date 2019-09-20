<?php

session_start();

if (!isset($_SESSION['username'])) {
    // redirect back to login page
    header('location:login.php');
}

 
