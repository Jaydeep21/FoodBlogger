<?php
        include('navbar.php');
        if(!isset($_SESSION['emailid']))
        {
            header("location: http://localhost/FoodBlogger/modules/login.php");
        }
        
        include('../assets/php/connection.php');
        $pid = $_REQUEST['p_id'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      hr{
          width:150px;
          height:2px;
          background-color: black;
          margin-left:0;
      }
      video{
          position: absolute;
          top:20%;
          left:10%;
          height: 500px;
          width :700px;
      }
      .recipiebox{
    width: 30%;
    height: 75%;
    background: black;
    color:white;
    top: 58%;
    left: 80%;
    opacity: .8;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 50px 30px;
    opacity: .7;
      }
      .descriptionbox,.commentsbox{
          width: 1150px;
    height: 250px;
    background: black;
    color:white;
    left: 53%;
    opacity: .8;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 20px 30px;
    opacity: .7;
      }
.iconbox{
          position: absolute;
          top:110%;
          left:10%;
          font-size: 40px;
      }
.glyphicon-thumbs-up:hover,.glyphicon-thumbs-down:hover{
          color: blue;
          cursor:pointer;
          
      }
.commentsbox input[type="textarea"]{
          border:none;
        border-bottom: 1px solid white;
        background: transparent;
        outline: none;
        height:40px;
        color: white;
        font-size: 16px;
        width: 100%;
      }
.commentsbox input[type="submit"]
{
    width: 25%;
    border:none;
    border-radius: 20px;
    outline:none;
    height: 40px;
    background: red;
    color: white;
    float:right;
    font-size: 18px;
}
.commentsbox input[type="submit"]:hover{
    cursor: pointer;
    background: yellow;
    color:black;
}
      .heading{
          position:fixed;
          display:block;
          
      }
    </style>
    <script>
    
    function likeFunction(){
        document.getElementById("like").style.color="blue";
        document.getElementById("dislike").style.color="black";
    }
    function dislikeFunction(){
        document.getElementById("dislike").style.color="blue";
        document.getElementById("like").style.color="black";
    }
    $(document).ready(function(){
                      var commentCount=2;
        $(".showmore").click(function(){
            commentCount=commentCount+2;
            $(".comment").load("../assets/php/load-comments.php",{
                commentnewCount:commentCount
            });
        });
    });
           

        
    </script>
    
</head>
    <body>
                
        <?php
        
    $url="http://localhost/FoodBlogger/assets/video/";
    
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
    }
        $qry="select * from videos where id='$pid'";
        $result=mysqli_query($conn,$qry);
        if(!$result){
            echo"<script>alert query error</script>";
        }
        else{
            foreach($result as $row){
        echo"<div>
            <video height=500px width=500px src=".$url,$row['videol']." controls></video>
            </div>";
        echo"<div class=recipiebox>
            <h1>Recipie</h1>
            <hr>
            <p>".$row['recepie']."</p>
            </div>";
        echo"<div class=heading>
            <h1>".$row['dname']."</h1></div>";
        ?>
        <div class="iconbox">
        <i class="glyphicon glyphicon-thumbs-up" onclick="return likeFunction(this);" id="like"></i>&ensp;&ensp;
        <i class="glyphicon glyphicon-thumbs-down" onclick="return dislikeFunction(this);" id="dislike"></i>&ensp;&ensp;
        </div>
        <?php
        
            echo"<div class=descriptionbox style=top:145%;>
            <h1>Desctiption</h1>
            <hr>
            <i class=glyphicon glyphicon-chevron-down style=position: absolute;
          top:80%;
          left:95%;></i>
            
            <p class=desc>".$row['description']."</p>
        </div>";
            }
        }
        ?>
        
        <div class="commentsbox" style="top:225%;height:700px">
            <h1>Comments</h1>
            <hr>
            <?php
            
                $sql="select * from comments limit 2";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo"<p>";
                        echo $row['comment'];
                        echo"<br>";
                        echo $row['author'];
                        echo"</p>";
                    }
                    
                }
                else{
                    echo"There are no comments";
                }
            
            ?>
            <p class="comment"></p>
            <input type="submit" class="showmore" value="Show More Comments">
            <br><br>
            
            <input type="textarea" placeholder="Comment here" class="cmtarea">
            <br><br>
            <input type="submit" name="addcomment" class="addcomment" value="Submit" >
            
        </div>
                
    </body>
    <?php
        include('footer.php');
    ?>
    
</html>
<!--$(".addcomment").click(function(){
    alert("working");
    var comment=$('cmtarea').val();
    var author=$_SESSION['fname']+" "+$_SESSION['lname'];
    var pid=<?php $pid ?>;
    if(comment!=''){
        $.ajax({
            url:"../assets/php/store-comments.php",
            method:"POST",
            data:{comment:comment,author:author,pid:pid},
        });
    }
    }

);-->
