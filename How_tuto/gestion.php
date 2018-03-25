<!DOCTYPE html>
<html>
<head><!-- Required meta tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Formulaire</title>

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<!-- CSS links -->

	<link rel="stylesheet" type="text/css" href="css/gestion.css"/>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
	

	<!-- JQUERY links -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous">  	
	</script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
	  integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
	  crossorigin="anonymous">	  	
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<h1>Gestion de compte</h1>

		<div class="management">

			<div class="left_side">
				<div class="input_management">
					<input type="text" name="Pseudo" placeholder="Pseudo">
				
					<input type="text" name="Identifiant" placeholder="Identifiant">

					<input type="text" name="Password" placeholder="Mot de passe">

					<input type="button" name="Change" value="Changer le mot de passe">
					
				</div>
				

				<div class="social">
					<div class="input-group facebook">
						<input type="text" class="form-control" placeholder="Login with Facebook" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
					    	<button class="btn btn-outline-secondary" type="button">F</button>
					  	</div>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Login with Google" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
					    	<button class="btn btn-outline-secondary" type="button">G</button>
					  	</div>
					</div>
				</div>

				<div>
					<div class="input-group mb-3 notif">
						<input type="text" class="form-control" placeholder="Profil vérifié" aria-label="Profil vérifié" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
						</div>
					</div>
					<div class="input-group mb-3 notif">
						<input type="text" class="form-control" placeholder="Notifications" aria-label="Notifications" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
						</div>
					</div>
					<div class="input-group mb-3 notif">
						<input type="text" class="form-control" placeholder="Twitter Feed" aria-label="Twitter Feed" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button"><i class="fa fa-check" aria-hidden="true"></i></button>
						</div>
					</div>
					<div class="input-group mb-3 options">
						<div class="input-group-prepend">
							<button class="btn btn-outline-secondary" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
						</div>
						<input type="text" class="form-control" placeholder="Autres options" aria-label="Autres options" aria-describedby="basic-addon1">
					</div>
				</div>

			</div>

			<div class="right_side">
				<img src="img/profil.jpg">
				<input type="button" name="Change" value="Modifier la photo de profil">
				<textarea rows="4" placeholder="Description"></textarea>

				
			</div>

		</div>
	</div>

</body>
</html>

