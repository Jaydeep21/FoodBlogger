<?php include('navbar.php');?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../assets/js/script.js"></script>
       
    </head>
	<body >
        
        <div class="loginbox" style="width: 320px;height: 300px;top:50%">
            <h1>Forgot Password</h1>
            <form  action="../assets/php/forgot.php" method="post" onsubmit="return checkForm(this);">
                <p>Enter your Email-Id</p>
                <input type="email" placeholder="Enter your emailid" name="email" required>
                <input type='submit' id="subbtn">
            </form>
        </div>
        
    </body>
    <?php
        include('footer.php');
        ?>
</html>