<!-- Cookies -->
<?php include('cookies.php') ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>
    <!-- Navbar transparente sur le Header puis rouge ailleurs -->
    <?php include('navbar.php') ?>

    <!-- Header -->
    <header id="top">
        <div id="header-FAQ">
            <div id="background-header-FAQ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-vertical-center intro-message">
                            <div class=" text-header text-shapeheart">
                                <h1>FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Questions -->
    <section id="section-FAQ">
        <div class="container-FAQ">
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">How is the data collected from the sensor ?</span>
                    <span class="francais">Comment les données sont-elles récupérées depuis le capteur ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">The data is transferred directly to the smartphone’s running app with Bluetooth connexion.</span>
                    <span class="francais">Les données sont transmises directement vers l’application running du smartphone via Bluetooth.</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Which running app are compatible with our connected armband ?</span>
                    <span class="francais">Quelles sont les applications de running compatibles avec notre technologie ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Runstastic, Endomondo, Strava, Running Heroes, Digifit, Runkeeper, MapMyFitness, Virtual Traning, 3,2,1 Run, Irunner, Nike+, Virtual Runner, Polar Beat…</span>
                    <span class="francais">Runtastic, Endomondo, Strava, Running Heroes, Digifit, Runkeeper, MapMyFitness, Virtual Training, 3,2,1 Run, Irunner, Nike+, Virtual Runner, Polar Beat…</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Can we use our armband with long sleeves or sweatshirts (in winter time) ?</span>
                    <span class="francais">Peut-on utiliser le brassard Shapeheart avec manches longues et k-way (en hiver) ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">The sensor is removable, it can therefore be placed in our « winter kit »: an elastic and confortable strap which is wrapped around the arm and positioned under the armband. You can thereby run in winter whithout feeling over equipped.</span>
                    <span class="francais">Le capteur étant amovible, il peut être placé dans le « winter kit », une attache élastique et confortable qui se positionne sous le brassard. Vous pouvez ainsi courir au chaud sans avorir la sensation d'être bardé de capteurs.</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Which smartphones are compatible with our connected armband ?</span>
                    <span class="francais">Quels smartphones sont compatibles avec le brassard ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">An overwhelming majority: the elasticity of the material allows the Shapeheart armband to be compatible with almost all smartphones on the market today from iPhone 4 (yes it still exists) to iPhone 7S.</span>
                    <span class="francais">Une très grande majorité: l’élasticité de la matière permet au brassard Shapeheart d’être compatible avec presque tous les smartphones sur le marché actuellement, de l'iPhone 4 à l'iPhone 7.</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Is the heart rate data reliable ?</span>
                    <span class="francais">Les données de fréquence cardiaque sont-elles fiables ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Our sensor is at the forefront of technology in this field. We surely provide a more reliable data than our competitors.</span>
                    <span class="francais">Notre capteur est à la pointe de la technologie dans ce domaine. Nous assurons une plus grande fiabilité des données par rapport à nos concurrents.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ("footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="customJS/navbar-animation.js"></script>
    <script src="customJS/navbar-scroll-fade.js"></script>
    <script src="customJS/navbar-scroll-height.js"></script>
    <script src="customJS/to-top-button-scroll.js"></script>

</body>