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

    <section id="theinsperationalquote" class="quote-block" style="">
        <div class="container material-light">
            <div class="row">
                <div class="col">
                    <p style="font-size: 0.8em;">Les appréciations du public</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container2 material-light">
            <h2>La connaissance de l'entreprise chez le public</h2>
            <div>
                <p style="text-align: justify">
                    Afin de récupérer les opinions du public envers l'entreprise Take-Two Interactive, nous avons décidés de réaliser un sondage.
                    Ce dernier à été partagé aux autres élèves du DUT Informatique et à de diverses communautés via des serveurs Discord.
                    Nous avons à ce jour récolté plus de 150 réponses avec une majorité des participants étant des hommes ayant entre 18 et 25 ans qui est le public principalement visé par l'entreprise.
                </p>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <a data-toggle="modal" data-target="#modalImgSondageConnaisance">
                        <img src="assets/img/SONDAGE_1.png" alt="Résultat sondage connaissance" class="mx-auto d-block" height="200px">
                    </a>
                    <?php
                    $id="modalImgSondageConnaisance";
                    $title="Notre connaissance";
                    $src="assets/img/SONDAGE_1.png";
                    include("modal.php");
                    ?>
                </div>
                <div class="col">
                    <img src="assets/img/SONDAGE_2.png" alt="Résultat sondage marques" class="mx-auto d-block" height="200px">
                </div>
            </div>
            <div>
                <p style="text-align: justify">
                    On peut voir sur la 1ère image que plus de 46% des participants ne connaissaient pas l'entreprise Take-Two Interactive alors que plus de 90% des participants connaissent leur principale fillière Rockstar Games.
                    Cela peut s'expliquer par le fait que la communication est réalisée par les marques telles Rockstar Games plutôt que par le nom Take-Two Interactive.
                </p>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <img src="assets/img/SONDAGE_3.jpg" alt="Résultat sondage joué jeu Take-Two" class="mx-auto d-block mb-1" height="175px">
                </div>
                <div class="col">
                    <img src="assets/img/SONDAGE_4.jpg" alt="Résultat sondage connaissance GTA" class="mx-auto d-block" height="175px">
                </div>
            </div>
            <div>
                <p style="text-align: justify">
                    Dans ces deux graphiques, on peut remarquer que malgré que plus d'un quart des participants au sondage n'ont jamais joué à un jeu édité par Take-Two Interactive et que, comme vu plus haut, plus de 46% des participants ne connaissaient pas l'entreprise, plus de 95% d'entre eux connaissent leur license la plus populaire « Grand Theft Auto ».
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container2 material-light">
            <h2>Grand Theft Auto</h2>
            <p style="text-align: justify">
                Nous avons également demandé aux participant si ils avaient déjà joué à un jeu de la license « Grand Theft Auto » et 84% des gens ayant répondu au sondage ont répondu oui. On a également demandé à quel(s) épisode(s) ils avaient joué :
            </p>
            <img src="assets/img/SONDAGE_5.jpg" alt="Résultat sondage jeux GTA" class="mx-auto d-block mb-3">
            <p style="text-align: justify">
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