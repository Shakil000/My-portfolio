
<!DOCTYPE html>
<html>
<head>
	<title>My Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet"> 
</head>
<body>
<header>
	<section class="navsection">
		<div class="logo">
			<h1>Shakil Hasan</h1>
			
		</div>
		<nav>
			<a href="index.php">Home</a>
			<a href="about.php">about</a>
			<a href="contact.php">contact</a>
			<a href="civic/Shakil Hasan.pdf" target="_blank">Download CV/Resume</a>
		</nav>

	</section>

<!-- Contact section start -->
	<section class="contact-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2">
					<div class="section-title">
						<h2>Contact Me</h2>
					</div>
					<form class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="E-mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
							</div>
						</div>
						<div class="text-md-right">
							<button  onclick="sendEmail()" value="Send An Email" class="site-btn">Send message</button>
							<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
							<script type="text/javascript">
								function sendEmail(){
									var name = $("name");
									var email = $("email");
									var password = $("password");
									var message = $("message");

									if(isNOTEmpty(name)&& isNOTEmpty(email)&&isNOTEmpty(Subject)&&isNOTEmpty(message)){
										$.ajax({
											url:'sendEmail.php';
											method:'POST';
											datatype:'shakil';
											data:{
												name:name.val(),
												email:email.val(),
												subject:subject.val(),
												message:message.val(),
											}success: function(response){
												$('#Contact Me')[0].reset();
												$('.sent-notification').text("Message Sent Successfully");
											}
										})
									}
								}
								function isNotEmpty(caller){
									if(caller.val() ==""){
										caller.css('border','1px solid red');
										return false;
									}
									else{
										caller.css('border','');
										return true;
									}
								}
							</script>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | RacEr Shakil made this template  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href=# target="_blank">Shakil</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>