<?php
$to="iut.projtut.taketwointeractive@gmail.com";
$subject = 'Nouvelle demande de contact de ';

?>

<html lang="fr">
	<head>
		<title></title>
		<meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400&display=swap" rel="stylesheet"> 

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

        <style>
            div {
                padding: 0px;
            }
        </style>
		<script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="assets/js/main.js"></script>

        <title>TakeTwoInteractive - Contact</title>

        <style>
            /* HARD FIX for the footer. Total hour spent fixing it: ~5h */
            footer {
                position: absolute !important;
                bottom: 0px !important;
                left: 0px !important;
                right: 0px !important;
            }
        </style>
    </head>
	<body data-spy="scroll" data-target="#navbar-main" class="background-image bg3_image">

        <header><?php include("navbar.html"); ?></header>

		<section id="" class="" style="margin: 0px;">

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8 col-lg">
						<?php
                            if(isset($_POST["email"]) && isset($_POST["message"])) {
							    $headers = "From:" . $_POST["email"];
							    if(mail ($to, $subject . $_POST["email"] , $_POST["message"], $headers)) {
							        ?>
			                        <div class="material-primary rounded-0 ">
				                        <div class="card-header p-0 ">
				                            <div class="material-dark text-white text-center py-2">
				                                <h3><i class="fa fa-envelope"></i> Mail envoyé</h3>
                                                <?php header('Refresh: 2; URL=index.php'); ?>
				                            </div>
				                        </div>
			                        </div>

			                <?php } else { ?>
			                        <div class="material-primary rounded-0 ">
				                        <div class="card-header p-0 ">
				                            <div class="material-dark text-white text-center py-2">
				                                <h3><i class="fa fa-envelope"></i> Erreur lors de l'envois</h3>
				                            </div>
				                        </div>
			                        </div>
						    <?php }

                            } else {
						    ?>
		                    <form action="contact.php" method="post" style="margin-bottom: 0px;">
		                        <div class="material-primary rounded-0 ">
			                        <div class="card-header p-0 ">
			                            <div class="material-dark text-white text-center py-2">
			                                <h3><i class="fa fa-envelope"></i> Nous contacter</h3>
			                            </div>
			                        </div>
			                        <div class="card-body p-3">
			                            <div class="form-group">
			                                <div class="input-group mb-2 ">
			                                    <div class="input-group-prepend">
			                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
			                                    </div>
			                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="mon_email@gmail.com" required>
			                                </div>
			                            </div>

			                            <div class="form-group">
			                                <div class="input-group mb-2 h-75">
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


        <?php  include("footer.html"); ?>
	</body>
</html>