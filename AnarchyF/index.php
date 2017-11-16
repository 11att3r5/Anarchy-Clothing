<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
   <title>Anarchy: Teen Wear!</title>
<?php include ('includes/Head.php'); ?>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/> 
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/li-scroller.css"/>
</head>
<body onload="checkCookie()">
  <!-- body content goes here -->
  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
<?php include ('includes/header.php'); ?>
        <!--Offcanvas menu-->
<?php include ('includes/mobile_nav.php'); ?>
        <!--Main content-->
        <div class="content">
        <div class="row">
          <div class="medium-12 columns">
            <!--MAIN-->
            <div class="row">
              <div class="medium-12 columns">
                <div id="Htopmain">
                  <hr>
                  <div id="Hloc">
                    <p>home</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div  id="Hmain" class="carousel">
                <div><img src="img/punkr2-2.jpg" alt="New Arrivals"></div>
                <div><a href="new.shtml"><img src="img/img2-31_mini.jpg" alt="New Arrivals"></a></div>
                <div><a href="girls.shtml"><img src="img/rebelg2-1_mini.jpg" alt="Girls Clothes and Accessories"></a></div>
                <div><a href="guys.shtml"><img src="img/guycar2-1_mini.jpg" alt="Specials"></a></div>
              </div>
              <div id="news-ticker">
                <ul id="demo">
                    <li>Don't forget your V-Day gifts!</li>
                    <li>All online purchases 20% off!</li>
                    <li>Check out more offers <a href="specials.shtml" id="newslink">here</a>!</li>
                </ul>
              </div>
              <script>
                $(function(){
                  $("ul#demo").liScroll({
                    travelocity: 0.09 // the speed of scrolling
                  });
                });
              </script>
            </div>
          </div>
        </div>
        <!--toggle button-->
        <a class="exit-off-canvas"></a>
    </div>
<!--FOOTER-->
<?php include ('includes/footer.php'); ?>
    </div>
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).foundation();
  </script>
      <!--Carousel-->
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script type="text/javascript" src="js/Carousel.js"></script>
  <!--News Scroller-->
  <script src="js/jquery.li-scroller.1.0.js"></script>
</body>
</html>