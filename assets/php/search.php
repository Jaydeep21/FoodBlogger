<?php
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
            width:200px;
            height: 140px;
            float:left;
            border:1px solid black;
        }
        .product{
            position: relative;
            left:230px;
        }
    </style>
    
</head>
<body>
    
    
    <?php
    include('connection.php');
    $url="http://localhost/FoodBlogger/modules/video.php";

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
        echo"<h1>You are searching for:".ucwords($ser)."</h1>";
        echo"<hr>";
        while($row=mysqli_fetch_assoc($result)){
            echo"<a href=".$url."?p_id=" . $row['id'] . "><img src=".$row['image']."></a>";
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>";
            echo"Uploaded by: ".$row['name'];
            echo"<br><br><br></div><hr>";
        }
    }
    }
    
    
    if(isset($_GET['cusinav'])){
        $cusinev=$_GET['cusinav'];
        $cusqry="select * from videos where cusine='$cusinev'";
        $result=mysqli_query($conn,$cusqry);
        if(!$result){
            echo"<script>alert('query error');</script>";
        }
        else{
            echo"<h1>".ucwords($cusinev)." Cusines</h1>";
            echo"<hr>";
            while($row=mysqli_fetch_assoc($result)){
            echo"<a href=".$url."?p_id=" . $row['id'] . "><img src=".$row['image']."></a>";
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>";
            echo"Uploaded by: ".$row['name'];
            echo"<br><br><br></div><hr>";
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
            echo"<h1>".ucwords($navval)."s</h1>";
            echo"<hr>";
            while($row=mysqli_fetch_assoc($result)){
                echo"<a href=".$url."?p_id=" . $row['id'] . "><img src=".$row['image']."></a>";
                echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
                <p><bold>Description:</bold>&ensp;".$row['description']."</p>";
                echo"Uploaded by: ".$row['name'];
                echo"<br><br><br></div><hr>";
             }
        }
    }
    ?>
</body>
</html>