<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Sign up</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function checkPassw(form){
            if(form.pass.value.length<8){
        alert("Password should be atleast 8 charcaters long");
        form.pass.focus();
        return false;
        }
    if(form.pass.value != form.cpass.value){
        alert("Passwords are not matching");
        form.cpass.focus();
        return false;
        }
                return true;
            }
        </script>
        
       
    </head>
	<body >
        
        <div class="loginbox" style="width: 320px;height: 400px;top:50%">
            <h1>Sign up</h1>
            <form action="../assets/php/signup2.php" method="post" onsubmit="return checkPassw(this)">
                <p>Password:</p>
                <input type='password' placeholder='Enter Password' id="pass" name="pass" required>
                <p>Confirm Password:</p>
                <input type='password' placeholder='Confirm Password' id="cpass" name="cpass" required>
                <input type='submit' id="subbtn" value="Sign Up">
            </form>
        </div>
        
    </body>
</html>