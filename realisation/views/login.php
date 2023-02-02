<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 27.01.2023
 * Description : login page
 **/

ob_start();

?>

<div class="bg-std pb-5 pt-5">
	<div class="container">
		<form class="row g-3" method="post" action="?action=requestLogin">
			<div class="col-md-6">
				<label for="inputEmail" class="form-label">E-mail</label>
				<input type="text" class="form-control" name="inputEmail" id="inputEmail">
			</div>
			<div class="col-md-6">
				<label for="inputPassword" class="form-label">Mot de passe</label>
				<input type="password" class="form-control" id="inputPassword" name="inputPassword">
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Se connecter</button>
			</div>
		</form>
	</div>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";

?>