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

	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<!-- JQUERY links -->
	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous">  	
	</script>
	<script
	  src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"
	  integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="
	  crossorigin="anonymous">	  	
	 </script>

</head>
<body>

	
	<form action="" method="POST">
		<div class="create_tuto">

			<h1>Créer ton Tuto</h1>
				<input type="text" name="titre" placeholder="Titre">

				<textarea rows="5" cols="53" placeholder="Introduction" name="intro"></textarea>

				<label for="file" class="input_label">
					<i class="fa fa-upload" aria-hidden="true"></i>
					<span id="label_span">Select a file to upload</span> 
				</label>
				<input id="file" type="file" name="fichier" multiple="true">

				<textarea rows="10" cols="53" placeholder="Votre texte ici ..."></textarea>

				<input type="submit" name="Poster">
		</div>

		<div class="create_tuto">
			<div class="form-group">
			    <label for="exampleInputEmail1">Matériel Necessaire</label>

			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Texte ici...">

			    <small id="emailHelp" class="form-text text-muted">Appuyer sur le bouton pour ajouter des éléments.</small>
			</div>
			
			<div class="form-group">
			    <label for="exampleInputEmail1">Crédits</label>

			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom/Prénom/Pseudo">
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

			  	<label >Minute(s)</label>
			</div>
		</div>		
				
	</form>		

	
<script type="text/javascript" src="js/form.js"></script>
</body>
</html>