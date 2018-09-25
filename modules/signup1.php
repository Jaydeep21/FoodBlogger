<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Verification</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script >
            function otpCheck(form){
                if(form.otp.value=="1234"){
                    return true;
                }
                alert("Enter Correct OTP");
                return false;
            }
        </script>
       <?php
        include('navbar.php');
        include('footer.php');
        ?>
    </head>
	<body >
        
        <div class="loginbox" style="width: 400px;height: 380px;top:50%;">
            <h1>Sign up</h1>
            <form action="signup2.php" method="post" onsubmit="return otpCheck(this)">
                <p>Sent on Your Phone Number:&ensp;</p><p>XXXXXXXXXX</p>
                <br>
                <br>
                <p>Enter OTP:</p>
                <input type="text" placeholder="Enter OTP" name="otp" required>
                <input type='submit' id="subbtn" value="Next">
            </form>
        </div>
    </body>
</html>