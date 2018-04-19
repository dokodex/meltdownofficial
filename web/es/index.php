<!DOCTYPE HTML>

<html>

<head>
	<title>Meltdown</title>
  	<link rel="shortcut icon" href="../img/logo/logo_mini.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1" />

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

</head>

<body>

	<div w3-include-html="header.html"></div>

	<div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	        <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarouselCustom" data-slide-to="1"></li>
	        <li data-target="#myCarouselCustom" data-slide-to="2"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	        <div class="item active">
	            <img src="../img/slider/fuego.jpg" alt="">
	            <div class="carousel-caption">
	                <h3>"FROM THIS DAY TO THE GRAVE" YA DISPONIBLE</h3>
	                <a href="http://localhost/meltdown2.0/web/eng/store.html"><p>Haz click aquí para comprar el tuyo</p></a>
	            </div>
	        </div>
	  
	        <div class="item">
	            <img src="../img/slider/springtour.jpg" alt="">
	            <div class="carousel-caption">
	                <h3>FRANCE AND SWITZERLAND TOUR 2K18</h3>
	                <a href="http://localhost/meltdown2.0/web/es/tourdates.php"><p>Más fechas de gira...</p></a>
	            </div>
	        </div>
	        
	        <div class="item">
	            <img src="../img/slider/download.jpg" alt="">
	            <div class="carousel-caption">
	                <h3>DOWNLOAD FESTIVAL MADRID 2K18</h3>
	                <a href="http://localhost/meltdown2.0/web/es/tourdates.php"><p>Más fechas de gira...</p></a>
	            </div>
	        </div>
	    </div>

	</div>

	<script type="text/javascript">
		// Call carousel manually
		$('#myCarouselCustom').carousel();

		// Go to the previous item
		$("#prevBtn").click(function(){
		    $("#myCarouselCustom").carousel("prev");
		});
		// Go to the previous item
		$("#nextBtn").click(function(){
		    $("#myCarouselCustom").carousel("next");
		});
	</script>

	<style type="text/css">
  		.carousel-inner > .item > img {
    	margin: 0 auto;
		}

		html, body {
		height:100%;
		margin:0;
		padding:0;
		}
		.carousel, .item, .active {
		height:100%;
		}
		.carousel-inner {
		height:100%;
		}
		.carousel {
		margin-bottom: 60px;
		}
		.carousel-caption {
		z-index: 10;
		}
		.carousel .item {
		}
		.carousel .carousel-inner .bg {
		background-repeat:no-repeat;
		background-size:cover;
		}
		.carousel .carousel-inner .bg1 {
		background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/spiderweb.jpg');
		background-position: center top;
		}
		.carousel .carousel-inner .bg2 {
		background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg');
		background-position: center center;
		}
		.carousel .carousel-inner .bg3 {
		background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/woman-camera.jpg');
		background-position: center bottom;
		}
		.carousel img{
			width: 100%;
			height: 100%;
		}
	</style>



	<iframe class="videoinicio" width="100%" height="700" src="https://www.youtube.com/embed/mTP0VMNNMvA" frameborder="0" allowfullscreen>
	</iframe>

	<div class="div_comming_shows">

		<img class="img_comming_shows center-block" alt="" src="../img/conciertos/es/proximos_conciertos.png"/>

		<div class="comming_shows_container vcenter">
			
			<table class="table comming_shows">
			
			  <thead>
			    <tr>
			      <th>Fecha</th>
			      <th>Ciudad</th>
			      <th>Sala</th>
			      <th>País</th>
			      <th>Bandas</th>
			      <th>Evento</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php

			    	include '../php/interface/interface.php';
			    	tableComingShows();

			    ?>
			  </tbody>
			</table>
		</div>
	</div>

	<div class="booking container-fluid">
		<div class="col-md-6 col-sm-12 col-xs-12">
			<img class="logo_atlas center-block" alt="" src="../img/contact/mb.png"/>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<a href="https://www.facebook.com/atlasartistagency/" target="_new"><img class="logo_atlas center-block" alt="" src="../img/contact/atlas.png"/></a>
		</div>
	</div>


<script>
w3.includeHTML();
</script>


</body>

</html>