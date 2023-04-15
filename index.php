<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Lucas Spitzer</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
		<!-- Custom Sources -->
		<link href="css/custom.css" rel="stylesheet" />
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-body container">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Lucas Spitzer</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="#apropos">À propos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#projets">Projets</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">Contact</a>
							</li>
						</ul>
						<a class="btn btn-outline-dark fw-bold" href="#">Blog</a>
					</div>
				</div>
			</nav>
		</header>
		<!-- SECTION 1 - A PROPOS-->
		<section class="container p-2 d-flex flex-column min-vh-100 justify-content-center align-items-center" id="apropos">
			<div class="row">
				<div class="container col-xxl-8 px-4 py-5">
					<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
						<div class="col-10 col-sm-8 col-lg-6">
							<img src="img/logo.png" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Photo de profil" width="700" height="500" loading="lazy" />
						</div>
						<div class="col-lg-6">
							<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Hello, moi c'est Lucas 👋</h1>
							<p class="lead">Je suis étudiant en terminale STI2D option SIN. Mais je suis aussi passioné par l'informatique et plus précisément par le développement web.</p>
							<div class="d-grid gap-2 d-md-flex justify-content-md-start">
								<a class="btn btn-primary btn-lg px-4 me-md-2" href="download/cv.pdf">Voir mon CV</a>
								<a class="btn btn-outline-secondary btn-lg px-4" href="https://blog.lucasspitzer.me">Blog</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="imageseparation1 mb-5"></div>
		<!-- SECTION 2 - PROJETS -->
		<section class="container p-2 d-flex flex-column min-vh-100 justify-content-center align-items-center" id="projets">
			<h1 class="text-center pb-3 fw-bold">Projets</h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<!-- SPARKLESS-->
				<div class="col">
					<div class="card h-100">
						<img src="img/sparkless-mockup.png" class="card-img-top" alt="Vue de la page utilisateur sur plusieurs appareils" />
						<div class="card-body">
							<h5 class="card-title"><a href="https://cendrier.lucasspitzer.me">Sparkless</a></h5>
							<div class="card-text">
								<p>Création d'un site web pour un cendrier connecté permettant aux fumeurs de suivre le consommation de tabac afin de les sensibiliser.</p>
								<p><span class="fw-bold">Participants:</span> Esteban Remond, Valentin Barbin, Henri Pau, Clément Bernard</p>
								<div>
									<span class="fw-bold">Identifiants test:</span><br />
									<span><i class="bi-at"></i>test@example.com</span><br />
									<span><i class="bi-key"></i>motdepasse</span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Mars à mai 2023 - Terminale STI2D SIN</small>
						</div>
					</div>
				</div>
				<!-- EASY ACCESS-->
				<div class="col">
					<div class="card h-100">
						<img src="img/easyaccess-mockup.png" class="card-img-top" alt="Vue de la page utilisateur sur plusieurs appareils" />
						<div class="card-body">
							<h5 class="card-title"><a href="https://easyaccess.lucasspitzer.me">EasyAccess</a></h5>
							<div class="card-text">
								<p>Création d'un site de présentation pour un projet de cuisine aménagée aux personnes à mobilité réduite</p>
								<p><span class="fw-bold">Participants:</span> Alexis Rebattet, Aurelien Lalande, Clément Bernard</p>
							</div>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Mai 2022 - Première STI2D</small>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="imageseparation2 mb-5 skewed"></div>
		<!-- SECTION 3 - CONTACT-->
		<section class="container p-2 d-flex flex-column min-vh-100 justify-content-center align-items-center" id="contact">
			<form method="post" action="">
				<h1 class="text-center pb-3 fw-bold">Contact</h1>
				<!-- Formulaire de contact en php pour envoyer un message, doit avori les champs suivants: nom, email, sujet, message et un bouton d'envoi -->
				<div class="row g-3">
					<div class="col-md-6">
						<label for="nom" class="form-label">Nom</label>
						<input type="text" class="form-control" id="nom" name="nom" />
					</div>
					<div class="col-md-6">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" />
					</div>
					<div class="col-12">
						<label for="sujet" class="form-label">Sujet</label>
						<input type="text" class="form-control" id="sujet" name="sujet" />
					</div>
					<div class="col-12">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" id="message" rows="3" name="message"></textarea>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary" id="envoyer" name="envoyer">Envoyer</button>
					</div>
				</div>
			</form>
		</section>
		<!-- FOOTER -->
		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				<p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

				<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
					<img class="bi me-2 rounded-circle" src="img/logo.png" width="40" height="40" />
				</a>

				<ul class="nav col-md-4 justify-content-end">
					<li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
					<li class="nav-item"><a href="https://github.com/pangolino30" class="nav-link px-2 text-body-secondary">GitHub</a></li>
					<li class="nav-item"><a href="https://blog.lucasspitzer.me" class="nav-link px-2 text-body-secondary">Blog</a></li>
					<li class="nav-item"><a href="https://cloud.lucasspitzer.me" class="nav-link px-2 text-body-secondary">Cloud</a></li>
				</ul>
			</footer>
		</div>
	</body>
</html>
