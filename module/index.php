<!DOCTYPE html>
<html>
<head>
	<title>WordPress - Installation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="font-family: 'Montserrat', sans-serif;">
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Wordpress - Installation
	  </a>
	</nav>

	<div class="container-fluid" style="height: 500px; background-image: url('wall2.jpg'); background-position: 50% 70%; text-align: center;">
		<h1 style="padding-top: 12%">Installer WordPress n'a jamais été aussi facile.</h1>
	</div>

	<div class="container" style="margin-top: 2em; margin-bottom: 2em;">
		<center>
			<i class="fa fa-pencil fa-3x" aria-hidden="true"></i>
		</center>
	</div>

	<div class="container-fluid">
		<form class="needs-validation" novalidate>
		  	<div class="form-row">
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip01" placeholder="Nom du site" name="nomSite" required>
	    		</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" placeholder="BDD - Nom" name="dbName" required>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" placeholder="BDD - Username" name="dbUser" required>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="password" class="form-control" placeholder="BDD - Password" name="dbPass" required>
		    	</div>
		  	</div>

		  	<div class="form-row">
		  		<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" placeholder="Admin - Nom" name="userAdmin" required>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="email" class="form-control" placeholder="Admin - Email" name="userEmail" required>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="password" class="form-control" placeholder="Admin - Password" name="userPassword" required>
		    	</div>
		    	<div class="col-md-3 mb-3" style="text-align: center">
		    		<input class="form-check-input" type="checkbox" name="enableWpDebug" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label">
				    	Enable WordPress Debug
				  	</label>
		    	</div>
		  	</div>

		  	<div class="form-row">
		  		<div class="col-md-2 mb-3" style="text-align: center;">
		  			<h6>Choix du thème</h6>
		  		</div>

		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="theme1" value="hestia.1.1.59" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label">
				    	Hestia
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" value="one-page-express.1.0.11" type="checkbox" name="theme2" id="defaultCheck2" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck2">
				    	One Page Express
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="theme3" id="defaultCheck3" value="shop-isle.1.1.38" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck3">
				    	Shop Isle
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="theme4" id="defaultCheck4" value="wallstreet.1.7.8" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck4">
				    	Wallstreet
				  	</label>
		    	</div>
		  	</div>

		  	<div class="form-row">
		  		<div class="col-md-2 mb-3" style="text-align: center;">
		  			<h6>Choix des plugins</h6>
		  		</div>

		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="plugin1" id="defaultCheck11" value="all-in-one-seo-pack" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck11">
				    	All In One SEO Pack
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="plugin2" id="defaultCheck12" value="contact-form-7" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck12">
				    	Contact Form 7
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="plugin3" id="defaultCheck13" value="wordfence" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck13">
				    	Wordfence
				  	</label>
		    	</div>
		    	<div class="col-md-2 mb-3">
		      		<input class="form-check-input" type="checkbox" name="plugin4" id="defaultCheck14" name="wp-super-cache" style="position: relative; margin: 0; margin-top: 0.7em;">
				  	<label class="form-check-label" for="defaultCheck14">
				    	WP Super Cache
				  	</label>
		    	</div>
		  	</div>

		  	<div style="text-align: center;">
		  		<button class="btn btn-info" type="submit" id="btnCreer">Créer</button>
		  	</div>
		</form>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$("#btnCreer").click(function(e) {
			e.preventDefault();
			var data = $("form").serialize();
			$.ajax({
		       url : "controllers/install.php",
		       type : 'POST', // Le type de la requête HTTP, ici devenu POST
		       data : data,
		       dataType : 'json',
		       success: function(result) {
		       	if (parseInt(result) == 1) {
		       		window.location.href = "/";
		       	}
		       }
			})
		});
	</script>
</body>
</html>