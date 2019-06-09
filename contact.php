<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery-3.4.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<title>Home</title>

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
			<a href="index.php" >Home</a>
			<a href="search.php">Search</a>
			<a href="news.php">News</a>
			<a href="about.php">About</a>
			<a href="contact.php" class="active">Contact</a>
            <a href="login.php">Login</a>
		</div>
        </div>
</header>


<div class="page-head">
		<h1 style="text-align:center; padding-top:30px;">
				Contact Us		</h1>
			
	</div>
    
    
<div style="text-align:right; display:inline;" class="container">
					
						
 		
					<h3>Contact</h3>	
	
	
	<dl class="contact-address dl-horizontal">
						
		
					<dd>
				<span class="contact-street">
					1st Floor, Suite 23,
Chester House, Koinange Street
<br/>				</span>
			</dd>
		
									<dd>
				<span class="contact-postcode">
					P.O. Box 70915, 00400 Nairobi, Kenya<br/>				</span>
			</dd>
					

	
	<dd>
		<span class="contact-telephone">
			Tel: +254 20 2230682, 2217348		</span>
	</dd>
	
	<dd>
		<span class="contact-mobile">
			 0722289881, 0727769694, 0722456015		</span>
	</dd>
	<dt>
		<span class="jicons-icons" >
		</span>
	</dt>
	<dd>
		<span class="contact-webpage">
			<a href="http://www.greignestates.com" target="_blank">
			http://www.greignestates.com</a>
		</span>
	</dd>
</dl>
</div>
	
		<div style="display:inline;" class="container">
	
									<h3>Contact Form</h3>		
		

	<form id="contact-form" action="/index.php/contactus" method="post" class="form-validate form-horizontal">
		<fieldset>
			<legend>Send an email. All fields with an * are required.</legend>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_name-lbl" for="jform_contact_name" class="hasTip required" title="Name::Your name">Name<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="text" name="jform[contact_name]" placeholder="Name" id="jform_contact_name" value="" class="required" size="30" required="required" aria-required="true"/></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_email-lbl" for="jform_contact_email" class="hasTip required" title="Email::Email for contact">Email<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="text" name="jform[contact_email]" class="validate-email required" id="jform_contact_email" placeholder="Email Address" value="" size="30" required="required" aria-required="true"/></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="hasTip required" title="Subject::Enter the subject of your message here .">Subject<span class="star">&#160;*</span></label></div>
				<div class="controls"><input type="text" name="jform[contact_subject]" id="jform_contact_emailmsg" placeholder="Subject" value="" class="required" size="60" required="required" aria-required="true"/></div>
			</div>
			<div class="control-group">
				<div class="control-label"><label id="jform_contact_message-lbl" for="jform_contact_message" class="hasTip required" title="Message::Enter your message here.">Message<span class="star">&#160;*</span></label></div>
				<div class="controls"><textarea name="jform[contact_message]" id="jform_contact_message" cols="50" rows="10" class="required" required="required" aria-required="true"></textarea></div>
			</div>
																																				<div class="control-group">
															<div class="controls">
																	</div>
													</div>
															<div class="form-actions"><button class="btn btn-primary validate" type="submit">Send Email</button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="" />
				<input type="hidden" name="id" value="1:contact-us" />
				<input type="hidden" name="4ff162808d7a526e88fd954efdcea9b5" value="1" />			</div>
		</fieldset>
	</form>
</div>
</div>


</body>
</html>