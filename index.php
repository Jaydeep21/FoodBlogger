
<html>
<head>
    <title> Food Blogger </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
    
    <style>
 body {
  overflow-x: hidden;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: #333;
         
}

.container {
  position: relative;
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
  color: #fff;
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
          width:150px;
          height:2px;
          background-color: ;
          margin-left:0;
      }
        .indexbox{
    width: 99vw;
    height: 101vh;
    background-color: black;
    color:white;
    top: 163%;
    left: 50%;
    opacity: .8;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    opacity: .6;
    font-family: 'Dancing Script', cursive;
    background-repeat: no-repeat;
    background-size: cover;
      }
        img{
        display:block;
        width:100vw;
        height:100vh;
        object-fit:cover;
        max-width: 99vw;
        overflow-x: hidden;
        opacity: .8;
    }
    </style>
    <script>
        var i=2;
        var imgurl = "http://localhost/FoodBlogger/assets/img/"
        document.getElementById("indexbox").onload = setInterval(function (){
            if(i==10){
                i=1;
            }
            i++;
            document.getElementById("back").src = imgurl + i + ".jpg";
        },2000);


    </script>
    
</head>
    <body>
        <div >
            <?php include('modules/navbar.php'); ?>
        </div>
        <div>
            <img src='../FoodBlogger/assets/img/pizza.png' >            
        </div>
         <div class="container menu-link" style="position: absolute;top:80%;left:50%">
          <a href="#indexbox" id="scroll"><div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
              <span class="text">Scroll down</span></a>
        </div>
        <div class="headingbox" style="position: absolute;top: 200px;left: 470px;"><center>
        <h1 style="font-size:100px;color:lightgrey;text-shadow: 2px 2px white;font-family: 'Pacifico', cursive;">Bhukkads</h1></center>
        </div>
    <img src="FoodBlogger/assets/img/1.jpg" id="back">
    <div class="indexbox" id="indexbox">
        
        <p>&ensp;<strong>W</strong>elcome to Bhukkads folks</p>
        <hr>
        <h1>About us</h1>
        <hr>
        <p>content for about us</p>
        <hr>
        <h1>Our team</h1>
        <hr>
        <p>fa</p>
    </div>
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
        
        
    </body>
</html>
