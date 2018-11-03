<?php
    include('../../modules/navbar.php');
?>
<html>
<head>
    <title>Result</title>
    <style>
        
        body{
            display: block;
            overflow-x: hidden;
        }
        img
        {
            position: relative;
            left:10px;
            width:200px;
            height:140px;
            float:left;
            border:1px solid black;

        }
        .product{
            position: relative;
            left:20px;

        }
       
        @media only screen and (max-width: 700px){
            .product h1{
                font-size: 40px;
                left:0px;
                padding-left:25px; 
            }
            .product p{
                font-size: 20px;

            }
            img{
                width:300px;
                height:200px;
            }
            
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
            ?> <br> 
            <div class='product'><a style='text-decoration: none' href=<?php echo $url;?>?p_id=<?php echo  $row['id'];?>><img src=<?php echo $row['image'];?>><h1>&ensp;<?php echo $row['dname'];?></h1></a>
            <p><bold>&ensp;&ensp;&ensp;Description:</bold>
                <?php echo base64_decode($row['description']);?><br><br>
            &ensp;&ensp;&ensp;Uploaded by: <?php echo $row['name'];?>
            </p><br></div><hr><?php
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
            echo"<h1>".ucwords($cusinev)." Cuisines</h1>";
            echo"<hr>";
            while($row=mysqli_fetch_assoc($result)){
                ?>
           <div class='product'><a style='text-decoration: none' href=<?php echo $url;?>?p_id=<?php echo  $row['id'];?>><img src=<?php echo $row['image'];?>><h1>&ensp;<?php echo $row['dname'];?></h1></a>
            <p><bold>&ensp;&ensp;&ensp;Description:</bold>
                <?php echo base64_decode($row['description']);?><br><br>
            &ensp;&ensp;&ensp;Uploaded by: <?php echo $row['name'];?>
            </p><br></div><hr><?php
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
            while($row=mysqli_fetch_assoc($result)){?>
                <a style='text-decoration: none' href=<?php echo $url;?>?p_id=<?php echo $row['id']; ?>><img src=<?php echo $row['image'];?>></a>
                <div class='product'><a href=<?php echo $url;?>?p_id=<?php echo $row['id'];?>><h1><?php echo $row['dname'];?></h1></a>
                <p><bold>Description:</bold>&ensp;<?php 
                echo base64_decode($row['description']);?><br><br>
                Uploaded by: <?php echo $row['name'];?>
                </p></div><hr>
             <?php
             }
        }
    }
    ?>
</body>
</html>