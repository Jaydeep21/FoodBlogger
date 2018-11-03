<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
            <button class="navbar-toggler mx-auto" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon align-center"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/FoodBlogger/index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Cuisine<span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=indian">Indian</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=italian">Italian</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=chinese">Chinese</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Course<span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?navval=starter">Starter</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?navval=maincourse">Main Course</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?navval=desert">Desert</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/FoodBlogger/assets/php/search.php?navval=snacks">Snacks</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/FoodBlogger/modules/upload.php">Upload</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://localhost/FoodBlogger/index.php?#indexbox">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=http://localhost/FoodBlogger/contact.php?#indexbox>Contact Us</a>
                    </li>    
                </ul>
                <ul class="navbar-nav">
                <form class="navbar-form align-self-center" action="http://localhost/FoodBlogger/assets/php/search.php" method="GET">
                  <div class="input-group p-2">
                    <input type="texti" class="form-control" placeholder="Search" name="search" id="search">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="submit" name="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
            
                    
                    <?php if(isset($_SESSION['fname'])){
                        $user=new \stdClass();
                        $user->fname=$_SESSION['fname'];
                        $user->lname=$_SESSION['lname'];
                        $user->email=$_SESSION['emailid'];
                        $user->phone=$_SESSION['phone'];
                        $ename=JSON_encode($user->fname);
                        $ename=preg_replace('~"~','',$ename);
                    ?>
                    <li class="nav-item">
                        <span class="navbar-text m-2" id="nam"><?php echo "Hello ",$ename ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="http://localhost/FoodBlogger/modules/logout.php">Logout</a>
                    </li>
                    <?php } else{?>
                    <li class="nav-item"><a class="nav-link m-2"  href="http://localhost/FoodBlogger/modules/signup.php">Signup</a></li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="http://localhost/FoodBlogger/modules/login.php">Login</a> 
                    </li>
                    <?php }?>
                </ul>
            </div>    
        </nav>
    </body>
</html>