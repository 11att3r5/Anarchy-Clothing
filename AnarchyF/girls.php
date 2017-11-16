<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
<title>Anarchy: Girls Apparel</title>
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
                <a href="girls.shtml">Girls</a>
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
                      <p>girls</p>
                    </div>
                  </div>
                </div>
              </div>
                <div class="medium-12 columns">
                  <!--MAIN-->
                  <ul class="large-block-grid-4">
                    <li><div data-apparel-desc='["black","10-19.99","shirt"]'><img src="img/ghibiGirl2.jpg" alt="Does Sports Anime Count black tee"></div></li>
                    <li><div data-apparel-desc='["white","10-19.99","shirt"]'><img src="img/GameGirl.jpg" alt="Multiplayer love white tee"></div></li>
                    <li><div data-apparel-desc='["white","10-19.99","shirt"]'><img src="img/ghibiGirl3.jpg" alt="Meow cat white tee"></div></li>
                    <li><div data-apparel-desc='["red","10-19.99","acc"]'><img src="img/DisG.jpg" alt="Ariel scarf"></div></li>
                    <li><div data-apparel-desc='["white","10-19.99","acc"]'><img src="img/acc3.jpg" alt="Red hair bow"></div></li>
                    <li><div data-apparel-desc='["black","10-19.99","shirt"]'><img src="img/Catgirl.jpg" alt="Cat moon phases"></div></li>
                    <li><div data-apparel-desc='["white","under10","acc"]'><img src="img/acc2.jpg" alt="Cat necklace"></div></li>                 
                  </ul>
                </div>
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
</body>
</html>
