<html lang="fr">
	<head>
        <title>Take-Two Interactive | Accueil</title>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
	</head>
	<body data-spy="scroll" data-target="#navbar-main" class="background-image-auto bg3_acceuil_image">
		<header> <?php include("navbar.html"); ?> </header>

		<section id="theinsperationalquote" class="quote-block" style="">
			<div class="container material-dark">
				<div class="row">
					<div class="col">	
						<p style="font-size: 1.3em;">
							Take-Two Interactive est un important développeur, éditeur et distributeur de jeux vidéo.
						</p>
					</div>
				</div>
			</div>

			<div class="arrow-wrapper" onclick="scrollto('pagestart')">
				<p class="arrowtext">Voir plus</p>
				<img src="assets/img/arrow.svg" class="arrowimg animated bounce">
			</div>
		</section>


		<header class="margin" id="pagestart">
		</header>

		<section id="taketwo" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-text">	
						<h2>Take-Two Interactive</h2>
						<p class="lead">
							Un poids lourd dans l'industrie du jeu vidéo.
						</p>
					</div>
					<div class="col col-img">
						<img src="assets/img/Take-Two-eco.png"/>
					</div>
				</div>
			</div>
		</section>

		<section id="createur" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-img">
						<img src="assets/img/RyanBrantNotScary.jpg"/>
					</div>
					<div class="col col-text">	
						<h2>Ryan Brant</h2>
						<p class="lead">
							Malheuresuement mort a l'age de 49ans le fondateur de Take-Two Interactive -- INSERT TEXT HERE --
						</p>				
					</div>
				</div>
			</div>
		</section>
		<section id="empire" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-text">	
						<h2>Un empire boursier</h2>
						<p class="lead">
							Avec une domination logique et une croissance impressionnante l’entreprise Take-Two Interactive est cotée à la bourse de New-York et possede un chiffre d'afffaire de 2 332 millions € en 2019
						</p>
					</div>
					<div class="col col-img">
						<img src="assets/img/bourse.jpg"/>
					</div>
				</div>
			</div>
		</section>

        <?php include("footer.html"); ?>
	</body>
</html>