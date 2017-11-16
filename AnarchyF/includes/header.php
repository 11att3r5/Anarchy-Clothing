<div class="fixed">
  <nav class="tab-bar header">
    <div class="left-small">
      <a href="#" class="left-off-canvas-toggle menu-icon"><span></span></a>
    </div>
    <div class="middle tab-bar-section">
      <div id="logo">
        <a href="index.shtml"><img src="img/AnarchyLOGO_mini.jpg" alt="Anarchy Logo"></a>
      </div>
    </div>
    <div class= "right">
      <?php
      date_default_timezone_set("America/New_York");
  $t = date("H");

  if ($t < "10") {
      echo "Good morning";
  } elseif ($t < "18") {
      echo "Good afternoon";
  } else {
      echo "Good evening";
  }
  ?>
      <p id="welcome">
        
      </p>
    </div>
  </nav>
  <nav class="navbar tab-bar">
    <div class="middle tab-bar-section navsection">
      <ul class="pagenav">
        <li><a href="index.php">Home</a></li>
        <li><a href="new.php">New</a></li>
        <li><a href="guys.php">Guys</a></li>
        <li><a href="girls.php">Girls</a></li>
        <li><a href="specials.php">Specials</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
</div>