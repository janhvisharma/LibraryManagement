<?php
require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products</title>
        <link rel="stylesheet" href="_css/style.css">
        <link rel="stylesheet" href="_css/style_view.css">
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
            <h2>View Products</h2>
            <table id="search">
                <tr>
                    <td>
                        <form action="" method="get">
                            <div>
                                <input type="text" name="txtSearch" placeholder="Search" value="">
                                <input type="submit" value="Search" name="btnSearch">                              
                            </div>

                            <?php
                            ob_start();
                            session_start();

                            require_once 'config.php';

                            $search = $_REQUEST['txtSearch'];
                            $query = "SELECT * FROM tblBooks WHERE bookName LIKE '%$search%'";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                echo "<table id='books'>";
                                echo "<tr><th>Row #</th>";
                                echo "<th>Product Name</th>";
                                echo "<th>Product Quantity</th>";
                                echo "<th>Product Price</th></tr>";
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>$i</td>";
                                    echo "<td>" . $row['bookName'] . "</td>";
                                    echo "<td>" . $row['bookQuantity'] . "</td>";
                                    echo "<td>" . $row['bookPrice'] . "</td></tr>";
                                    $i++;
                                }
                                echo "</table>";
                            } else {
                                echo "<table id='books'>";
                                echo "<tr><th>Row #</th>";
                                echo "<th>Product Name</th>";
                                echo "<th>Product Quantity</th>";
                                echo "<th>Product Price</th></tr>";
                                echo "</table>";
                                echo "<p id='msg'><br>No such entry in table that matches search query</p>";
                            }
                            ?>
                        </form>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </div>
    </body>
</html>

