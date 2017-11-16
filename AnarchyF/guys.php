<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
<title>Anarchy: Guys Apparel</title>
<?php include ('includes/Head.php'); ?>
</head>
<body onload="checkCookie()">
  <!-- body content goes here -->
  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <!--Toggle button-->
<?php include ('includes/header.php'); ?>
        <!--Offcanvas menu-->
<?php include ('includes/mobile_nav.php'); ?>
        <!--Main content-->
        <div class="content">
        <div class="row">
          <div class="medium-12 columns">
            <nav class="breadcrumbs" aria-label="breadcrumbs">
                <a href="index.shtml">Home</a>
                <a href="guys.shtml">Guys</a>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="medium-3 columns">
            <div class="row">
              <div class="medium-12 columns">
      <?php include ('includes/filter.php'); ?>
              </div>
            </div>
          </div>
          <div class="medium-9 columns">
            <div class="row">
              <div class="row">
                <div class="medium-12 columns">
                  <div id="Htopmain">
                    <hr>
                    <div id="Hloc">
                      <p>guys</p>
                    </div>
                  </div>
                </div>
              </div>
                <div class="medium-12 columns">
                  <!--MAIN-->
                  <ul class="large-block-grid-4">
                    <li><div data-apparel-desc='["black","20-29.99","shirt"]'><img src="img/guy2.jpg" alt="Black hoodie white sleeves"></div></li>
                    <li><div data-apparel-desc='["black","10-19.99","shirt"]'><img src="img/guy3.jpg" alt="No fluffs given white tee"></div></li>
                    <li><div data-apparel-desc='["black","10-19.99","shirt"]'><img src="img/guy6.jpg" alt="Kikis black cat black tee"></div></li>
                    <li><div data-apparel-desc='["black","10-19.99","shirt"]'><img src="img/guy7.jpg" alt="Sloth life"></div></li>
                    <li><div data-apparel-desc='["blue","10-19.99","shirt"]'><img src="img/guy8.jpg" alt="Blips and Chitz blue tee"></div></li>
                    <li><div data-apparel-desc='["red","under10","acc"]'><img src="img/acc4.jpg" alt="Chibi Deadpool necklace"></div></li>
                    <li><div data-apparel-desc='["blue","10-19.99","shirt"]'><img src="img/guy10.jpg" alt="Im mister meeseeks blue tee"></div></li>
                    <li><div data-apparel-desc='["red","10-19.99","shirt"]'><img src="img/guy11.jpg" alt="One peice red tee"></div></li>
                    <li><div data-apparel-desc='["green","10-19.99","shirt"]'><img src="img/guy13.jpg" alt="green sushi tee"></div></li>
                    <li><div data-apparel-desc='["green","10-19.99","shirt"]'><img src="img/guy14.jpg" alt="green triforce tee"></div></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!--toggle button-->
        <a class="exit-off-canvas"></a>
    </div>
    </div>
<!--FOOTER-->
<?php include ('includes/footer.php'); ?>
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>