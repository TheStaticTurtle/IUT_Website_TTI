<html lang="fr">
	<head>
		<title>Notre vitrine</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<script src="assets/js/main.js"></script>
	</head>
	<body data-spy="scroll" data-target="#navbar-main" class="background-image bg3_image">
		<img src="assets/img/FondGris.jpg">
		<header> <?php include("navbar.html"); ?> </header>

		<section id="theinsperationalquote" class="quote-block" style="">
			<div class="container material-dark">
				<div class="row">
					<div class="col">	
						<p style="font-size: 1.35em; font-weight: bold;">
							Ici vous retrouverez plus d'informations sur nos studios ainsi que nos jeux phares.
							Des studios de rêve pour des jeux incroyables.
						</p>
					</div>
				</div>
			</div>

			<div class="arrow-wrapper" onclick="scrollto('pagestart')">
				<p class="arrowtext" style="color: #fafafa;">
					Voir plus
				</p>
				<img src="assets/img/arrow.svg" class="arrowimg animated bounce">
			</div>
		</section>


		<header class="margin" id="pagestart">
		</header>

		<section id="rockstar" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-text">	
						<h2 style="font-size: 4em; font-weight: bold;">
							Rockstar Games
						</h2>
						<p class="lead" style="font-size: 2em; font-style: italic;">
							Grand Theft Auto, Red Dead Redemption...
						</p>
						<p>
							Développeur et à la fois éditeur, Rockstar Games est un très grand nom dans l'industrie du jeu vidéo.
							<br>
							Ils ont été rachetés en 1998 par Take-Two Interactive, leur siège social étant situé à New York aux États-Unis.
							<br>
							Ils possèdent plusieurs studios à travers le monde : Rockstar London, Rockstar North (Écosse), Rockstar India...
						</p>
					</div>
					<div class="col col-img">
						<img src="assets/img/RockstarLogo.png"/>
					</div>
				</div>
			</div>
		</section>

		<section id="createurs" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-img">
						<img src="assets/img/DanEtSamHouser.jpg"/>
					</div>
					<div class="col col-text">
						<h2 style="font-size: 4em; font-weight: bold;">
							Les créateurs de Rockstar Games
						</h2>
						<p style="font-size: 1.29em; text-align: justify;">
							Sam Houser (à gauche de la photo), âgé de 48 ans, frère de Dan Houser, est co-président et co-fondateur de Rockstar Games.
							<br>
							Dan Houser (à droite de la photo), âgé de 45 ans, frère de Sam Houser, est co-président et co-fondateur de Rockstar Games.
							<br>
							Sam Houser a été producteur exécutif sur beaucoup de jeux développés par Rockstar, dont les Grand Theft Auto (GTA).
							<br>
							Quand à Dan Houser, il a été scénariste et producteur sur plein de jeux Rockstar, néanmoins il a produit les GTA entre 2001 et 2006 (GTA III à GTA Vice City Stories).
							<br>
							Les deux frères ont quand même prêté leur voix à quelques jeux. Par exemple :
							<br>
							- Sam Houser : gangster sur GTA: San Andreas et piéton sur GTA IV
							<br>
							- Dan Houser : GTA III, GTA: Vice City, GTA IV
						</p>					
					</div>
				</div>
			</div>
		</section>
		<section id="thune" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-text">	
						<h2>Notre empire boursier</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
						<p>
							Suspendisse tincidunt, enim vel efficitur blandit, tortor velit condimentum turpis, bibendum congue sapien quam at metus. Aenean in elit ut lorem vulputate gravida ac eu ante. Suspendisse bibendum diam eget commodo maximus. Nullam egestas, risus et efficitur ultrices, ligula nunc tincidunt leo, aliquam efficitur sem nisi sit amet lectus.
						</p>
					</div>
					<div class="col col-img">
						<img src="https://via.placeholder.com/512x512.png?text=Placeholder"/>
					</div>
				</div>
			</div>
		</section>

		<section id="stats" class="">
			<div class="container2 material-dark">
				<div class="row">
					<div class="col col-img">
						<img src="https://via.placeholder.com/512x512.png?text=Placeholder"/>
					</div>
					<div class="col col-text">	
						<h2>Nos avis</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
						<p>
							Suspendisse tincidunt, enim vel efficitur blandit, tortor velit condimentum turpis, bibendum congue sapien quam at metus. Aenean in elit ut lorem vulputate gravida ac eu ante. Suspendisse bibendum diam eget commodo maximus. Nullam egestas, risus et efficitur ultrices, ligula nunc tincidunt leo, aliquam efficitur sem nisi sit amet lectus.
						</p>					
					</div>
				</div>
			</div>
		</section>


		<footer class="py-5 bg-dark">
			<?php include("footer.html"); ?> 
		</footer>
	</body>
</html>