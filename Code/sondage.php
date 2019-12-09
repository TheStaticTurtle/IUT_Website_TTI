<html lang="fr">
<head>
    <title>Take-Two Interactive | Sondage</title>
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

<body data-spy="scroll" data-target="#navbar-main" class="background-image bg_sondage">
    <header> <?php include("navbar.html"); ?> </header>

    <section id="theinsperationalquote" class="quote-block" style="">
        <div class="container material-dark">
				<div class="row">
					<div class="col">	
						<p style="font-size: 1.35em;">
							Ici vous verrez comment nous sommes appréciés du public.
						</p>
					</div>
				</div>
        </div>
        <div class="arrow-wrapper" onclick="scrollto('pagestart')">
            <p class="arrowtext" style="color: white">Voir plus</p>
            <img src="assets/img/arrowWhite.svg" class="arrowimg animated bounce">
        </div>
    </section>

    <header class="margin" id="pagestart">
    </header>

    <section>
        <div class="container2 material-dark">
            <h2>La connaissance de l'entreprise chez le public</h2>
            <div>
                <p style="text-align: justify; font-size: 1.35em;">
                    Afin de récupérer les opinions du public envers l'entreprise Take-Two Interactive, nous avons décidés de réaliser un sondage.
                    Ce dernier à été partagé aux autres élèves du DUT Informatique et à de diverses communautés via des serveurs Discord.
                    Nous avons à ce jour récolté plus de 150 réponses avec une majorité des participants étant des hommes ayant entre 18 et 25 ans qui est le public principalement visé par l'entreprise.
                </p>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <img src="assets/img/SONDAGE_1.png" alt="Résultat sondage connaissance" id = "imgSondageConnaisance" class="pointer mx-auto d-block" height="200px">
                    <?php
                    $id="imgSondageConnaisance";
                    $title="Notre connaissance";
                    $src="assets/img/SONDAGE_1.png";
                    include("modal.php");
                    ?>
                </div>
                <div class="col">
                    <img src="assets/img/SONDAGE_2.png" alt="Résultat sondage marques" id = "resultsMarques" class="pointer mx-auto d-block" height="200px">
                    <?php
                    $id="resultsMarques";
                    $title="Notre place dans le marcher";
                    $src="assets/img/SONDAGE_2.png";
                    include("modal.php");
                    ?>
                </div>
            </div>
            <div>
                <p style="text-align: justify; font-size: 1.35em;">
                    On peut voir sur la 1ère image que plus de 46% des participants ne connaissaient pas l'entreprise Take-Two Interactive alors que plus de 90% des participants connaissent leur principale fillière Rockstar Games.
                    Cela peut s'expliquer par le fait que la communication est réalisée par les marques telles Rockstar Games plutôt que par le nom Take-Two Interactive.
                </p>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <img src="assets/img/SONDAGE_3.jpg" alt="Résultat sondage joué jeu Take-Two"  id = "havePlayedTKG"  class="pointer mx-auto d-block mb-1" height="175px">
                    <?php
                    $id="havePlayedTKG";
                    $title="Les gens ont joué a nos jeux";
                    $src="assets/img/SONDAGE_3.jpg";
                    include("modal.php");
                    ?>
                </div>
                <div class="col">
                    <img src="assets/img/SONDAGE_4.jpg" alt="Résultat sondage connaissance GTA" id = "GTAknown"  class="pointer mx-auto d-block" height="175px">
                    <?php
                    $id="GTAknown";
                    $title="Les gens connaissent GTA ?";
                    $src="assets/img/SONDAGE_4.jpg";
                    include("modal.php");
                    ?>
                </div>
            </div>
            <div>
                <p style="text-align: justify; font-size: 1.35em;">
                    Dans ces deux graphiques, on peut remarquer que malgré que plus d'un quart des participants au sondage n'ont jamais joué à un jeu édité par Take-Two Interactive et que, comme vu plus haut, plus de 46% des participants ne connaissaient pas l'entreprise, plus de 95% d'entre eux connaissent leur licence la plus populaire « Grand Theft Auto ».
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container2 material-dark">
            <h2>Grand Theft Auto</h2>
            <p style="text-align: justify; font-size: 1.35em;">
                Nous avons également demandé aux participants si ils avaient déjà joué à un jeu de la licence « Grand Theft Auto » et 84% des gens ayant répondu au sondage ont répondu oui. On a également demandé à quel(s) épisode(s) ils avaient joué :
            </p>
            <img src="assets/img/SONDAGE_5.jpg" alt="Résultat sondage jeux GTA"  id = "whichGTA"  class="pointer mx-auto d-block mb-3">
            <?php
            $id="whichGTA";
            $title="Quels GTA sont-ils connus ?";
            $src="assets/img/SONDAGE_5.jpg";
            include("modal.php");
            ?>
            <p style="text-align: justify; font-size: 1.35em;">
                On peut ici très clairement voir que le dernier épisode en date, Grand Theft Auto V, est le plus populaire avec un peu plus de 70% des gens qui ont déjà joué à un jeu Grand Theft Auto y ayant joué et donc 60% des participants totaux.
                Cela peut s'expliquer très facilement car cet épisode a réalisé de nombreux records de vente comme celui du meilleur démarrage de jeu vidéo au monde (<a href="http://www.vgchartz.com/article/251317/grand-theft-auto-v-smashes-global-week-one-sales-record/">source</a>).
                A ce jour, ce jeu est le troisième jeu le plus vendu au monde avec plus de 115 milions de copies vendues derrière Minecraft et Tetris ayant respectivement 176 et 170 milions de copies vendues (<a href="https://www.jeuxactu.com/take-two-voici-les-ventes-de-borderlands-3-gta-v-et-red-dead-redemptio-120093.htm">source</a>).
            </p>
        </div>
    </section>

    <?php include("footer.html"); ?>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>