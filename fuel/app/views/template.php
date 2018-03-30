<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title;?></title>

    <!-- Bootstrap core CSS -->

	<?php echo Asset::css('bootstrap.min.css'); ?>
    <!-- Custom styles for this template -->
  
	<?php echo Asset::css('style.css'); ?>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark  bg-dark fixed-top" style="background-color: #e3f2fd;" >
      <a class="navbar-brand" href="https://en.wikipedia.org/wiki/Kansas">KANSAS and INDIANA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/posts/index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts/aboutus">About us</a>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Attractions</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/posts/twine.php">Largest Ball of Twine</a>
              <a class="dropdown-item" href="/posts/zoo.php">Safari Zoological Park</a>
	      <a class="dropdown-item" href="/posts/gardenofeden.php">Garden of Eden</a>
	      <a class="dropdown-item" href="/posts/Indiana-Dunes.php">Indiana Dunes</a>
        <a class="dropdown-item" href="/posts/Eiteljorg-Museum-Of-American-Indians-And-Western-Art.php">Eiteljorg Museum</a>
        <a class="dropdown-item" href="/posts/Fort-Waynes-Children-Zoo.php">Fort Wayne's Children Zoo</a>
            </div>
          </li>
        </ul>
		<ul class="navbar-nav" style="float:right;">
          <li class="nav-item active">
		<?php
		$session = Session::instance(); 
		$username = $session->get('username');
		?>
         <?php if (isset($username)): ?>
			<a class="nav-link" href="/posts/logout">Logout<span class="sr-only">(current)</span></a>
		<?php else: ?>
			<a class="nav-link" href="/posts/login">Login<span class="sr-only">(current)</span></a>
							
		  <?php endif; ?> 
      </div>
    </nav>

    <main role="main" class="container">

      <div class="infocontainer">
      <h1><?php echo $title; ?></h1>
	
	<?php echo $content; ?> 
    </main><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<?php echo Asset::js('jquery-3.2.1.slim.min.js'); ?>
<?php echo Asset::js('popper.min.js'); ?>
<?php echo Asset::js('bootstrap.min.js'); ?>
  </body> 
<div class="footer" id ="footing">
<footer> This site is part of a CSU <a href="https://www.cs.colostate.edu/~ct310/yr2018sp/index.php">CT310</a> Course Project. </footer>
</div>
</html>
