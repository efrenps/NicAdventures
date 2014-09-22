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
	
	<div class="row" id="tours">
		<div class="col-md-4 col-xs-4" id="tours-picture">
			<img src="images/tours/Artesanias_Catarina01.png" class="img-responsive" alt="Tours"/>
			<img src="images/tours/Hiking_Volcal_Cerro_Negro02.png" class="img-responsive" alt="Tours"/>
			<img src="images/tours/23253.png" class="img-responsive" alt="Tours"/>
			<img src="images/tours/Isletas02.png" class="img-responsive" alt="Tours"/>
			<img src="images/tours/San_Juan_del_Sur01.png" class="img-responsive" alt="Tours"/>
		</div>
		<div class="col-md-8 col-xs-8" id="tours-info">

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
			        	The Mombacho volcano nature reserve it is an extinct volcano, the last eruption occurred in 1570. The highest regions of the volcano is home to a cloud forest and dward forest, the volcano has fantastic views of lake Nicaragua, the city of Granada and the isles of Granada.
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
			        Cerro Negro is an active volcano near Leon, its approximately 162 years old, the youngest volcano in Central America. Its last eruption was in 1999. Cerro Negro means “black hill”. The volcano is composed of black rocks, its slopes of black pebbles and gravel.
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
			        Granada was founded in 1524 by Francisco Hernandez de Cordoba ostensibly the first European city in mainland America. The city of Granada was not only the settlement of the conquest, but also a city registered in official records of the crown of Aragon, and the Kingdom of Castle in spain. Granada is also known as LA GRAN SULTANA, in reflection of its Moorish and Andalusian appearance.
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
			        	San Carlos is jungle, lake, river, art and history. This municipality has various attractions. Its center is the city of San Carlos, in which the visitor will find multiple places to visit. The los Guatuzos Natural reserve, situated nearby, is home to a great, diversity of plants, animals and insects. There are many tours you can take from San Carlos.
			        </p>
			        <p class="panel-text2">
			        	Transportation only to San Carlos (one way) 1-10 pax.  U$ 240.00 
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
			        	We will pick you up from your hotel at 8:30 am and head to the City of Catarina, an enchanting little town beautifully decorated with plants and flowers. Visitors looking for a few souvenirs to take home, will find the streets of Catarina to be lined with gift shops and stores, displaying their locally handcrafted pieces, pottery and baskets that are woven by the basket weavers of the village. Most visitors travel to Catarina for its lookout point, which is known as the Mirador Catarina. From here, the magnificence of the area covers the earth like a blanket, with panoramic views of the Mombacho Volcano, the Apoyo Lagoon, the Cocibolca Lake and even Granada can be seen from Mirador Catarina. There are benches to relax on while taking in the view and a restaurant that serves tasty meals to the hungry. Vendors and singers are also attracted to Mirador Catarina, because of it being such a popular tourist attraction. And if looking out over the landscape is not adventurous enough, visitors can also enjoy scenic horse trails, hike along one of the footpaths. Catarina is a magnificent destination in Nicaragua that will stun visitors with its natural beauty and charm them with the warm and friendly hospitality of the locals. After the city of Catarina we will head to the Mombacho Volcano Nature Reserve for an amazing tour of the volcano, which is home to a cloud forest and dwarf forest. The top of the volcano has fantastic views of Lake Nicaragua, the city of Granada and the Isles. We will then drop you off at your hotel. 
			        </p>
			        <p class="panel-text2">
			        	Tours starting at U$40.00 p/p, Duration 7 hrs., Departure 8:30 am/ min. 4 pax.
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
			        	We will pick you up from your hotel and head to Granada for a city tour and boat tour of the Granada Islets, These are a group of 365 small islands scattered about the Asese peninsula. The islets are of volcanic origin, they were formed when the Mombacho Volcano blew much of its cone into the lake thousands of years ago, thereby creating the archipelago. Most of islets are covered with vegetation and rich with bird life. Many of the islets are occupied. Some are privately owned and hold homes or vacation houses. Then we will head to Masaya Volcano for an incredible adventure, the main area of interest here is the massive Santiago crater that was been created between the Nindiri and Masaya volcanoes. Eruptions took place frequently during the 1900's until the crater eventually collapsed in 1985. The result is bellowing sulphurous gases and the sound of thunderous lava flows rocketing beneath the crater hole. The tour starts with a visit to the cross (La Cruz de Bobadilla) overlooking the volcano and the surroundings. Next you see the magnificent Green Parakeets that return to the volcano every night to roost. These birds have somehow become adapted to the sulphuric fumes expelled from the volcano and actually live within the crater. You also observe a large number of bats departing their caves, another great natural spectacle, then proceed to an underground tunnel that has been formed by streams of lava. Equipped with flashlight and helmet, you can enter the tunnel and observe the interesting rock formations. The trip ends with a visit to a viewpoint that provides the opportunity to look inside the crater mouth of the volcano, observing the glowing lava. We will then drof you off at your hotel. 
			        </p>
			        <p class="panel-text2">
			        	Tours starting at U$40.00 p/p, Duration 10 hrs. / Departure 9 am. 
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
			        	We will pick you up at your hotel and head to the beautiful city of San Juan del Sur a municipality and coastal town on the Pacific Ocean, in the Rivas department in south-west Nicaragua. It is located 140 kilometers (87 miles) south of Managua. San Juan del Sur is popular among surfers and is a vacation spot for many Nicaraguan families and foreign tourists. Its population is approximately 15,553, consisting largely of families engaged in fishing or the tourism industry and foreigners from the United States, Canada and Europe. San Juan del Sur, set aside a crescent-shaped bay, was a popular resting place for gold prospectors headed to California in the 1850s. Correspondingly, San Juan del Sur served as a hub for Cornelius Vanderbilt Lines. A statue of the Christ of the Mercy sits above town on the northern end of the bay. The town is near the site of the filming of Survivor: Nicaragua and Survivor: Redemption Island.[2] The seasons aired in 2010 and 2011 respectively. The upcoming Survivor season Survivor: San Juan del Sur will also be filmed there. After spending a few hours at San Juan del Sur we will then head to DA" Flying Frog Adventures for a canopy tour at 200 mts above sea level, from this point you will be able to enjoy the best views of the San Juan del Sur Bay and the Palermo Valley, which will leave you breathless and wanting more. There are 60 platforms for a total distance of 2.5 Kms. to the top of the ancient trees across the forest and down into the valley watching monkeys and listening to the tropical birds. After all these exitement we will take you back to your hotel. 
			        </p>
			        <p class="panel-text2">
			        	Tours starting at U$50.00 p/p / Duration 11 hrs. / Departure 8 am.
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
			        	We will pick you up from your hotel and head to Granada for a city tour, 
