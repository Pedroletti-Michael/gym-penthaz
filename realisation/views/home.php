<?php

/**
 * Authors : Pedroletti Michael
 * CreationFile date : 27.01.2023
 * Description : Homepage of the website
 **/

ob_start();

?>

<!-- Section description -->
<div class=" bg-light pb-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col p-2">
				<img src="/views/images/logo.jpeg" alt="description Gym Penthaz" width="400" height="250">
			</div>
			<div class="col mt-auto mb-auto p-5">
				<h1>Qui sommes-nous ?</h1>
				<p>
					Gym pour Tous, c’est bien là la vocation de notre société. Fondée en 1977, c’est la plus
					grande
					de
					notre
					joli village. Elle compte aujourd’hui plus de 220 membres. Tu trouveras certainement un
					groupe
					qui
					correspondra à tes envies.

					Alors n’hésite pas à passer nous voir ou encore à nous contacter.
				</p>
			</div>
		</div>
	</div>
</div>



<!-- Section horaires -->
<div class="bg-std pb-5">
	<div class="container">
		<h1 class="text-center pt-5">Horaires</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>
					<th scope="col">Heures</th>
					<th scope="col">Cours</th>
					<th scope="col">Prof</th>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">Lundi</th>
					<td>17h-18h30</td>
					<td>Gym du soir et agrès compétition</td>
					<td>Thierry Girardin et Marcelin du puis</td>
				</tr>
				<tr>
					<th scope="row">Lundi</th>
					<td>20h-22h</td>
					<td>Agrès</td>
					<td>Marchal</td>
				</tr>
				<tr>
					<th scope="row">Vendredi</th>
					<td>20h-22h</td>
					<td>Agrès</td>
					<td>Marchal</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

<!-- Section cours -->
<div class="bg-light pb-5">
	<div class="container">
		<h1 class=" text-center pt-5">Cours disponibles</h1>

		<div id="carouselExampleIndicators" class="carousel carousel-dark slide align-content-center"
			data-bs-ride="true">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
					aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner text-center p-5">
				<div class="carousel-item active">
					<div class="card ms-auto me-auto" style="width: 18rem;">
						<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the
								bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card ms-auto me-auto" style="width: 18rem;">
						<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the
								bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card ms-auto me-auto" style="width: 18rem;">
						<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the
								bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="card ms-auto me-auto" style="width: 18rem;">
						<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Cours enfant 3-6 ans</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the
								bulk
								of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>



<!-- Section équipe -->
<div class="bg-std pb-5">
	<div class="container">
		<h1 class="text-center pt-5">Présentation de l'équipe</h1>
		<div class="row row-cols-1 row-cols-md-3 g-4 align-content-center pt-5 pb-5">
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/carmelo.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0930.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a short card.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0931.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0935.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0936.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0938.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0939.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0941.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0942.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content.</p>
					</div>
				</div>
			</div>
			<div class="col"></div>
			<div class="col">
				<div class="card card-team h-100">
					<div class=" p-2">
						<img src="/views/images/team/DSC_0944.webp" class="card-img-top" alt="...">
					</div>
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Section galerie -->
<div class="bg-light pb-5 pt-5">
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card h-100">
					<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content. This content is a little bit longer.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card h-100">
					<img src="/views/images/logo.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">This is a longer card with supporting text below as a natural lead-in
							to additional content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Section contact -->
<div class="bg-std pb-5 pt-5">
	<div class="container">
		<form class="row g-3">
			<div class="col-md-6">
				<label for="inputEmail4" class="form-label">Nom</label>
				<input type="text" class="form-control" id="inputEmail4">
			</div>
			<div class="col-md-6">
				<label for="inputPassword4" class="form-label">Prénom</label>
				<input type="text" class="form-control" id="inputPassword4">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="joseph@example.ch">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Votre message :</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</div>
		</form>
	</div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";

?>