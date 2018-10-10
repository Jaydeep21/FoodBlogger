<?php

    session_start();
    if(!isset($_SESSION['fname'])){
        header('location:http://localhost/FoodBlogger/modules/login.php');
    }
    $dname=$_POST['dname'];
    $cusine=$_POST['cusine'];
    $course=$_POST['course'];
    $video_name=preg_replace('/\s+/', '',$_FILES['video']['name']);
    $video_temp=preg_replace('/\s+/', '',$_FILES['video']['tmp_name']);
    $image_name=preg_replace('/\s+/', '',$_FILES['image']['name']);
    $image_temp=preg_replace('/\s+/', '',$_FILES['image']['tmp_name']);
    $rawrecipe=$_POST['recepie'];
    $rmvspace=str_replace(' ','&nbsp',$rawrecipe);
    $nxtline=nl2br($rmvspace);
    $recepie=base64_encode($nxtline);
    $description=base64_encode($_POST['description']);
    
    
    move_uploaded_file($video_temp,"../video/".$video_name);
    $videol="http://localhost/FoodBlogger/assets/video/$video_name";
    move_uploaded_file($image_temp,"../img/".$image_name);
    $imagel="http://localhost/FoodBlogger/assets/img/$image_name";
    $name=$_SESSION['fname']." ".$_SESSION['lname'];

    include('connection.php');
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    $insert="insert into videos(dname,cusine,course,videol,recepie,description,image,name) values('$dname','$cusine','$course','$videol','$recepie','$description','$imagel','$name');";
    echo $insert;
    if(!mysqli_query($conn,$insert)){
        echo"Couldnt upload";
    }
    else{
        echo"Successfully Uploaded";
        header("location:http://localhost/FoodBlogger/index.php");
    }
?>