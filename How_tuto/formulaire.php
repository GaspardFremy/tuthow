<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Formulaire</title>

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<!-- CSS links -->

	<link rel="stylesheet" type="text/css" href="css/form.css"/>
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
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="false">
				<form action="" method="POST">

					<div class="create_tuto ">

						<h1>Créer ton Tuto</h1>
							<input type="text" name="titre" placeholder="Titre">

							<textarea rows="5" placeholder="Introduction" name="intro"></textarea>

							<label for="file" class="input_label">
								<i class="fa fa-upload" aria-hidden="true"></i>
								<span id="label_span">Select a file to upload</span> 
							</label>
							<input id="file" type="file" name="fichier" multiple="true">

							<textarea rows="10" placeholder="Votre texte ici ..."></textarea>
					</div>
				</form>
			</div>

			<div class="carousel-item" data-interval="false">
				<form action="" method="POST">
					<div class="create_tuto ">
						<div class="form-group">
					    	<label for="exampleInputEmail1">Matériel Necessaire</label>

					    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Texte ici...">

					    	<small id="emailHelp" class="form-text text-muted">Appuyer sur le bouton pour ajouter des éléments.</small>
						</div>
					
						<div class="form-group">
						    <label for="exampleInputEmail1">Crédits</label>

						    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Nom/Prénom/Pseudo">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
						    	<label class="input-group-text" for="inputGroupSelect01">Difficulté</label>
						  	</div>
						  	<select class="custom-select" id="inputGroupSelect01">
							    <option selected>Niveau...</option>
							    <option value="1">Facile</option>
							    <option value="2">Normal</option>
							    <option value="3">Difficile</option>
						  	</select>
						</div>

						<div class="tuto_time">
							<input type="number" placeholder="Choisir un nombre" step="5" min="0" max="60" class="">

						  	<label>Minute(s)</label>
						</div>
						<div class="tuto_time">
							<input type="number" placeholder="Choisir un nombre" step="1" min="0" max="5" class="">

						  	<label>Heure(s)</label>
						</div>
					</div>
				</form>
				
			</div>
		</div>

		<ol class="carousel-indicators">		
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    
		</ol>

		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  	</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>

		<input type="submit" name="Valider">
	</div>

		

	
<script type="text/javascript" src="js/form.js"></script>

 
  </script>
</body>
</html>