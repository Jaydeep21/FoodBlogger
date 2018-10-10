<?php
ob_start();
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
        <div class="fullBackground"></div>
        <div class="loginbox" style="width: 320px;height: 730px;top:70%">
            <h1>Upload</h1>
            <form  action="../assets/php/upload.php" method="post" enctype='multipart/form-data'>
                <p>Name of the dish:</p>
                <input type="text" placeholder="Enter Name of the Dish" name="dname" required>
                <label for="Cusine">Select Cusine:</label>
                <select id="cusine" name="cusine" style="background:black;color:white">
                  <option name="Indian" value="Indian">Indian</option>
                  <option name="Chinese" value="Chinese">Chinese</option>
                  <option name="Italian"value="Italian">Italian</option>
                </select>
                <br>
                <br>
                <label for="course">Select Course:</label>
                <select id="course" name="course" style="background:black;color:white">
                  <option value="Starter">Starter</option>
                  <option value="MainCourse">Main Course</option>
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
            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['../assets/img/1.jpg','../assets/img/2.jpg','../assets/img/3.jpg','../assets/img/4.jpg','../assets/img/5.jpg','../assets/img/6.jpg','../assets/img/7.jpg','../assets/img/8.jpg','../assets/img/9.jpg','../assets/img/10.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
        </div>
        
    </body>
    <?php
    include('footer.php');

    ?>
</html>