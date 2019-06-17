<?php
include_once 'DBConnector.php';
include_once 'user.php';

   $con= new DBConnector; //Connect to database
   if (isset ($_POST['btn-login'])){
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	   $instance=User::create();
	   $instance->setPassword($password);
	   $instance->setEmail($email);
	   

	   if ($instance->isPasswordCorrect()){
		   $instance->login();
		   //close database connection
		   $con->closeDatabase();
		   //next create a user session
		   $instance->createUserSession();
	   }
	   
	   else{
		   echo "Wrong Email/password";
		   $con->closeDatabase();
		   //header("Location:login.php");
	   }
	   
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
  	<script type= "text/javascript" src="validate.js"></script>
	<link rel="stylesheet" type= "text/css" href="validate.css">
<title>Home</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<header>
<!-- Top navigation -->
	<div style="display:inline; float:left"><a href="index.php"><img src="img/logo.jpg" width="150px" height="50px"></a>
        
    </div>
    
    <div class="topnav">

	<!-- Centered link -->
		
        
        <div class="topnav-centered">
			<a href="index.php" >Home</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php" >Contact</a>
            <a href="login.php" class="active">Login</a>
		</div>
        </div>
</header>

                         <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Enter Your Login Details / Sign in </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
		
        <!-- register-area -->
		
        <div class="register-area" style="">
           
           <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form method="post" name="login" id="login" action="<?=$_SERVER['PHP_SELF']?>">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" required/>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" required/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="btn-login" class="btn btn-success"><strong>Log in</strong></button>
                                </div>
								                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
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
                            <br>
                            
                           
                        </div>
                        
                    </div>
                </div>
                
                
                
                    </div>
            
        </div>
		
</body>
</html>
