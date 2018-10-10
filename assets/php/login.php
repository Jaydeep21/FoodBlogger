<?php
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];

    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    $search="select * from signup where email='$email' and password='$password';";
    $result=mysqli_query($conn,$search);
    if(!mysqli_query($conn,$search)){
        echo "Search query error";
    }
    else{
        if($row=mysqli_fetch_assoc($result)){
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['emailid']=$row['email'];
            $_SESSION['password']=$row['password'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['id']=$row['id'];
            
            header("Location: http://localhost/FoodBlogger/index.php");
        }
        else{
            echo"<script>alert('Invalid ID or password')</script>";
            header("location:http://localhost/FoodBlogger/modules/login.php");
        }
    }
?>