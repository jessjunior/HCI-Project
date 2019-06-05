<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery-3.4.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<title>Home</title>
</head>
<body>
<header>
<!-- Top navigation -->
	
    
    <div class="topnav">

	<!-- Centered link -->
		<div style="display:inline; float:left"><a href="index.html"><img style="display:inline;" src="logo.jpg" width="30px" height="30px"><h5 style="display:inline">   Greign Estates</h5></a>
        
    </div>
        
        <div class="topnav-centered">
			<a href="index.php" class="active">Home</a>
			<a href="search.html">Search</a>
			<a href="news.html">News</a>
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
            <a href="../login.php">Login</a>
		</div>
        </div>
</header>

        
        
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      	<img src="img/slide1.jpg" class="d-block w-100" title="One-stop Property Agency" alt="One-stop Property Agency" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>One-stop Property Agency</h5>
          <p>Welcome to Greign Estates Ltd... </p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/slide2.jpg" class="d-block w-100" title="Luxurious Houses" alt="Luxurious Houses" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>Luxurious Houses</h5>
          <p>We have among the most luxurious properties located around Nairobi.</p>
        </div>
      </div>
      <div class="carousel-item">
      	<img src="img/slide3.jpg" class="d-block w-100" title="Easy to use website" alt="Easy to use website" width="1170px" height="400px" />
        
        <div class="carousel-caption d-none d-md-block">
          <h5>Easy to use website</h5>
          <p>We have made it extremely easy for you to search for your preferred property.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</body>
</html>
