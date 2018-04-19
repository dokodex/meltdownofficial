<!DOCTYPE HTML>

<html>

<head>
	<title>Meltdown</title>
  <link rel="shortcut icon" href="../img/logo/logo_mini.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script src="https://www.w3schools.com/lib/w3.js"></script>


    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <link rel="stylesheet" type="text/css" href="../css/tourdates.css">

</head>

<body>

	<?php include '../php/interface/interface.php'; ?>

	<div w3-include-html="header.html"></div>

	<div class="div_comming_shows">
		<br>
		<img class="img_shows center-block" alt="" src="../img/conciertos/eusk/proximos_conciertos_w.png"/>
		<table class="table comming_shows">
		  <thead>
		    <tr>
		      <th>Data</th>
		      <th>Hiria</th>
		      <th>Sala</th>
		      <th>Herrialdea</th>
		      <th>Taldeak</th>
		      <th>Ekitaldia</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php

			    tableComingShows();

		    ?>
		  </tbody>
		</table>
	</div>
	<br><br>
	<img class="img_shows center-block" alt="" src="../img/conciertos/eusk/conciertos_pasados.png"/>
	<table class="table past_shows">
	  <thead>
	    <tr>
		      <th>Data</th>
		      <th>Hiria</th>
		      <th>Sala</th>
		      <th>Herrialdea</th>
		      <th>Taldeak</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php

			    tablePastShows();

	    ?>
	  </tbody>
	</table>

<script>
w3.includeHTML();
</script>
</body>

</html>