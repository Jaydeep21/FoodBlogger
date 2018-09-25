<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            
            <?php
            include('navbar.php');
            ?>
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
        </head>
        <body>
            
            <div class="loginbox">
                <h1 >Login Here</h1>
                <form onsubmit="return checkForm(this);" action="../assets/php/login.php" method="get">
                    <p>Email id:</p>
                    <input type="email" placeholder="Enter your email" name="email" required>
                    <p>Password:</p>
                    <input type="password" placeholder="Enter Password" name="password" id="pass" required><br><br>
                    <input type="submit"value="Login" ><br>
                    <a href="forgot.php">Forgot Password</a>
                </form>
            </div>
        </body>
    </html>