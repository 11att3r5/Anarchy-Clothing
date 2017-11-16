<?php 
if(isset($_POST['submit'])){
    $to = "lxgrms@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['text'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="en" >
<head>
   <title>Anarchy: Teen Wear!</title>
<!--#include  file="includes/Head.inc" -->
</head>
<body onload="checkCookie()">
  <!-- body content goes here -->
  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
<!--#include  file="includes/header.inc" -->
        <!--Offcanvas menu-->
<!--#include file ="includes/mobile-nav.inc" -->
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
                    <p>Contact</p>
                    <div id="svg">
                      <svg viewbox = "0 0 8 8">
                        <use xlink:href= "anarchy.svg"></use>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-wrap">
                <form action="" method="post">
                  <label>First Name:</label> <input type="text" name="firstname">
                  <label>Last Name:</label> <input type="text" name="lastname">
                  <label>E-Mail:</label> <input type="text" name="email">
                   <label>Subject:</label> <input type="text" name="subject">
                  <label>Ask us anything:</label> <textarea name="text"></textarea>
                  <input type="submit" name="submit" value="Send email">
                </form>
              </div>
            </div>
            <div class="directory">
              <a href="directory.xml">Directories</a>
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
<!--#include  file="includes/footer.inc" -->
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>