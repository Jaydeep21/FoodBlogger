    <html>
        <?php
            ob_start();
            include('navbar.php');
            if(!isset($_SESSION['emailid']))
            {

                header("location: http://localhost/FoodBlogger/modules/login.php");
            }

            include('../assets/php/connection.php');
            $pid = $_REQUEST['p_id'];
            $_SESSION['pid']=$pid;
        ?>
    <head>
        <title>Video</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                        var commentCount=2;
                        var commentCurrentCount = 0;
                        var commentid=<?php echo $pid; ?>;    
            $("#showmore").click(function(){
                commentCount=commentCount+2,
                commentCurrentCount=commentCurrentCount+2
                $(".comment").load("../assets/php/load-comments.php",{
                    commentnewCount:commentCount,
                    commentCurrentCount:commentCurrentCount,
                    commentid:commentid
                });
            });
        });
        </script>
        
    </head>
        <body>

            <div class="container-fluid">
                <br>
                <br>
                <?php
                    if(!$conn){
                        die('Connection Error'.mysqli_connect_error());
                    }
                        $qry="select * from videos where id='$pid'";
                        $result=mysqli_query($conn,$qry);
                        if(!$result){
                            echo"<script>alert('query error')</script>";
                        }
                        else{
                            foreach($result as $row){
                                echo"<div class='jumbotron'>";
                                echo"<h1>Video</h1>";
                                echo"<hr class='my-2'>";
                                echo"<video height=75% width=100% src=".preg_replace('/\s+/', '', $row['videol'])." controls></video>";
                                echo"</div>";
                                echo"<div class='jumbotron' id='recepie'>";
                                echo"<h1>Recipe</h1>";
                                echo"<hr class='my-2'>";
                                echo"<p class='text-center'>".base64_decode($row['recepie'])."</p>";
                                echo"</div>";
                                echo"<br><br>";
                                echo"<h1>".$row['dname']."</h1>";
                                echo"<br><br>";
                                echo"<div class='jumbotron'>
                                        <h1>Description</h1>
                                        <hr class='my-2'>
                                        <p class='text-center'>".base64_decode($row['description'])."</p>
                                    </div>";
                            }
                        }
                                echo"<br><br>";
                                echo"<div class='jumbotron'>
                                        <h1>Comments</h1>
                                        <hr class='my-2'>";

                                        $sql="select * from comments where p_id='$pid' limit 2";
                                        $result=mysqli_query($conn,$sql);
                                        if(mysqli_num_rows($result)>0){
                                            while($row=mysqli_fetch_assoc($result)){
                                                echo '<p  class="text-center">';
                                                echo base64_decode($row['comment']);
                                                echo '</p >';
                                                echo"<br>";
                                                echo"<h3 class='text-center'>-"; 
                                                echo $row['author'];
                                                echo"</h3><hr class='my-2'>";

                                            }

                                        }
                                        else{
                                            echo 'There are no comments';
                                        }

                        ?>

                            <p class="text-center comment"></p>
                            <a class='btn border-danger btn-lg text-danger float-right'  role='button' id="showmore">Show More Comments</a>
                            <br>
                            <br>
                            <br>
                            <form action="../assets/php/store-comments.php" method="post">
                                <div class='input-group'>
                                  <input type='text' class='form-control col-12' placeholder='Comment here' name="addcomment">
                                    <div class='input-group-append'>
                                        <button class='btn border-danger text-danger' type='submit'>Comment</button>
                                      </div>
                                </div>
                            </form>
            </div>
        </body>
    </html>