<?php
    session_start();
    include('../../modules/navbar.php');
?>
<html>
<head>
    <title>Result</title>
    <style>
        a{
            text-decoration: none;
        }
        body{
            display: block;
        }
        img
        {
            position: absolute;
            left:10px;
            width:190px;
            height: 130px;
            float:left;
            border:1px solid black;
        }
        .product{
            position: relative;
            left:220px;
        }
    </style>
    
</head>
<body>
    
    
    <?php
    include('connection.php');
    $url="http://localhost/FoodBlogger/modules/video.php";
    $urli="http://localhost/FoodBlogger/assets/img/";
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    
    if(isset($_GET['submit'])){
    
    $ser=$_GET['search'];
    $_SESSION['search']=$ser;
    
    $sear="select * from videos where dname LIKE '%$ser%'";
    $result=mysqli_query($conn,$sear);
    if(!mysqli_query($conn,$sear)){
        echo"no results found";
    }
    else{
        echo"<h2>You are searching for:".ucwords($ser);
        echo"<hr>";
        while($row=mysqli_fetch_assoc($result)){
            echo"<a href=".$url."?p_id=" . $row['id'] . "><img src=".$urli.$row['image']."></a>";
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>";
            echo"Uploaded by: ".$_SESSION['fname']." ".$_SESSION['lname'];
            echo"</div><hr>";
        }
    }
    }
    
    
    if(isset($_GET['cusinav'])){
        $cusinev=$_GET['cusinav'];
        $cusqry="select * from videos where cusine='$cusinev'";
        $result=mysqli_query($conn,$cusqry);
        if(!$result){
            echo"<script>alert query error</script>";
        }
        else{
            echo"<h1>".ucwords($cusinev)." Cusines</h1>";
            echo"<hr>";
            while($row=mysqli_fetch_assoc($result)){
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>
            </div><hr>";
        }
        }
    }
    if(isset($_REQUEST['navval'])){
        $navval=$_REQUEST['navval'];
        $navqry="select * from videos where course='$navval'";
        $result=mysqli_query($conn,$navqry);
        if(!$result){
            echo"<script>alert query error</script>";
        }
        else{
            while($row=mysqli_fetch_assoc($result)){
            echo "<h1>".ucwords($navval)." C</h1>";
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>
            </div><hr>";
        }
        }
    }
    ?>
</body>
</html>