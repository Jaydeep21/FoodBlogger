<?php
    $dname=$_POST['dname'];
    $cusine=$_POST['cusine'];
    $course=$_POST['course'];
    $videol=$_POST['video'];
    $recepie=$_POST['recepie'];
    $description=$_POST['description'];

    $url="http://localhost/FoodBlogger/assets/videos/$name";

    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    $insert="insert into videos(dname,cusine,course,videol,recepie,description) values('$dname','$cusine','$course','$videol','$recepie','$description');";

    if(!mysqli_query($conn,$insert)){
        echo"Couldnt upload";
    }
    else{
        echo"Successfully Uploaded";
        header("Location: http://localhost/FoodBlogger/index.php");
    }
?>