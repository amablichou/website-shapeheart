<?php include("contactus.php");?>

<footer>
    <div class="container-fluid">
        <div class="row">

            <!-- CONTAINER Contact Us + LOGO -->

            <div class="col-sm-4 text-center col-footer">
                <a href="https://www.shapeheart.com/" target="_blank">
                    <img class="footer-logo" src="img/logo.png">
                    <p class="footer-text shapeheart-font">SH<span class="text-shapeheart-a">A</span>PEHE<span class="text-shapeheart-a">A</span>RT</span></p>
                </a>
                <a href="FAQ.php">
                    <p class="footer-text">FAQ</p>
                </a>
                <a class="btn footer-text">
                    <p class="contactus">
                        <span class="english">Contact us</span>
                        <span class="francais">Nous contacter</span>
                    </p>
                </a>
            </div>

            <!-- FORM SUBSCRIBE pour récupérer EMAIL -->

            <div class="col-sm-4 text-center col-footer" id="mc_embed_signup">
                <form id="signup_footer" action="index.html" method="get" name="mc-embedded-subscribe-form" class="validate" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group email-footer">
                            <p id="votre_email_footer">
                                <input type="email" value="" placeholder="Your email" name="email" class="required email" id="email">
                            </p>

                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="" />
                        </div>
                        <div>
                             <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer_footer">
                        </div>
                        </div>
                        <span class="texte-reponse" id="message_footer"></span>
                    </div>
                </form>
            </div>

            <!--SCRIPT JS qui va aller ajouter l'entité email dans MAILCHIMP -->

            <script src="js/jquery.js"></script>

            <script>
                $(document).ready(function() {
                    $('#signup_footer').on('submit',function(e) {
                        e.preventDefault();
                        $("#message_footer").html("Adding your email address...");
                        $.ajax({
                            url: 'store-address.php', // proper url to your "store-address.php" file
                            type: 'POST', // <- IMPORTANT
                            data: $('#signup_footer').serialize() + '&ajax=true',
                            success: function(msg) {
                                    var message = $.parseJSON(msg),
                                    result = '';
                                    if (message.status === 'subscribed') { // success
                                        result = 'Yeah ! Welcome champ ! '; // Bienvenue Champion(ne) !
                                    } else { // error
                                        result = ''; //
                                    }
                                    $('#message_footer').html(result); // display the message
                                    }
                        });
                        return false;
                    });
                });
            </script>

            <!-- CONTAINER SOCIAL MEDIAS -->

            <div class="col-sm-4 text-center col-footer">
                <a href="https://www.facebook.com/Shapeheart-915761331864592/" target="_blank">
                    <img class="footer-logo" src="img/facebook_logo_white.png">
                </a>
                <a href="https://www.instagram.com/shapeheart_/" target="_blank">
                    <img class="footer-logo" src="img/instagram_logo_white.png">
                </a>
                <a href="https://twitter.com/Shapeheart_" target="_blank">
                    <img class="footer-logo" src="img/twitter_logo_white.png">
                </a>
            </div>


        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>


<!--

            Sur l'original

            <div class="col-sm-4 text-center col-footer" id="mc_embed_signup">
                <form action="//shapeheart.us12.list-manage.com/subscribe/post?u=bae5feda13b91325afa9cf6e1&amp;id=16a24afed6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group email-footer">
                            <p id="votre_email_footer">
                                <span class="english"><input type="email" value="" placeholder="Your email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                                <span class="francais"><input type="email" value="" placeholder="Votre email" name="EMAIL" class="required email" id="mce-EMAIL"></span>
                            </p>

                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value="">
                            </div>
                            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer_footer">
                        </div>
                    </div>
                </form>
            </div>

-->