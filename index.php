<?php include('modules/navbar.php'); ?>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <style>
 
        body{
  overflow-x: hidden;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: #333;
         
}

.container {
  position: absolute;
  width: 24px;
  height: 24px;
}

.chevron {
  position: absolute;
  width: 28px;
  height: 8px;
  opacity: 0;
  transform: scale3d(0.5, 0.5, 0.5);
  animation: move 3s ease-out infinite;
}

.chevron:first-child {
  animation: move 3s ease-out 1s infinite;
}

.chevron:nth-child(2) {
  animation: move 3s ease-out 2s infinite;
}

.chevron:before,
.chevron:after {
  content: ' ';
  position: absolute;
  top: 0;
  height: 100%;
  width: 51%;
  background: #fff;
}

.chevron:before {
  left: 0;
  transform: skew(0deg, 30deg);
}

.chevron:after {
  right: 0;
  width: 50%;
  transform: skew(0deg, -30deg);
}

@keyframes move {
  25% {
    opacity: 1;

  }
  33% {
    opacity: 1;
    transform: translateY(30px);
  }
  67% {
    opacity: 1;
    transform: translateY(40px);
  }
  100% {
    opacity: 0;
    transform: translateY(55px) scale3d(0.5, 0.5, 0.5);
  }
}

.text {
  display: block;
  margin-top: 75px;
  margin-left: -30px;
  font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
  font-size: 12px;
  color: white;
  text-transform: uppercase;
  white-space: nowrap;
  opacity: .25;
  animation: pulse 2s linear alternate infinite;
}

@keyframes pulse {
  to {
    opacity: 1;
  }
        }
hr{
  width:200px;
  height:2px;
  background-color: white;
  margin-left:0;
}
.indexbox{
    width: 99vw;
    color: darkgrey;
    top: 157%;
    left: 50%;
    height: 100%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    font-family: 'K2D', sans-serif;
    background: black;
    opacity: .6;
    background-position: center;
    object-fit: cover;
    display: block;
      }
img{
    display:block;
    width:100vw;
    height:105vh;
    object-fit:cover;
    max-width: 99vw;
    overflow-x: hidden;
    opacity: .7;
}
.menu-link{
    position: absolute;
    top:80%;
    left:50%;
}
.fullBackground {
  background-position: center;
  background-size: cover;
  position: absolute;
  top: 107%;
    left: 0%;
  background-attachment: fixed;
  width: 100%;
  height: 100%; 
}
.indexbox h1{
    font-size: 50px;
}
.indexbox p{
    font-size: 27px;
}
.footer{
    position: absolute;
    top: 201%;
    width: 100%;
    background: black;
    color:white;
    opacity: .8;
    text-align: center;
}
.headingbox h1{
    position: absolute;
    top: 40%;
    left: 20%;
    font-size:200px;
    color:white;
    font-family: 'Pacifico', cursive;
    text-shadow: 4px 4px 4px black;
        }
@media only screen and (max-width: 1100px) {
     .headingbox h1{
        font-size:170px;
         left:16%;
    }
    
    
}
@media only screen and (max-width: 800px) {
     .headingbox h1{
        font-size:140px;
         left:12%;
    }
    .indexbox p{
        font-size: 20px; 
    }
}   
@media only screen and (max-width: 500px) {
     .headingbox h1{
        font-size:80px;
            left:10%;
    }
    .indexbox p{
        font-size: 17px; 
    }
    .menu-link{
        left: 50%;
    }
    
}  
@media only screen and (max-width: 370px) {
     .headingbox h1{
        font-size:70px;
         left: 5%;
    }
    .indexbox p{
        font-size: 12px;
        
    }
    .indexbox{
        left:50%;
    }
    .menu-link{
        left: 40%
    }
}  
</style>
</head>
    <body>
        <div>
            <img src='../FoodBlogger/assets/img/pizza.png' style="position: absolute;top:8%;">            
        </div>
         <div class="container menu-link">
          <a href="#indexbox" id="scroll"><div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
          <span class="text">Scroll down</span></a>
        </div>
        <div class="headingbox">
            <h1>Bhukkads</h1>
        </div>
        <div class="fullBackground"></div>
        <div class="indexbox" id="indexbox">
            <strong>
            <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Welcome to Bhukkads folks here you'll get all types of delicious food recipes which you will enjoy cooking and watching.So get ready for cooking and to bring smiles on people's faces.All the very best and keep cooking.</p>
            <br>
            <h1>About us</h1>
            <hr>
            <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;We provide a platform where people from different places connect together to share their recipies which can be useful for other peoples living in the other side of the globe.This can spread love and happiness within the globe and unite eveyone.Here you can upload a video with recipie attached to it so that the user finds it easy to look the video and recipe at the same time.Hope you enjoy cooking from <strong>Bhukkads</strong>.<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;You only need to login to upload and view recipes and enjoy as much as you can for free.Keep cooking and stay Bhukkad.</p>
            <br> 
            <!--<h1>Contact Us</h1>
            <hr>
                <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Phone No.:9820545321</p>-->    
            </strong>
        </div>
        <div class="footer">
            <p id="demo"></p>
        </div>    
        <script>
        var parser, xmlDoc;
        var text = "<details><Contact>" +
        "<where>Copyrights</where>" +
        "<what>©</what>" +
        "<name>Bhukkads</name>" +
        "</Contact></details>";

        parser = new DOMParser();
        xmlDoc = parser.parseFromString(text,"text/xml");

        document.getElementById("demo").innerHTML =
        xmlDoc.getElementsByTagName("where")[0].childNodes[0].nodeValue + " "+
            xmlDoc.getElementsByTagName("what")[0].childNodes[0].nodeValue + " "+
                xmlDoc.getElementsByTagName("name")[0].childNodes[0].nodeValue;
        </script>
        <script>
            // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
        </script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="modules/src/fullclip.js"></script>
             <script >
              $('.fullBackground').fullClip({
                    images:['assets/img/1.jpg','assets/img/2.jpeg','assets/img/2.jpg','assets/img/3.jpg','assets/img/4.jpg','assets/img/5.jpg','assets/img/6.jpg','assets/img/7.jpg','assets/img/8.jpg','assets/img/9.jpg','assets/img/10.jpg'],
                    transitionTime:2000,
                    wait:5000
                });  

            </script>
        
    </body>
</html>