<?php

    session_start();
    if(!isset($_SESSION['fname']){
        header('lcation:http://localhost/FoodBlogger/modules/login.php')
    }
    $dname=$_POST['dname'];
    $cusine=$_POST['cusine'];
    $course=$_POST['course'];
    $videol=$_POST['video'];
    $recepie=$_POST['recepie'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    
    $name=$_SESSION['fname']+" "+$_SESSION['lname'];

    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    $insert="insert into videos(dname,cusine,course,videol,recepie,description,image,name) values('$dname','$cusine','$course','$videol','$recepie','$description','$image','$name');";
    if(!mysqli_query($conn,$insert)){
        echo"Couldnt upload";
    }
    else{
        echo"Successfully Uploaded";
        header("Location: http://localhost/FoodBlogger/index.php");
    }
?>