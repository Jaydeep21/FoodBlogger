<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bhukkads</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/FoodBlogger/index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cusine<span class="caret"></span></a>
      <ul class="dropdown-menu" style="background:black;">
      	<li><a href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=indian" style="color:white;">Indian</a></li>
        <li><a href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=chinese" style="color:white;">Chineese</a></li>
        <li><a href="http://localhost/FoodBlogger/assets/php/search.php?cusinav=italian" style="color:white;">Italian</a></li>
      </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>
      <ul class="dropdown-menu" style="background:black;">
      	<li><a href="http://localhost/FoodBlogger/assets/php/search.php?navval=starter" style="color:white;">Starter</a></li>
        <li><a href="http://localhost/FoodBlogger/assets/php/search.php?navval=maincourse" style="color:white;">Main Course</a></li>
        <li><a href="http://localhost/FoodBlogger/assets/php/search.php?navval=desert" style="color:white;">Desert</a></li>
        <li><a href="http://localhost/FoodBlogger/assets/php/search.php?navval=snacks" style="color:white;">Snacks</a></li>
      </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="http://localhost/FoodBlogger/modules/login.php">Login</a></li>
        <li><a href="http://localhost/FoodBlogger/modules/signup.php">SignUp</a></li>
    </ul>
    
    <form class="navbar-form navbar-right" action="http://localhost/FoodBlogger/assets/php/search.php" action="GET">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" id="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search" style="height:20px"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</body>
    
</html>