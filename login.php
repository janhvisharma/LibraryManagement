<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
       <link rel="stylesheet" href="_css/style.css">
       <link rel="stylesheet" href="_css/style_form.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
            require_once 'header.php';
            ?>
            <h2>Login</h2>
            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
            
            <?php
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "fail") {
                    echo "<p id='msg'><br>Login failed! Either username or password is incorrect. Please try again.</p>";
                }
            }
            ?>
            <img src="_images/login.png" alt="LOGIN" id="login">
        </div>
    </body>
</html>
