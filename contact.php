<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amazing Nicadventures - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="packages/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootstrap/css/summernote.css">
	<link rel="stylesheet" type="text/css" href="packages/toastr/css/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootflat/css/bootflat.css">
	<link rel="stylesheet" type="text/css" href="packages/bxslider/bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link rel="icon" type="image/png" href="images/logo.png" /

	<!-- *** contacto *********  -->
	<link rel="stylesheet" type="text/css" href="css/contacto.css" />

  	<!-- <link rel="icon" type="image/png" href="img/icono.png" />
 -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="packages/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="packages/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="packages/bxslider/bxslider.min.js"></script>
	<script type="text/javascript" src="js/site.js"></script>

	<script type="text/javascript">
		toastr.options = {
		  "closeButton": false,
		  "debug": true,
		  "positionClass": "toast-top-right",
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
	</script>
</head>
<body>
	<img id="imageRotate1" class="rotate" src="images/rotate/Coyotepe_Masaya.png" alt="">
	<img id="imageRotate2" class="rotate" src="images/rotate/Ometepe_Lancha.png" alt="">
	<img id="imageRotate3" class="rotate" src="images/rotate/Edificios_Coloniales.png" alt="">

	<div id="x-top" class="row">
		<div class="col-md-3 col-xs-4">
			<a href="index.php"><img src="images/logo.png" style="max-width:80%;"/></a>
		</div>

	</div>

	<div id="navegacion-top" class="row">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="tours.php">Tours</a></li>
						<li class="activa"><a href="contact.php">Contact Us</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right iconos">
						<li><a target="_blank" href="https://www.facebook.com/AmazingNicaraguaAdventures"><i class="fa fa-facebook-square"></i></a></li>						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>


	<div class="row">
		<div class="col-md-6">
			<!-- **********************************************  -->
					<section id="container">
					<div class="container">
					<br style="clear:both;">
							<h4 style="text-align:left;">Contact Us</h4>
							<form name="efren-martinez" id="efren-martinez-form" method="post" action="">
							<div id="wrapping" class="clearfix">
								<section id="aligned">
								<input autocomplete="off"  required type="text" name="name" id="name" placeholder="Name" autocomplete="off" tabindex="1" class="txtinput">
								<input autocomplete="off"  required type="email" name="email" id="email" placeholder="E-mail" autocomplete="off" tabindex="2" class="txtinput">			
								<input autocomplete="off"  required type="tel" name="telephone" id="telephone" placeholder="Telephone" tabindex="4" class="txtinput" title="Allow only numbers" pattern="^[0-9]*$">
								<textarea autocomplete="off"  required name="message" id="message" placeholder="Message" tabindex="5" class="txtblock"></textarea>
								</section>
							</div>
							<section id="buttons">
								<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset">
								<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Send">
								<br style="clear:both;">
							</section>
							</form>
					        </div>
					</section> 
			<!-- **********************************************  -->
												    <?php
										if(isset($_POST['email'])) {
											$email_to = "efren_ps@yahoo.es";
											$email_subject = "Amazing Nicaragua Adventures has received a new message";
											function died($error) {
										        // Mensaje de error
												echo '<p style="text-align:center;color: red;font-weight: bold;"><BR>An error has occurred while send your message.</p>';
												//echo $error."<br /><br />";
												die();
											}
										    // validacion de campos
											if(!isset($_POST['name']) ||
												!isset($_POST['email']) ||
												!isset($_POST['telephone']) ||
												!isset($_POST['message'])) {
												died('An error has occurred while send your message.');       
										}
										    $name = $_POST['name']; // obligatorio
										    $email = $_POST['email']; // obligatorio
										    $telephone = $_POST['telephone']; // no obligatorio
										    $message = $_POST['message']; // obligatorio
										    $error_message = "";
										    $email_message = "Form details below.\n\n";
										    function clean_string($string) {
										    	$bad = array("content-type","bcc:","to:","cc:","href");
										    	return str_replace($bad,"",$string);
										    }
										    $email_message .= "Name: ".clean_string($name)."\n";
										    $email_message .= "Email: ".clean_string($email)."\n";
										    $email_message .= "Telephone: ".clean_string($telephone)."\n";
										    $email_message .= "Message: ".clean_string($message)."\n";
										// estructura del correo
										    $headers = 'From: '.$email."\r\n".
										    'Reply-To: '.$email."\r\n" .
										    'X-Mailer: PHP/' . phpversion();
										    @mail($email_to, $email_subject, $email_message, $headers);  

										     echo '
												<script type="text/javascript">
												   toastr.success("", "Message sent successfully!");

												   setTimeout(function(){location.reload();}, 4000);
												</script>';
										    ?>
										    <!-- incluimos nuestro mensaje de agradecimiento -->
										   
										    <!-- <p style="text-align:center;color: green;font-weight: bold;"><BR>Message sent successfully.</p> -->
										    	
										    <?php
										}
									?>
		</div>
		<div class="col-md-6">			
		</div>

	</div>

	<footer class="row" style="background-color:#14b1ff; color:white; padding:1%; margin-bottom:5px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="row" id="navegacion-bottom">
				<div class="col-md-3 item"><a href="index.php">Home</a></div>
				<div class="col-md-3 item"><a href="about.php">About Us</a></div>
				<div class="col-md-3 item"><a href="tours.php">Tours</a></div>
				<div class="col-md-3 item"><a href="contact.php">Contact Us</a></div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</footer>
</body>
</html>
