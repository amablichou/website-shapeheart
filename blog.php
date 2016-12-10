<!-- Cookies -->
<?php include('cookies.php') ; ?>

<!-- Connection à la bdd -->

<?php
try {
    $bdd = new PDO('mysql:host=db643346146.db.1and1.com;dbname=db643346146;charset=utf8', 'dbo643346146', 'Sh4peHe4rt', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
} ?>

<!-- Récupération du numéro de page -->
<?php
$idmax = $bdd->query('SELECT MAX(id) AS idmax FROM article');
$idmax = $idmax->fetch();
$idmax = $idmax["idmax"];
if (ISSET($_GET['page'])) {
    $page = htmlspecialchars($_GET['page']);
}
else {
    $page = 0;
}
if (is_numeric($page) AND is_numeric($idmax)) {
    $page = intval($page);
    $idmax = intval($idmax);
    if (!(($page <= $idmax) AND ($page > 0))) {
        $page = 0;
    }
}
else {
    $page = 0;
};
$articleparpage = 5;
$limit = $page + $articleparpage;
?>

<!-- Recupération des articles qui nous intéressent -->
<?php $listearticles = $bdd->prepare('SELECT * FROM article ORDER BY id DESC LIMIT :limit OFFSET :offset');
$listearticles->bindParam(":limit", $limit, PDO::PARAM_INT);
$listearticles->bindParam(":offset", $page, PDO::PARAM_INT);
$listearticles->execute();
 ?>

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
        <div id="header-blog">
            <div id="background-header-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-vertical-center intro-message">
                            <div class=" text-header text-shapeheart">
                                <h1></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mon temps -->

    <section id="mon-temps">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="temps_container">
                        <form id="form_calcul">
                            <div class="row temps_input">
                                <div class="col-md-4">                                    
                                    <p class="temps-titre">
                                    <span class="francais">Fréquence cardiaque max.</span>
                                    <span class="english">Maximum Heart Rate</span>
                                    </p>

                                    <p>
                                    <span class="francais">(généralement 220 - âge)</span>
                                    <span class="english">(usually, 220 - age)</span>
                                    </p>

                                    <input type="number" id="fcmax" min="40" max="220" required="required" />
                                    <p id="fcmax_message"></p>
                                </div>

                                <div class="col-md-4">

                                    <p class="temps-titre">
                                    <span class="francais">Temps sur un 10km</span>
                                    <span class="english">Time on a 10km</span>
                                    </p>

                                    <p>
                                    <span class="francais">(en entraînement)</span>
                                    <span class="english">(during training)</span>
                                    </p>

                                    <input type="time" id="temps" step="1" value="00:00:00" required="required" />
                                    <p id="temps_message"></p>
                                </div>

                                <div class="col-md-4">
                                    <p class="temps-titre">
                                    <span class="francais">Fréquence cardiaque moyenne</span>
                                    <span class="english">Average Heart Rate</span>
                                    </p>

                                    <p>
                                    <span class="francais">(à ce 10km)</span>
                                    <span class="english">(during that 10km)</span>
                                    </p>

                                    <input type="number" id="fcmoy" min="40" max="220" required="required" />
                                    <p id="fcmoy_message"></p>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <input class="btn-red btn-temps" type="submit" name="valider" value="GO" />
                                </div>

                            </div>

                            <div class="row temps_input">
                                <div class="col-md-4">
                                    <p class="temps-titre">10km</p>
                                    <!--<span>Temps</span>-->
                                    <input type="time" readonly="readonly" id="temps_10km" step="1" />
                                    <br />
                                    <!--<span>Allure</span>-->
                                    <input type="text" readonly="readonly" id="allure_10km" />
                                </div>
                                <div class="col-md-4">
                                    <p class="temps-titre">21km</p>
                                    <!--<span>Temps</span>-->
                                    <input type="time" readonly="readonly" id="temps_semi" step="1" />
                                    <br />
                                    <!--<span>Allure</span>-->
                                    <input type="text" readonly="readonly" id="allure_semi" />
                                </div>
                                <div class="col-md-4">
                                    <p class="temps-titre">42km</p>
                                    <!--<span>Temps</span>-->
                                    <input type="time" readonly="readonly" id="temps_marathon" step="1" />
                                    <br />
                                    <!--<span>Allure</span>-->
                                    <input type="text" readonly="readonly" id="allure_marathon" />
                                </div>
                            </div>
                        </form>

                        <script type="text/javascript" src="customJS/time-functions.js"></script>
                        <script type="text/javascript" src="customJS/calcul.js"></script>
                        <script type="text/javascript" src="customJS/form-functions.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles -->

    <section id="articles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="article_container">
                        <?php while ($article = $listearticles->fetch()) { ?>
                            <a href="<?php echo($article["url"]); ?>" id="article-<?php echo($article["id"]); ?>">
                                <p class="titre-article">
                                    <span class="english"><?php echo($article["titreen"]); ?></span>
                                    <span class="francais"><?php echo($article["titrefr"]); ?></span>
                                </p>
                                <p class="date-article">
                                    <?php echo($article["date_article"]); ?>
                                </p>
                            </a>
                            <img class="article_picture" src="<?php echo($article["photo"]); ?>">
                            <p class="article-apercu article">
                                <span class="english"><?php echo($article["apercuen"]) ?></span>
                                <span class="francais"><?php echo($article["apercufr"]) ?></span>
                            </p>
                            <a class="article-btn-suite article" href="<?php echo($article["url"]); ?>"> <!-- onclick="document.getElementById('article-1').style.display= ''; this.style.display= 'none'; return false;">-->
                                <span class="english">Read More ...</span>
                                <span class="francais">Afficher la suite ...</span>
                            </a>
                            <div class="share-container">
                                <div class="share">
                                    <span class="english">Share</span>
                                    <span class="francais">Partager</span>
                                </div>
                                <div class="share_separator"></div>
                                <div class="share_logos">
                                    <div class="share_logo_block">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.shapeheart.com/article.php?article=<?php echo($article["id"]); ?>">
                                            <img class="share_logo" src="img/Facebook.png">
                                        </a>
                                        <a href="https://www.linkedin.com/cws/share?url=http://www.shapeheart.com/article.php?article=<?php echo($article["id"]); ?>">
                                            <img class="share_logo" src="img/Linked_in.png">
                                        </a>
                                        <a href="https://twitter.com/share?url=http://www.shapeheart.com/article.php?article=<?php echo($article["id"]); ?>">
                                            <img class="share_logo" src="img/Twitter.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                </div>

                <!-- COLONNE SOCIAL MEDIAS -->

                <div class="col-md-4">
                    <div id="menu-social-media">

                        <!-- Carré SUBSCRIBE -->

                        <div id="menu-suscribe" class="widget">
                            <h1 class="widget-title">
                                <span class="english">Newsletter</span>
                                <span class="francais">Newsletter</span>
                            </h1>
                            <p>
                                <span class="english">Suscribe to our newsletter</span>
                                <span class="francais">Inscrivez-vous à notre newsletter</span>
                            </p>

                            <!-- FORM Pour récupérer EMAIL -->

                            <div id="enter-email">
                                <div id="mc_embed_signup">
                                    <form action="index.html" method="get" id="signup_blog" name="mc-embedded-subscribe-form"
                                          class="validate" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group">
                                                <p id="votre_email-socialmedia">
                                                    <input type="email" value="" placeholder="email" name="email" class="required email" id="email">
                                                </p>
                                            </div>
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="">
                                            </div>
                                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer-socialmedia">
                                            </div>
                                        <br /><br />
                                        <p class="texte-reponse" id="message_blog" style="color:black"></p>
                                        </div>
                                    </form>
                                </div>

                            <script src="js/jquery.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('#signup_blog').on('submit',function(e) {
                                        e.preventDefault();
                                        $("#message_blog").html("Adding your email address...");
                                        $.ajax({
                                            url: 'store-address.php', // proper url to your "store-address.php" file
                                            type: 'POST', // <- IMPORTANT
                                            data: $('#signup_blog').serialize() + '&ajax=true',
                                            success: function(msg) {
                                                var message = $.parseJSON(msg),
                                                    result = '';
                                                if (message.status === 'subscribed') { // success
                                                    result = 'Yeah ! Welcome champ ! '; // Bienvenue Champion(ne) !
                                                } else { // error
                                                    result = ''; //
                                                }
                                                $('#message_blog').html(result); // display the message
                                            }
                                        });
                                        return false;
                                    });
                                });
                            </script>

                            <!--Coucou la version originale

                            <div id="enter-email">
                                <div id="mc_embed_signup">
                                    <form action="//shapeheart.us12.list-manage.com/subscribe/post?u=bae5feda13b91325afa9cf6e1&amp;id=16a24afed6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group">
                                                <p id="votre_email-socialmedia">
                                                    <input type="email" value="" placeholder="email" name="EMAIL" class="required email" id="mce-EMAIL">
                                                </p>
                                            </div>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="">
                                            </div>
                                            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer-socialmedia">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            Coucou la version du pop up


                            <div class="col-sm-4 text-center col-footer" id="mc_embed_signup">
                            <form id="signup" action="index.html" method="get" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group email-footer">
                                        <p id="votre_email_footer">
                                            <input type="email" value="" placeholder="Your email" name="email" class="required email" id="email">
                                        </p>

                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="">
                                    </div>
                                    <div>
                                         <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer_footer">
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        -->

                        <!--aUTRE TEST

                        <div id="ENTER-EMAIL">
                                <div id="mc_embed_signup">
                                    <form id="signup" action="index.html" method="get" name="mc-embedded-subscribe-form" 
                                    class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="mc-field-group">
                                                <p id="votre_email-socialmedia">
                                                    <input type="email" value="" placeholder="email" name="email" class="required email" id="email">
                                                </p>
                                            </div>

                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="">
                                            </div>
                                                <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer-socialmedia">
                                            </div>
                                    </form>
                                    <div class="texte-reponse-blog" id="message"></div>
                                 </div>   


                                <script src="js/jquery.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        $('#signup').submit(function() {
                                            $("#message").html("Adding your email address...");
                                            $.ajax({
                                                url: 'store-address.php', // proper url to your "store-address.php" file
                                                type: 'POST', // <- IMPORTANT
                                                data: $('#signup').serialize() + '&ajax=true',
                                                success: function(msg) {
                                                        var message = $.parseJSON(msg),
                                                        result = '';
                                                        if (message.status === 'subscribed') { // success
                                                            result = 'Yeah ! Welcome champ ! '; // Bienvenue Champion(ne) !
                                                        } else { // error
                                                            result = 'Oops something went wrong'; // 
                                                        }
                                                        $('#message').html(result); // display the message
                                                        }
                                            });
                                            return false;
                                        });
                                    });
                                </script>
                            </div>

                        -->


                        <!--Coucou le reste du code -->

                        </div>
                        <div id="menu-follow" class="widget">
                            <h1 class="widget-title">
                                <span class="english">Follow</span>
                                <span class="francais">Nous suivre</span>
                            </h1>
                            <a href="https://www.facebook.com/Shapeheart-915761331864592/" target="_blank">
                                <i class="fa fa-facebook btn-follow"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/10779438?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10779438%2Cidx%3A1-1-1%2CtarId%3A1464628713433%2Ctas%3Ashapeheart" target="_blank">
                                <i class="fa fa-linkedin btn-follow"></i>
                            </a>
                            <a href="https://twitter.com/Shapeheart_" target="_blank">
                                <i class="fa fa-twitter btn-follow"></i>
                            </a>
                        </div>
                        <div id="menu-facebook" class="widget">
                            <h1 class="widget-title">
                                Facebook
                            </h1>
                            <div class="iframe-facebook-container">
                                <img class="iframe-facebook-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FShapeheart-915761331864592%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
                                </iframe>
                            </div>
                        </div>
                        <div id="menu-twitter" class="widget">
                            <h1 class="widget-title">
                                Twitter
                            </h1>
                            <a class="twitter-timeline" data-height="800" href="https://twitter.com/Shapeheart_">Tweets by Shapeheart_</a>
                            <script async src="https:/platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="previous-next">
        <?php  if ($page > 1) { ?>
            <a href="blog.php?page=<?php echo($page - $articleparpage); ?>" id="previous" class="lien-article">
                <span class="english">< Previous</span>
                <span class="francais">< Précédent</span>
            </a>
        <?php }
        if ($limit < $idmax) { ?>
            <a href="blog.php?page=<?php echo($limit); ?>" id="next" class="lien-article">
                <span class="english">Next ></span>
                <span class="francais">Suivant ></span>
            </a>
        <?php }; ?>
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
    <script src="customJS/pop-up-contactus.js"></script>

</body>