Granada is a city in western Nicaragua and the capital of the Granada Department. With an estimated population of 117,569 (2007),[1] it is Nicaragua's sixth most populous city. Granada is historically one of Nicaragua's most important cities, economically and politically. It has a rich colonial heritage, seen in its architecture and structure. Granada was founded in 1524 by Francisco Hernández de Córdoba, ostensibly the first European city in mainland America. Unlike other cities that claim the same distinction, the city of Granada was not only the settlement of the conquest, but also a city registered in official records of the Crown of Aragon, and the Kingdom of Castile in Spain. Granada is also known as La Gran Sultana, in reflection of its Moorish and Andalusian appearance, unlike its sister city of León and historical rival, which displays Castilian trends. It was named by Hernández de Córdoba after the ancient Spanish city of Granada. This was done in honor of the defeat of the last Moorish stronghold, which had been Spanish Granada, by the Catholic King and Queen of Spain. Granada, Nicaragua was historically the sister capital in Central America to Antigua, Guatemala. During the colonial period, Granada maintained a flourishing level of commerce with ports on the Atlantic Ocean, through Lake Nicaragua (a.k.a. Cocibolca) and the San Juan River. After the city tour of Granada we will take a tour of the Granada Islets, these are a group of 365 small islands scattered about the Asese peninsula. The islets are of volcanic origin, they were formed when the Mombacho Volcano blew much of its cone into the lake thousands of years ago, thereby creating the archipelago. Most of islets are covered with vegetation and rich with bird life. Many of the islets are occupied. Some are privately owned and hold homes or vacation houses.

			        </p>
			        <p class="panel-text2">
			        	Tours starting at U$35.00 p/p / Duration 7 hrs. / Departure 9 am.
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
						<li><span>Day 3:</span> Cerro Negro Volcano Tour (Sandboarding) .</li>
						<li><span>Day 4:</span> Momotombo Volcano tour and head back to Managua where you will viit Salvador Allende Port.</li>
						<li><span>Day 5:</span> Masaya Volcano night tour, then head to the city of Granada.</li>
						<li><span>Day 6:</span> Mombacho Volcano tour, then head back to Managua.</li>
						<li><span>Day 7:</span> Depart Nicaragua.</li>
			        </p>
			        <p class="panel-text2">
			        	Tour starting at U$998.50 p/p based on double occupancy (min.2 pax) / Includes: Hotel, breakfast, transportation, tour entrances, snacks. 
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
			        	Tour starting at U$915.75 p/p based on double occupancy (min. 2 pax) / Includes: Hotels, breakfast (execpt in Ometepe), transportation, tour entrances, Ometepe ferry, snacks. 
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
