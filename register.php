<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="_css/style.css">
        <link rel="stylesheet" href="_css/style_form.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
            require_once 'header.php';
            ?>
            <h2>Register</h2>
            <form action="register1.php" method="post">
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
                        <td colspan="2"><input type="submit" value="Register" id="submit"></td>
                    </tr>
                </table>
            </form>
            
            <?php
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "userexists") {
                    echo "<p id='msg'><br>User already exists</p>";
                } elseif ($_REQUEST['result'] == "success") {
                    echo "<p id='msg'><br>New user is successfully registered</p>";
                } elseif ($_REQUEST['result'] == "fail") {
                    echo "<p id='msg'><br>Something went wrong. User is not registered</p>";
                }
            }
            ?>
            <img src="_images/register.png" alt="REGISTER" id="register">
        </div>
    </body>
</html>
