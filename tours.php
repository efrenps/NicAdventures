<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amazing Nicadventures - Tours</title>
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
	<img id="imageRotate1" class="rotate" src="images/rotate/Coyotepe_Masaya.png" alt="">
	<img id="imageRotate2" class="rotate" src="images/rotate/Ometepe_Lancha.png" alt="">
	<img id="imageRotate3" class="rotate" src="images/rotate/Edificios_Coloniales.png" alt="">

	<div id="x-top" class="row">
		<div class="col-md-3 col-xs-4">
			<a href="index.php"><img src="images/logo.png" style="max-width:80%;"/></a>
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
						<li ><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li class="activa"><a href="tours.php">Tours</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right iconos">
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>						
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	

	<div class="row ">
		<div class="col-md-12 remove-padding">
			classic tours
		</div>
	</div>

	<div class="row" id="tours">
		<div class="col-md-4" id="tours-picture">
			<img src="images/anuncios/anuncio01.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio02.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio03.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio04.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio05.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio06.jpg" class="img-responsive" alt="Responsive image"/>
			<img src="images/anuncios/anuncio07.jpg" class="img-responsive" alt="Responsive image"/>
		</div>
		<div class="col-md-8" id="tours-info">

			<h2>Daily Tours</h2>
			
			<div class="panel-group" id="accordion">

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			          Managua
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in">
			      <div class="panel-body">
			      	<p class="panel-text1">Managua is the capital of Nicaragua, founded in 1819, declared the country’s 
				      	capital in 1852. After a major earthquake in 1972 it stopped being attractive for
				      	investors but after 40 years, the capital of Nicaragua has managed to establish
				      	itself in the third position in the foreing direct investment (FDI) strategy
				      	category of American cities of the future published in 2013-2014 by financial
				      	times.
			      	</p>
			      	<p class="panel-text2">Day tour starting at U$ 41.00 p/p (min.4 pax) Departure 9am / Duration 5hrs.
						Evening Tour starting at U$ 36.00 p/p (min.4 pax) Departure 5pm/Duration 4hrs.
					</p>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			          Masaya volcano
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Masaya volcano it has an area of 54 km2, includes 2 volcanoes and 5 craters, as well as a range of evelations between 100 and 630 meters above sea level;  it’s the only volcano in the western hemisphere where you are able to drive to the rim.
			        </p>
			        <p class="panel-text2">
			        	Day tour starting at U$ 25.00 p/p (min.4 pax) Departure 9am / Duration 4hrs.
