<?php session_start(); ?>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../assets/js/script.js"></script>
        <?php
        include('navbar.php');
        ?>
       
    </head>
	<body >
        
        <div class="loginbox" style="width: 320px;height: 700px;top:70%">
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
                <input type='submit' id="subbtn">
            </form>
        </div>
        
    </body>
    <?php
    require('footer.php');
    ?>
</html>