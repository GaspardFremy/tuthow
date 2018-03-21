<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>TutHow - Connexion</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<!-- CSS link -->
	<link rel="stylesheet" href="./public/css/swiper.css">
	<link rel="stylesheet" href="./public/css/main.css">
	<link rel="stylesheet" href="./public/css/connexion.css">
	<link rel="stylesheet" href="./public/animate.min.css">

</head>

<body>
	<section class="login-box centered">
		<div class="container card">
			<div class="row justify-content-center">
				<div class="col-md-8 login-sec">
					<div class="logo-img text-center">
						<a href=""><img class="wobble" src="./public/img/logo.png"></a>
					</div>
					<ul id="tabsJustified" class="nav nav-tabs">
						<li class="nav-item"><a href="" data-target="#signin" data-toggle="tab" class="nav-link active">Connexion</a></li>
						<li class="nav-item"><a href="" data-target="#signup" data-toggle="tab" class="nav-link">S'enregistrer</a></li>
					</ul>
					<br>
					<div id="tabsJustifiedContent" class="tab-content">
						<div id="signin" class="tab-pane fade active show">
							<form class="login-form">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Identifiant">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Mot de passe">
								</div>

								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										<small>Se souvenir de moi</small>
									</label>
								</div>
								<button type="submit" class="btn btn-login col-lg-12">Connexion</button>
								<button type="button" class="btn btn-secondary">Connexion avec Facebook<img style="height: 15px; margin-left: 9px;" src="./public/img/facebook.png"></button>

								<button type="button" class="btn btn-secondary">Connexion avec Google<img style="height: 15px; margin-left: 9px;" src="./public/img/google.png"></button>
							</form>
						</div>
						<div id="signup" class="tab-pane fade">
							<form class="login-form">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Votre nom (ou pseudo)">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Mot de passe">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Confirmer le mot de passe">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Adresse email (iD)">
								</div>
								<button type="submit" class="btn btn-login col-lg-12">S'enregistrer</button>
								<button type="button" class="btn btn-secondary">Connexion avec Facebook<img style="height: 15px; margin-left: 9px;" src="./public/img/facebook.png"></button>

								<button type="button" class="btn btn-secondary">Connexion avec Google<img style="height: 15px; margin-left: 10px;" src="./public/img/google.png"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>


	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="./public/js/fontawesome-all.js"></script>
	<script src="./public/js/swiper.min.js"></script>
	<script src="./public/js/script.js"></script>
	<script src="./public/js/connexionswitch.js"></script>



	</html>