Nigth Tours starting at U$ 35.00 p/p (min.6 pax) Departure 3pm/Duration 6hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			          The Mombacho volcano nature reserve
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	The Mombacho volcano nature reserve it is an extinct volcano, the last eruption occurred in 1570. The highest regions of the volcano is home to a cloud forest and deward forest, the volcano has fantastic views of lake Nicaragua, the city of Granada and the isles of Granada.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 37.00 p/p. Departure 9am / Duration 5hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
			          Cerro Negro Sandboarding
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFour" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        Cerro Negro is an active volcano near Leon, its approximately 162 years old, the youngest volcano in the Central America. Its last eruption was in 1999. Cerro Negro means “black hill”. The volcano is composed of blacks rock, its slopes of black pebbles and gravel.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 65.00 p/p. Departure 6am / Duration aprox. 8hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
			          Granada
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        Granada was founded in 1524 by Francisco Hernandez de Cordoba ostensibly the first European city in mainland America. The city of Granada was not only the settlement of the conquest, but also a city registered in official records of the crown of Aragon, and the kingdom of castile in spain. Granada is also known as LA GRAN SULTANA, in reflection of its Moorish and Andalusian appearance.
			        </p>
			        <p class="panel-text2">
			        Tour starting at U$ 30.00 p/p. Departure 9am / Duration aprox. 6hrs.	
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
			          Leon
			        </a>
			      </h4>
			    </div>
			    <div id="collapseSix" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Leon is the second largest city in Nicaragua, it was founded by the Spaniards as Leon Santiago de los Caballeros and rivals Granada, Nicaragua, in the number of historic Spanish colonial churches, secular buildings, and private residences.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 40.00 p/p. Departure 9am / Duration aprox. 8hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
			          San juan del Sur
			        </a>
			      </h4>
			    </div>
			    <div id="collapseSeven" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	San juan del Sur is a coastal town on the pacific ocean, it is located 87 miles south of Managua. San Juan del Sur is popular among surfers and is a vacation spot for many Nicaraguan Families and foreing tourists. San Juan del Sur was a popular resting place for gold prospectors headed to California in the 1850s.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 45.00 p/p. Departure 8am / Duration aprox. 9hrs.
			        </p>
			      </div>
			    </div>
			  </div>

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
			          San Carlos
			        </a>
			      </h4>
			    </div>
			    <div id="collapseEight" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	San Carlos is jungle, lake, river, art and history. This municipality has various attractions. Its center is the city of San Carlos, in which the visitor will find multiple places to visit. The los guatuzos Natural reserve, situated nearby, is home to a great, diversity of plants, animals and insect. There and many tours you can take from San Carlos.
			        </p>
			        <p class="panel-text2">
			        	Transportation to San Carlos (one way) 1-10 pax.  U$ 240.00 
			        </p>
			      </div>
			    </div>
			  </div>

			</div>

			<h2>Combo Tours</h2>

			<div class="panel-group" id="accordion2">

			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseNine">
			          City of Catarina And Mombacho Volcano
			        </a>
			      </h4>
			    </div>
			    <div id="collapseNine" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Pick up from hotel, head to the city of Catarina then Mombacho Volcano tour.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 40.00 / Departure 9:30 am / Duration 7hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTen">
			          Masaya Volcano night tour & Granada Isles
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTen" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Pick up from hotel, city of Granada Tour and boat ride in the Isles (Las Isletas) of Granada, then we head to Masaya Volcano for an impressive night tour.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 40.00 / Departure 9:30 am / Duration 10hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven">
			          San Juan del Sur & Canopy Tour
			        </a>
			      </h4>
			    </div>
			    <div id="collapseEleven" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Pick up from the hotel, head to the city of San Juan del Sur, then Take the canopy tour.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 50.00 / Departure 8 am / Duration 11hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve">
			          City Of Granada & Isletas ( The Isles)
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwelve" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	Pick up from hotel, arrive at Granada, tour of city of Granada, boat ride through Las Isletas.
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 35.00 / Departure 9 am / Duration 7hrs.
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen">
			          Volcano Route Tour (6 night / 7 days)
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThirteen" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	<li><span>Day 1:</span> Arrive in Nicaragua, head to city of Leon.</li>
						<li><span>Day 2:</span> San Cristobal Volcano Tour.</li>
						<li><span>Day 3:</span> Cerro Negro Volcano Tour.</li>
						<li><span>Day 4:</span> Momotombo Volcano Tour an head back to Managua.</li>
						<li><span>Day 5:</span> Masaya Volcano night tour, then head to the city of Granada.</li>
						<li><span>Day 6:</span> Mombacho Volcano tour, then head back to Managua.</li>
						<li><span>Day 7:</span> Depart Nicaragua.</li>
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 998.50 p.person based on double occupancy (min. 2 per).
			        </p>
			      </div>
			    </div>
			  </div>


			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFourteen">
			          Amazing Nicadventure tour
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFourteen" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p class="panel-text1">
			        	<li><span>Day 1:</span> Arrive in Nicaragua, stay in Managua, city tour depending on arrival time.</li>
						<li><span>Day 2:</span> City of Leon tour.</li>
						<li><span>Day 3:</span> Masaya Volcano tour and Catarina City tour, head to Granada for the night.</li>
						<li><span>Day 4:</span> Granada city tour. The Isles city tour (Las Isletas), then head to Ometepe Island on Ferry and spend the night.</li>
						<li><span>Day 5:</span> Ometepe (several tours to choose from in ometepe) Head to the city of San Juan del Sur and spend the night.</li>
						<li><span>Day 6:</span> Day in San Juan del Sur, depart at 6 pm, head back to Managua.</li>
						<li><span>Day 7:</span> Depart Nicaragua.</li>
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$ 915.75 p.person based on double occupancy (min. 2 per).
			        </p>
			      </div>
			    </div>
			  </div>

			</div>

			<h2>Other Package</h2>

			<div class="panel-group" id="accordion3">
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseFifhteen">
			          Dental Package
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFifhteen" class="panel-collapse collapse">
			      <div class="panel-body">
			      	<p>We can offer you many dental packages with one of the most respect clinics in managua,
			 Centro Dental de Especialidades, ask for your free dental check up and depending on
			  the treatment needed we will prepare a customized tour just for you, if you´re only 
			  interested in a dental treatment, we can offer up to 30% off with the clinic,
			   if you need more information about the clinic, 
			   please visit www.sonrisasespectaculares.com or Facebook as Centro Dental de
			    Especialidades.</p>
			      </div>
			    </div>
			  </div> 
			</div>			
			
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

	<script type="text/javascript">
		
	</script>
</body>
</html>
