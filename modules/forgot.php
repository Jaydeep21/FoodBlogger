<?php include('navbar.php');?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
        <script src="../assets/js/script.js"></script>
       
    </head>
	<body >
        <div class="fullBackground"></div>
        <div class="loginbox" style="width: 320px;height: 300px;top:50%">
            <h1>Forgot Password</h1>
            <form  action="../assets/php/forgot.php" method="post" onsubmit="return checkForm(this);">
                <p>Enter your Email-Id</p>
                <input type="email" placeholder="Enter your emailid" name="email" required>
                <input type='submit' id="subbtn">
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/img/1.jpg','../assets/img/2.jpg','../assets/img/3.jpg','../assets/img/4.jpg','../assets/img/5.jpg','../assets/img/6.jpg','../assets/img/7.jpg','../assets/img/8.jpg','../assets/img/9.jpg','../assets/img/10.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
    </body>
    <?php
        include('footer.php');
        ?>
</html>