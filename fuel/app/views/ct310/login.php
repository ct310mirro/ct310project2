
<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="NOVUS">
  <meta name="author" content="SAURAV">
  <title>Indiana</title>
  <meta name="description" content="Indiana Home page">
  <meta name="keywords" content="Indiana, Attraction, Indiana Attraction">
  <head>
  <!--<link rel="stylesheet" type="text/css" href="css/style.css"-->
  <?php echo Asset::css('style.css'); 
    ?>


<body>

<?php 
  
  if(isset($invalidLogin)){ ?>
 <div class="drop-down"><strong>Invalid Login</strong></div>
<?php } ?>

  <!-- Entire Section below Wallpaper (Excl. Footer) -->
  <section id="plain-background-login">
    <form id='login' action='checkLogin' method='POST' accept-charset='UT0-8'>
      <fieldset>
        <h1 class="webaccess center">WebAccess</h1>
        <input type='text' name='username' id='username'  maxlength='50' placeholder='username'>
        <input type='password' name='password' id='password' maxlength='50' placeholder='password'>
        <input type='submit' value='Log In' id='submit'>
        <p class="center"><?php echo Html::anchor('ct310', 'Back to Main Site', array('class' => 'white'));?></p>
        
      </fieldset>

    </form>

  </section>
  <div id="login-overlay"></div>
  <span class="caption-login">Image from <a href="http://www.1zoom.me/">1zoom.me</a></span>

</body>
</html>
