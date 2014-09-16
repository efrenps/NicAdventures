<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amazing NicAdventures</title>
	<link rel="stylesheet" type="text/css" href="packages/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootstrap/css/summernote.css">
	<link rel="stylesheet" type="text/css" href="packages/toastr/css/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="packages/bootflat/css/bootflat.css">
	<link rel="stylesheet" type="text/css" href="packages/bxslider/bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="packages/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="packages/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="packages/bxslider/bxslider.min.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
</head>
<body>
	<div class="row" >
		<div class="col-md-3">
			<img src="images/logo.png" style="max-width:80%;" />
		</div>
	</div>

	<div id="navegacion-top" class="row">
		<!-- <div class="col-md-5 ">
			<div class="row">
				<div class="col-md-3 remove-padding" >Quienes Somos</div>
				<div class="col-md-3" >Eventos</div>
				<div class="col-md-3" >Destinos</div>
				<div class="col-md-3" >Contactenos</div>
			</div>			
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-3">redes sociales</div> -->
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
						<li class="activa"><a href="#">Quienes Somos</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="#">Destinos</a></li>
						<li><a href="#">Contactenos</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right iconos">
						<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	

	<div class="row ">
		<div class="col-md-12 remove-padding">
			<ul id="banner">
				<li><img src="images/anuncio01.jpg" /></li>
				<li><img src="images/anuncio02.jpg" /></li>	  
			</ul>
		</div>
	</div>

	<div class="row" id="paquetes">
		<div class="col-md-3">
			<label>GRANADA</label>
			<img title="Ofertas y Promociones" src='images/granada.jpg' class="img-responsive" alt="Responsive image" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam alias eum culpa, cupiditate id molestiae voluptatibus debitis, unde recusandae minus aliquam mollitia fugit, impedit rerum nulla vel dolores harum quidem!</p>
			 <br>
		</div>
		<div class="col-md-3">
			<label>OMETEPE</label>
			<img title="Ofertas y Promociones" src='images/granada.jpg' class="img-responsive" alt="Responsive image" />
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam alias eum culpa, cupiditate id molestiae voluptatibus debitis, unde recusandae minus aliquam mollitia fugit, impedit rerum nulla vel dolores harum quidem!</p>
			 <br>
		</div>
		<div class="col-md-3">
			<label>SAN JUAN DEL SUR</label>
			<img title="Ofertas y Promociones" src='images/granada.jpg' class="img-responsive" alt="Responsive image" />
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam alias eum culpa, cupiditate id molestiae voluptatibus debitis, unde recusandae minus aliquam mollitia fugit, impedit rerum nulla vel dolores harum quidem!</p>
			 <br>
		</div>
		<div class="col-md-3">
			<label>CIUDAD LEON</label>
			<img title="Ofertas y Promociones" src='images/granada.jpg' class="img-responsive" alt="Responsive image" />
			 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam alias eum culpa, cupiditate id molestiae voluptatibus debitis, unde recusandae minus aliquam mollitia fugit, impedit rerum nulla vel dolores harum quidem!</p>
			 <br>
		</div>
	</div>

	<footer class="row" style="background-color:#14b1ff; color:white; padding:1%; margin-bottom:5px;">
		Navegacion
	</footer>

	<script type="text/javascript">
		$("#banner").bxSlider({
		  auto: true,
		  //autoControls: true,
		  //adaptiveHeight: true,
		});
	</script>
</body>
</html>