<?php 
include('navbar.php');
?>
<html>
	<head>
		<title>Forgot</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function checkPass(form){
                if(form.pass.value.length<8){
                    alert("Password is too weak.It shoukd be atleast 8 characters long.");
                    form.pass.focus();
                    return false; 
                }
                if(form.pass.value!=form.cpass.value){
                    alert("Passowrds do not match");
                    form.pass.focus();
                    return false;
                }
                return true;
            }
        </script>
        
       
    </head>
	<body >
        <div class="fullBackground"></div>
        <div class="loginbox" style="width: 320px;height: 400px;top:50%">
            <h1>Set Password</h1>
            <form action="../assets/php/forgot1.php" method="post" onsubmit="return checkPass(this);">
                <p>Password:</p>
                <input type='password' placeholder='Enter Password' id="pass" name="password" required>
                <p>Confirm Password:</p>
                <input type='password' placeholder='Confirm Password' id="cpass" name="cpass" required>
                <input type='submit' id="subbtn" value="Sign Up">
            </form>
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/img/1.jpg','../assets/img/2.jpeg','../assets/img/2.jpg','../assets/img/3.jpg','../assets/img/4.jpg','../assets/img/5.jpg','../assets/img/6.jpg','../assets/img/7.jpg','../assets/img/8.jpg','../assets/img/9.jpg','../assets/img/10.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
        </div>
        
    </body>
</html>