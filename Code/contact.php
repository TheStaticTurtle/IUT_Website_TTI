<html lang="fr">
	<head>
		<title></title>
		<meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400&display=swap" rel="stylesheet"> 

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="assets/js/main.js"></script>

	</head>
	<body data-spy="scroll" data-target="#navbar-main" class="background-image bg3_image">
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img class="logo dml-left" src="assets/img/take2logo.svg">
				</a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto ">
						<li class="nav-item nav-item-big px-3"><a class="nav-link js-scroll-trigger" href="#">Notre histoire</a></li>
						<li class="nav-item nav-item-big px-3"><a class="nav-link js-scroll-trigger" href="#">Nos jeux</a></li>
						<li class="nav-item nav-item-big px-3"><a class="nav-link js-scroll-trigger" href="#">Notre place dans la bourse</a></li>
						<li class="nav-item nav-item-big px-3"><a class="nav-link js-scroll-trigger" href="#">Notre appréciation</a></li>
						<li class="nav-item nav-item-big px-3"><a class="nav-link js-scroll-trigger" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="" class="contact-block" style=""><!--Section: Contact v.2-->

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg-6 pb-5 ">
						<?php if(isset($_POST["email"]) && isset($_POST["message"])) { 
							$headers = "From:" . $_POST["email"];
							mail ("tuglersamuel@gmail.com", "[Contact] de ".$_POST["email"] , $_POST["message"], $headers)

						?>

		                        <div class="material-primary rounded-0 ">
			                        <div class="card-header p-0 ">
			                            <div class="material-dark text-white text-center py-2">
			                                <h3><i class="fa fa-envelope"></i> Mail envoyé</h3>
			                            </div>
			                        </div>
		                        </div>

						<?php } else { ?>

		                    <form action="contact.php" method="post">
		                        <div class="material-primary rounded-0 ">
			                        <div class="card-header p-0 ">
			                            <div class="material-dark text-white text-center py-2">
			                                <h3><i class="fa fa-envelope"></i> Nous contacter</h3>
			                            </div>
			                        </div>
			                        <div class="card-body p-3">
			                            <div class="form-group">
			                                <div class="input-group mb-2">
			                                    <div class="input-group-prepend">
			                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
			                                    </div>
			                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="mon_email@gmail.com" required>
			                                </div>
			                            </div>

			                            <div class="form-group">
			                                <div class="input-group mb-2">
			                                    <div class="input-group-prepend">
			                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
			                                    </div>
			                                    <textarea name="message" class="form-control" placeholder="" required></textarea>
			                                </div>
		                                </div>

		                                <div class="text-center">
		                                    <input type="submit" value="Envoyer" class="btn btn-dark btn-block rounded-0 py-2">
		                                </div>
		                            </div>
		                        </div>
		                    </form>
		                    <!--Form with header-->
			            <?php } ?>
			        </div>
				</div>
			</div>
		</section>


		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright © Your Website 2019</p>
			</div>
		</footer>
	</body>
</html>