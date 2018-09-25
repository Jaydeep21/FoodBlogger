<?php
    session_start();
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['emailid'];
    $contact=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['emailid'] = $email;
    $_SESSION['phone'] = $contact;
    $_SESSION['dob'] = $dob;
    $_SESSION['gender'] = $gender;
    
    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
        }
    $SELECT="SELECT email FROM signup where email='$email' Limit 1 ";
            
        if(!mysqli_query($conn,$SELECT)){
            echo"Select query error";
        }
        else{
            if(mysqli_num_rows(mysqli_query($conn,$SELECT))>0){
                echo"Emailid is already taken";
            }
        
    else{
        header("Location: http://localhost/FoodBlogger/modules/signup1.php");
    }
        }
?>