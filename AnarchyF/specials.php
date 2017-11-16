<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
<title>Anarchy: Specials!</title>
<?php include ('includes/Head.php'); ?>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/> 
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="li-scroller.css"/>
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
                <a href="specials.shtml">Specials</a>
            </nav>
          </div>
        </div>
        <div class="row">
            <div class="row">
              <div class="medium-12 columns">
                <div id="Htopmain">
                  <hr>
                  <div id="Hloc">
                    <p>specials</p>
                  </div>
                </div>
              </div>
            </div>
          <div class="medium-12 columns">
            <!--MAIN-->
          <div id="sp-add">
          </div>
          <table>
            <tr>
              <th colspan="2">30% OFF</th>
            </tr>
            <tr>
              <td class="price">$10.99</td>
              <td class="dealimg"><a href=""><div><img src="img/anarchytee2.jpg" alt="Anarchy shirt"></div></a></td>
            </tr>
          </table>
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