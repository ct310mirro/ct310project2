
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="NOVUS">
  <meta name="author" content="SAURAV">
  <title>Indiana</title>
  <meta name="description" content="Indiana Home page">
  <meta name="keywords" content="Indiana, Attraction, Indiana Attraction">
  <?php echo Asset::css('style.css'); 
    ?>
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>

<body>
<?php 
if (null !== Session::get('userid')){ ?>
 <div class= 'drop-down'>Welcome <b><?php echo Session::get('username') ?></b> &nbsp; <a href="logout" class="logout"><button>Log Out</button></a></div>
<?php }?>
  <!-- Top section (above wallpaper) -->
  <div id="top">
    <div class="seal-caption">
    <?php echo Asset::img('INseal.png', array('id' => 'seal'))?>
      <!-- <img src="images/INseal.png" id="seal" alt="Indiana Seal" height="115" width="135"> -->
      <span class="acknowledgement-seal">Image from <a href="https://www.50states.com/">50states.com</a></span>
    </div>
    <!-- Header -->
    <header>INDIANA</header>
    <!-- Navigation menu -->
    <nav>
      <ul>
      <li> <?php echo Html::anchor('ct310', 'Home');?></li>
       <li> <?php echo Html::anchor('ct310/about', 'About Us');?></li>
       <li> <?php echo Html::anchor('ct310/indiana_dunes', 'Indiana Dunes');?></li>
       <li> <?php echo Html::anchor('ct310/eiteljorg_museum', 'Eiteljorg Museum');?></li>
       <li> <?php echo Html::anchor('ct310/fort_wayne_zoo', "Fort Wayne's Zoo");?></li>
        <!-- <li><a href="index.php">Home</a></li>
        <li><a href="About-Us.php">About Us</a></li>
        <li><a href="Indiana-Dunes.php">Indiana Dunes</a></li>
        <li><a href="Eiteljorg-Museum-Of-American-Indians-And-Western-Art.php">Eiteljorg Museum</a></li>
        <li><a href="Fort-Wayne-Childrens-Zoo.php">Fort Wayne Zoo</a></li> -->
        <!-- Login Link (disappears if logged in)-->
        <?php if (null === Session::get('userid')): ?><li><?php echo Html::anchor('ct310/login', "Login");?></li><?php endif;?>
      
      </ul>
    </nav>
  </div>
    <?=$content; ?> <!--shortcut for echo $content-->
     <!-- Footer Section -->
  <section id="footer-section">
    <h3>Explore Indiana</h3>
    <ul>
       <li> <?php echo Html::anchor('ct310', 'Home');?></li>
       <li> <?php echo Html::anchor('ct310/about', 'About Us');?></li>
       <li> <?php echo Html::anchor('ct310/indiana_dunes', 'Indiana Dunes');?></li>
       <li> <?php echo Html::anchor('ct310/eiteljorg_museum', 'Eiteljorg Museum');?></li>
       <li> <?php echo Html::anchor('ct310/fort_wayne_zoo', "Fort Wayne's Zoo");?></li>
      <!-- <li><a href="index.php">Home</a></li>
      <li><a href="About-Us.php">About Us</a></li>
      <li><a href="Indiana-Dunes.php">Indiana Dunes</a></li>
      <li><a href="Eiteljorg-Museum-Of-American-Indians-And-Western-Art.php">Eiteljorg Museum</a></li>
      <li><a href="Fort-Wayne-Childrens-Zoo.php">Fort Wayne Zoo</a></li> -->

      <!-- Login Link (disappears if logged in)-->
      <?php if (null === Session::get('userid')): ?><li><?php echo Html::anchor('ct310/login', "Login");?></li><?php endif;?>

    </ul>
    <div id="logo">
      <?php  echo Asset::img('logo.png', array('id' => 'stateLogo')) ?>
      <!-- <img src="images/logo.png" height="150" width="320" alt="state logo"> -->
      <span class="caption-logo">Image from <a href="https://visitindiana.com">visitindiana.com</a></span>
    </div>
    <div id="flag">
    <?php  echo Asset::img('flag.jpg', array('id' => 'stateFlag')) ?>
      <!--<img src="images/flag.jpg" height="150" width="300" alt="state flag"-->
      <span class="caption-flag">Image from <a href="http://www.1zoom.net/">1zoom.net</a></span>
    </div>
  </section>

  <!-- Footer -->
  <footer>This site is part of a CSU <a href="https://www.cs.colostate.edu/~ct310/">CT 310</a> Course Project</footer>
</body>
</html>
    
    