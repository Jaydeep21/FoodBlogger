<?php

    session_start();
    $random=$_SESSION['random'];
    $otp=$_POST['otp'];

    if($random!=$otp){
        $result="Wrong OTP";
        echo "$result";
    }
    else{
        header("Location: http://localhost/FoodBlogger/modules/forgot1.php");
    }

?>