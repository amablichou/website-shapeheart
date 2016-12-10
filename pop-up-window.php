<div id="pop-up">
    <div id="mybox_aplat">
        <div id="mybox_conteneur">
            <div id="mybox_relative">
                <div id="mybox_close">
                    <a class="close" >
                        <p>
                            <img src="img/icon-back.png" alt="" width="25px">
                        </p>
                    </a>
                </div>
                <img id="logo" src="img/logo.png" alt="">
                <p class="texte">EM<span class="texte-a">A</span>IL</p>

                <h2 class="texte-promo">
                    <span class="english">Keep in touch with us <br />Be notified as soon as our armband is here</span>
                    <span class="francais">Restez informés :)<br />Soyez avertis dès que le brassard sort</span>
                </h2>

                <div id="form">
                    <div id="mc_embed_signup">
                        <form id="signup" action="index.html" method="get" name="mc-embedded-subscribe-form" 
                        class="validate" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <p id="votre_email">
                                        <input type="email" value="" placeholder="Your email" name="email" class="required email" id="email">
                                    </p>
                                </div>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bae5feda13b91325afa9cf6e1_16a24afed6" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="bouton_envoyer"></div>
                            </div>
                        </form>                        
                        <div class="texte-reponse" id="message"></div>

                        <!-- Test du like button ZBOOB 
                        <div
                          class="fb-like"
                          data-share="false"
                          data-width="450"
                          data-show-faces="true">
                        </div>
                        -->

                    </div>       

                        <!--Script de message de retour-->
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
                                                result = ''; //
                                            }
                                            $('#message').html(result); // display the message
                                        }
                                    });
                                    return false;
                                });
                            });</script>
                </div>      
            </div>
        </div>
    </div>
</div>