<?php
    $email=$_GET['email'];
    $password=$_GET['password'];

    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
        }
    $search="select * from signup where email='$email' and password='$password';";
    if(!mysqli_query($conn,$search)){
            echo"Search query error";
        }
        else{
            
                header("Location: http://localhost/FoodBlogger/index.php");
            }
        
?>