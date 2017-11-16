 <meta charset="utf-8">
  <!-- Delete this meta tag and World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
  <meta name="author" content="Alexander Grimes">
  <meta name="robots" content="index">
  <!-- If you are using the CSS version, link these 2 files -->
  <!-- you may add app.css to use for your overrides if you like -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="js/vendor/modernizr.js"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
  <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
      document.write(decodeURI("%3Cscript src='jquery-1.11.2.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
  </script>
  <script>
      function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname+"="+cvalue+"; "+expires;
      }

      function getCookie(cname) {
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for(var i=0; i<ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1);
              if (c.indexOf(name) == 0) {
                  return c.substring(name.length, c.length);
              }
          }
          return "";
      }

      function checkCookie() {
          var user=getCookie("username");
          if (user != "") {
              document.getElementById("welcome").innerHTML = "Welcome to our site " + user + "!";
          } else {
             user = prompt("Please enter your name:","");
              document.getElementById("welcome").innerHTML = "Welcome back to our site " + user + "!";
             if (user != "" && user != null) {
                 setCookie("username", user, 30);
             }
          }
      }
    </script>