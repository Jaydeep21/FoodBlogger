<?php
session_start();
include('connection.php');
if(!$conn){
    echo"Connection Error";
}
$comment=base64_encode($_POST['addcomment']);
$author=$_SESSION['fname']." ".$_SESSION['lname'];
$p_id=$_SESSION['pid'];

$commentadd="insert into comments(comment,author,p_id) value('$comment','$author','$p_id')";
echo $commentadd;
if(!mysqli_query($conn,$commentadd)){
    echo "<script>alert('not inserted')</script>;";
}
else{
    header("location:http://localhost/FoodBlogger/modules/video.php?p_id=".$p_id);
}

?>