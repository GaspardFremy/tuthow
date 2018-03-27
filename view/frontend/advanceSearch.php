<?php $title = 'recherche'; ?>

<?php ob_start(); ?>


<div class="row">
	<div class="col-1 no-gutter">

	</div>
	<div class="col-md-11 col-sm-12 body-container">

		<h1>Recherche avancée</h1>

		<div class="container">
			<div class="">
				<div>
					<div>
						<form class="form-horizontal">
							<input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
							<div class="form-group">
								<label for="location1" class="control-label">Catégorie</label>
								<select class="form-control" name="" id="location1">
									<option value="">Cuisine</option>
									<option value="">Mécanique</option>
									<option value="">Informatique</option>
									<option value="">Astronomie</option>
									<option value="">Physique</option>
								</select>
							</div>
							<div class="form-group">
								<label for="type1" class="control-label">Difficulé</label>
								<select class="form-control" name="" id="type1">
									<option value="">Facile</option>
									<option value="">Moyen</option>
									<option value="">Difficile</option>
								</select>
							</div>
							<div class="form-group">
								<label for="pricefrom" class="control-label">Temps minimum</label>
								<div class="input-group">
									<div class="input-group-addon" id="basic-addon2">H.</div>
									<input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
									<div class="input-group-addon" id="basic-addon2">Min.</div>
									<input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
								</div>
							</div>
							<div class="form-group">
								<label for="priceto" class="control-label">Temps maximum</label>
								<div class="input-group">
									<div class="input-group-addon" id="basic-addon2">H.</div>
									<input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
									<div class="input-group-addon" id="basic-addon2">Min.</div>
									<input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
								</div>
							</div>
							<p class="text-center"><input href="#" class="btn btn-danger glyphicon glyphicon-search" role="button" value="Search"></a></p>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
