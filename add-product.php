<?php
require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product</title>
        <link rel="stylesheet" href="_css/style.css">
        <link rel="stylesheet" href="_css/style_form.css">
    </head>
    <body>
        <div id="wrapper">
            <h1>Assignment 4 - Library Management System </h1>
            <a href="index.php">Home</a> | 
            <a href="register.php">Register</a> | 
            <a href="logout.php">Logout</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>
            <hr>
            <h2>Add Product</h2>
            <form action="add-product1.php" method="post">
                <table>
                    <tr>
                        <td>Book Name:</td>
                        <td>
                            <input type="text" name="bookName">
                        </td>
                    </tr>
                    <tr>
                        <td>Book Quantity:</td>
                        <td>
                            <input type="text" name="bookQuantity">
                        </td>
                    </tr>
                    <tr>
                        <td>Book Price:</td>
                        <td>
                            <input type="text" name="bookPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "success") {
                    echo "<br><div id='msg'>";
                    echo "<a href='#'>&times;</a>";
                    echo "SUCCESS! New product was added.";
                    echo "</div></div>";
                } else if ($_REQUEST['result'] == "fail") {
                    echo "<br><div id='msg'>";
                    echo "<a href='#'>&times;</a>";
                    echo "FAIL. New product was not added.";
                    echo "</div></div>";
                }
            }
            ?>
        </div>
    </body>
</html>
