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
        <div class="fullBackground"></div>
        <div class="loginbox" style="width: 320px;height: 830px;top:70%">
            <h1>Sign up</h1>
            <form  action="../assets/php/signup.php" method="post" onsubmit="return checkForm(this);">
                <p>First Name:</p>
                <input type="text" placeholder="Enter First Name" name="fname" >
                <p>Last Name:</p>
                <input type="text" placeholder="Enter Last Name" name="lname" >
                <p>Email id:</p>
                <input type="email"  placeholder='Enter email' name="emailid" >
                <p>Date Of Birth:</p>
                <input type="date" id="dob" name="dob" >
                <p>Contact Number:</p>
                <input type='tel' placeholder='Enter your phone number here' id="phone" name="phone" >
                <p>Gender:</p><br>
                <p>Male:<input type='radio' name='gender' value='m' ></p>
                <p>Female:<input type='radio' name='gender' value='f' ></p>
                <p>Other:<input type="radio" name="gender" value='o' ></p><br>
                <p style="display:inline">Captcha:</p><img src="../assets/php/captcha.php" alt="couldnt generate captacha">
                <input type="text" placeholder="Enter the captcha code here" name="chek">
                <input type='submit' id="submit" name="submit"><br>
                <a href="login.php">Already a user</a>
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
    require('footer.php');
    ?>
</html>