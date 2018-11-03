<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            <?php
            include('navbar.php');
            ?>
            
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
            

    
        </head>
        <body><div>
            </div>
            <section>
            <div class="fullBackground"></div>
            <div class="loginbox">
                <h1 >Login Here</h1>
                <form onsubmit="return checkForm(this);" action="../assets/php/login.php" method="post">
                    <p>Email id:</p>
                    <input type="email" placeholder="Enter your email" name="email" required>
                    <p>Password:</p>
                    <input type="password" placeholder="Enter Password" name="password" id="pass" required><br><br>
                    <input type="submit"value="Login" ><br>
                    <a href="forgot.php">Forgot Password</a><br>
                    <a href="signup.php">I'm new here</a>
                </form>
            </div>
            </section>
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/img/1.jpg','../assets/img/2.jpeg','../assets/img/2.jpg','../assets/img/3.jpg','../assets/img/4.jpg','../assets/img/5.jpg','../assets/img/6.jpg','../assets/img/7.jpg','../assets/img/8.jpg','../assets/img/9.jpg','../assets/img/10.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
        </body>
       
    </html>