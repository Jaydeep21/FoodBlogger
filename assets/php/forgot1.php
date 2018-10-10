<?php
    session_start();
    $email=$_SESSION['email'];
    $password=$_POST['password'];

    include('connection.php');
    if(!$conn){
        $result="Connection error".mysqli_connect_error();
        echo $result;
    }
    $update="update signup set password='$password' where email='$email';";
    
    if(!mysqli_query($conn,$update)){
        $result="Opps something went wrong";
    }
    else{
        echo"<script>alert Successfully Changed</script>";
        header("Location: http://localhost/FoodBlogger/modules/login.php");
    }

?>