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
	<link rel="stylesheet" type="text/css" href="HCI-Project-master/css/main.css">
    <link rel="stylesheet" href="HCI-Project-master/css/bootstrap.min.css">
  <script src="HCI-Project-master/jquery/jquery-3.4.0.min.js"></script>
  <script src="HCI-Project-master/js/bootstrap.min.js"></script>
<title>Sign Up</title>
 <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<header>
<!-- Top navigation -->
	
    <div style="display:inline; float:left"><a href="index.php"><img style="display:inline;" src="img/logo.jpg" width="150px" height="50px"></a>
        
    </div>
    <div class="topnav">

	<!-- Centered link -->
		
        
        <div class="topnav-centered">
			<a href="index.php">Home</a>
			<a href="search.php">Search</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php">Contact</a>
      <a href="login.php" class="active">Login</a>
		</div>
        </div>
</header><div class="page-head"><h1 >Signup</h1></div>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
<div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              
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
                              <button type="submit" name="submit" class=" btn btn-success">Get Started For Free</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.php" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            
                        </form>
                     </div>
			</div>
            </div></div></div>
</body>
</html>
