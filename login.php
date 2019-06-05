<?php
session_start();

include("connect.php");
if(isset($_POST['submit'])){
  
  if($_POST['email']=='' || $_POST['password']==''){
    echo "please fill the empty field.";
}else
  {
    $sql="SELECT email,password FROM `users` WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";
     $result = mysqli_query($con,$sql);
     print_r($result);
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         
         $_SESSION['email'] = $_POST['email'];
         echo "success";
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
  }
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
<title>Login</title>
 <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<header>
<!-- Top navigation -->
	<div style="display:inline; float:left"><a href="index.php"><img style="display:inline;" src="img/logo.jpg" width="150px" height="50px" ></a>
        
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
</header><div class="page-head"><h1>Login</h1></div>
						 </div>
<div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							
					</div>
                   <form action="login.php" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" required>
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" class=" btn btn-success">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="signup.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                 
				</div>
			</div>
			  
		</div>
      </div>  
      </div>
</body>
</html>
