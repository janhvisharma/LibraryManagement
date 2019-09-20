<?php

ob_start();
session_start();

require_once 'config.php';

$name = $_REQUEST['bookName'];
$quantity = $_REQUEST['bookQuantity'];
$price = $_REQUEST['bookPrice'];

$query = "INSERT INTO tblBooks (bookName, bookQuantity, bookPrice)
VALUES ('$name', '$quantity', '$price')";

$result = mysqli_query($conn, $query);

if ($result == 1) {
    header("location:add-product.php?result=success");
} else {
    header("location:add-product.php?result=fail");
}
?>
