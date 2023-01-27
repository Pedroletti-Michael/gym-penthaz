<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description"
		content="Accueil du site de la Gym de Penthaz en Suisse. Cours de Gymnastique en Suisse à Penthaz.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Michael Pedroletti">
	<title>Gym Penthaz - Accueil</title>

	<script src="https://kit.fontawesome.com/34351d4903.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="views/style/style.css" />
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="/views/images/logo.webp" alt="" width="156" height="86"
					class="d-inline-block align-text-top">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Galerie</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Les DVDs</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Paramètres</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page content -->

	<?= $content; ?>

	<!-- Footbar if needed but surely not -->
	<footer class="bg-dark text-center text-white">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			Copyright © Société de gymnastique Penthaz -
			<a class="text-white" href="https://gympenthaz.ch/">GymPenthaz.ch</a>
			- Tous droits réservés -
			<!-- Facebook -->
			<a class="btn btn-outline-light btn-floating m-1"
				href="https://www.facebook.com/Gym-pour-tous-Penthaz-1026161877591526/" role="button"><i
					class="fab fa-facebook-f"></i></a>
			<!-- Instagram -->
			<a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/gympourtouspenthaz/"
				role="button"><i class="fab fa-instagram"></i></a>
		</div>
	</footer>




	<!-- Back to top button -->
	<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
		<i class="fas fa-arrow-up"></i>
	</button>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>

	<script>
		//Get the button
		let mybutton = document.getElementById("btn-back-to-top");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction();
		};

		function scrollFunction() {
			if (
				document.body.scrollTop > 20 ||
				document.documentElement.scrollTop > 20
			) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}
		// When the user clicks on the button, scroll to the top of the document
		mybutton.addEventListener("click", backToTop);

		function backToTop() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
</body>

</html>