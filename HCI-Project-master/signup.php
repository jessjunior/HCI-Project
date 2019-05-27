<?php
if(isset($_POST['submit'])){
  include 'registration.php';
  //include 'connect.php';
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
<title>Sign Up</title>
</head>

<body>
<header>
<!-- Top navigation -->
	
    
    <div class="topnav">

	<!-- Centered link -->
		<div style="display:inline; float:left"><a href="index.html"><img style="display:inline;" src="logo.jpg" width="30px"; height="30px";><h5 style="display:inline">   Greign Estates</h5></a>
        
    </div>
        
        <div class="topnav-centered">
			<a href="index.php">Home</a>
			<a href="search.html">Search</a>
			<a href="news.html">News</a>
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
      <a href="login.php">Login</a>
		</div>
        </div>
</header>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
<div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="signup.php" method="POST" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required>
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.html" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            
                        </form>
                     </div>
			</div>
            </div></div></div>
</body>
</html>