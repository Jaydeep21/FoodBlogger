<?php

include('navbar.php');
if(!isset($_SESSION['fname'])){
    header("location:http://localhost/FoodBlogger/modules/login.php");
}

?>
<html>
	<head>
		<title>Upload</title>
        <link rel="stylesheet" href="../assets/css/signup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../assets/js/upload.js"></script>
    </head>
	<body >
        
        <div class="loginbox" style="width: 320px;height: 730px;top:70%">
            <h1>Upload</h1>
            <form  action="../assets/php/upload.php" method="post" onsubmit="return validationUpload(this);">
                <p>Name of the dish:</p>
                <input type="text" placeholder="Enter Name of the Dish" name="dname" required>
                <label for="Cusine">Select Cusine:</label>
                <select id="cusine" name="cusine" style="background:black">
                  <option name="Indian" value="Indian">Indian</option>
                  <option name="Chinese" value="Chinese">Chinese</option>
                  <option name="Thai"value="Thai">Thai</option>
                </select>
                <br>
                <br>
                <label for="course">Select Course:</label>
                <select id="course" name="course" style="background:black">
                  <option value="Starter">Starter</option>
                  <option value="Main Course">Main Course</option>
                  <option value="Desert">Desert</option>
                  <option value="Snacks">Snacks</option>
                </select>
                <br>
                <br>
                <p>Select Video:</p>
                <input type="file" name="video" required>
                <br>
                
                <p>Cover Image:</p>
                <input type="file" name="image">
                <p>Recepie:</p>
                <textarea type="textarea" style="height: 70px;width:250px;text-allign:center;" placeholder="Enter your Recepie..." name="recepie" required></textarea>
                <br>
                <br>
                <p>Description:</p>
                <textarea type="text" style="height: 70px;width:250px;text-allign:center;" placeholder="Enter Description" name="description"></textarea>
                <br>
                <br>
                <input type="submit" value="Upload">
                <br>
            </form>
        </div>
        
    </body>
    <?php
    include('footer.php');

    ?>
</html>