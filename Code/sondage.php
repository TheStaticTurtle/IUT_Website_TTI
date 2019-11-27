<html lang="fr">
	<head>
		<meta charset="utf-8">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <title>TakeTwoInteractive - Nos avis</title>
    </head>

	<body data-spy="scroll" data-target="#navbar-main" class="background-image bg_sondage">
		<header> <?php include("navbar.html"); ?> </header>

		<section>
            <div class="container2 material-light">
                <div>
                    <p style="text-align: justify">
                        Afin de récupérer les opinions du public envers l'entreprise Take-Two Interactive, nous avons décidés de réaliser un sondage.
                        Ce dernier à été partagé aux autres élèves du DUT Informatique et à de diverses communautés via des serveurs Discord.
                        Nous avons à ce jour récolté plus de 150 réponses avec une majorité des participants étant des hommes ayant entre 18 et 25 ans qui est le public principalement visé par l'entreprise.
                    </p>
                </div>
                <div class="row mb-3 mx-auto">
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#modalImgSondageConnaisance">
                            <img src="assets/img/SONDAGE_1.png" alt="Résultat sondage connaissance" height="200px">
                        </a>
                        <?php
                        $id="modalImgSondageConnaisance";
                        $title="Notre connaissance";
                        $src="assets/img/SONDAGE_1.png";
                        include("modal.php");
                        ?>
                    </div>
                    <div class="col">
                        <img src="assets/img/SONDAGE_2.png" alt="Résultat sondage marques" height="200px">
                    </div>
                </div>
                <div>
                    <p style="text-align: justify">
                        On peut voir sur la 1ère image que plus de 46% des participants ne connaissaient pas l'entreprise Take-Two Interactive alors que plus de 90% des participants connaissent leur principale fillière Rockstar Games.
                        Cela peut s'expliquer par le fait que la communication est réalisée par les marques telles Rockstar Games plutôt que par le nom Take-Two Interactive.
                    </p>
                </div>
                <div class="row mb-3 mx-auto">
                    <div class="col">
                        <img src="assets/img/SONDAGE_3.jpg" alt="Résultat sondage joué jeu Take-Two" height="200px">
                    </div>
                    <div class="col">
                        <img src="assets/img/SONDAGE_4.jpg" alt="Résultat sondage connaissance GTA" height="200px">
                    </div>
                </div>
            </div>
		</section>

        <?php include("footer.html"); ?>

        <script type="text/javascript" src="assets/js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
	</body>
</html>