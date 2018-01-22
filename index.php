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

	<div class="container" style="margin-top: 2em;">
		<center>
			<i class="fa fa-pencil fa-3x" aria-hidden="true"></i>
		</center>
	</div>

	<div class="container-fluid">
		<form class="needs-validation" action="controllers/install.php" novalidate>
		  	<div class="form-row">
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip01" placeholder="Nom du site" name="nomSite" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
	    		</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip02" placeholder="BDD - Nom" name="dbName" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip06" placeholder="BDD - Username" name="dbUser" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="password" class="form-control" id="validationTooltip06" placeholder="BDD - Password" name="dbPass" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		    	<!--<div class="col-md-3 mb-3">
		      		<label for="validationTooltipUsername">Username</label>
		      		<div class="input-group">
		        		<div class="input-group-prepend">
		          			<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
		        		</div>
		        		<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
		        		<div class="invalid-tooltip">
		          			Please choose a unique and valid username.
		        		</div>
		      		</div>
		    	</div>-->
		  	</div>

		  	<div class="form-row">
		  		<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip02" placeholder="BDD - Nom" name="userAdmin" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="email" class="form-control" id="validationTooltip06" placeholder="BDD - Username" name="userEmail" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="password" class="form-control" id="validationTooltip06" placeholder="BDD - Password" name="userPassword" required>
		      		<div class="valid-tooltip">
		        		Looks good!
		      		</div>
		    	</div>
		  	</div>

		  	<div class="form-row">
		    	<div class="col-md-6 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip03" placeholder="City" name="langue" required>
		      		<div class="invalid-tooltip">
		        		Please provide a valid city.
		      		</div>
		    	</div>
		    	<!--<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip04" placeholder="State" name="email" required>
		      		<div class="invalid-tooltip">
		        		Please provide a valid state.
		      		</div>
		    	</div>
	    		<div class="col-md-3 mb-3">
		      		<label for="validationTooltip05">Zip</label>
		      		<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
		      		<div class="invalid-tooltip">
		        		Please provide a valid zip.
		      		</div>
		    	</div>
		    	<div class="col-md-3 mb-3">
		      		<input type="text" class="form-control" id="validationTooltip04" placeholder="State" name="email" required>
		      		<div class="invalid-tooltip">
		        		Please provide a valid state.
		      		</div>
		    	</div>-->
		  	</div>
		  	<div class="text-align: right;">
		  		<button class="btn btn-info" type="submit">Créer</button>
		  	</div>
		</form>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>