<html>
<head>
    <title></title>
    <style></style>
</head>
<body>
    
    
    <?php
    session_start();
    
    $ser=$_GET['search'];
    $_SESSION['search']=$ser;
        
    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
        
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
    
    if(isset($_GET['submit'])){
    
    $url="http://localhost/FoodBlogger/modules/video.php";
    $sear="select * from videos where dname LIKE '%$ser%'";
    $result=mysqli_query($conn,$sear);
    if(!mysqli_query($conn,$sear)){
        echo"no results found";
    }
    else{
        echo"<h2>You are searching for:".$ser;
        while($row=mysqli_fetch_assoc($result)){
            
            echo"<div class='product'><a href=".$url."?p_id=" . $row['id'] . "><h1>".$row['dname']."</h1></a>
            <p><bold>Description:</bold>&ensp;".$row['description']."</p>
            </div><hr>";
        }
    }
    }
    if(isset($_GET['navval'])){
        $cuis="select * from videos where cusine=''";
    }
    ?>
</body>
</html>