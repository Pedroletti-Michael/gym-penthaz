<?php


ob_start();
?>



<h1 class="text-center text-uppercase pt-5 pb-5">Panneau de configuration</h1>



<!-- #region general -->
<div class="pb-5 pt-5">
	<div class="container">
		<h1 class=" text-center pb-4 pt-5">Général</h1>

		<form class="row g-3">
			<div class="mb-3">
				<label for="inLogoGen" class="form-label">Choisir un logo</label>
				<input class="form-control" id="inLogoGen" name="inLogoGen" type="file">
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>
<!-- #endregion -->



<!-- #region description -->
<div class="pb-5 pt-5">
	<div class="container">
		<h1 class=" text-center pb-4 pt-5">Description</h1>

		<form class="row g-3">
			<div class="col-md-6">
				<label for="inTitleDesc" class="form-label">Titre</label>
				<input type="text" class="form-control" id="inTitleDesc" name="inTitleDesc">
			</div>
			<div class="col-md-6">
				<label for="inVidDesc" class="form-label">Vidéo de présentation</label>
				<input class="form-control" id="inVidDesc" name="inVidDesc" type="file">
			</div>
			<div class="mb-3">
				<label for="inTxtDesc" class="form-label">Texte</label>
				<textarea class="form-control" rows="6" id="inTxtDesc" name="inTxtDesc"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>
<!-- #endregion -->

<!-- #region description -->
<div class="pb-5 pt-5">
	<div class="container">
		<h1 class=" text-center pb-4 pt-5">Cours & horaires</h1>
		<p>Les cours et horaires étant lié sont mises à jour directement ensemble</p>

		/**
		Titre du cours
		Description
		Jour
		Heures
		Prof
		*/

		<form class="row g-3">
			<div class="col-md-6">
				<label for="inTitleDesc" class="form-label">Titre</label>
				<input type="text" class="form-control" id="inTitleDesc" name="inTitleDesc">
			</div>
			<div class="col-md-6">
				<label for="inVidDesc" class="form-label">Vidéo de présentation</label>
				<input class="form-control" id="inVidDesc" name="inVidDesc" type="file">
			</div>
			<div class="mb-3">
				<label for="inTxtDesc" class="form-label">Texte</label>
				<textarea class="form-control" rows="6" id="inTxtDesc" name="inTxtDesc"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>
<!-- #endregion -->

<?php
$content = ob_get_clean();
require "gabarit.php";

?>