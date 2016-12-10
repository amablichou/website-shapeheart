<!-- Customisation de la navbar pour chaque page -->

<?php $currentpage = $_SERVER['REQUEST_URI']; // trouve la page actuelle
    $currentpage = basename($currentpage); // ne garde que le fin de l'adresse
    $homepages = array('blog', 'FAQ'); // liste des pages sur lesquelles 'home' doit apparaître
    $FAQpages1 = array('article', 'home'); // idem pour 'FAQ', en position 1
    $FAQpages2 = array('blog');
    $blogpages = array('article', 'FAQ', 'home'); // idem pour 'blog'
    if (substr($currentpage,0,7) == "article") { // réduit tous les article.php?article=id en article.php
        $currentpage = "article";
    };
    if (substr($currentpage,0,4) == "home") {
        $currentpage = "home";
    };
    if (substr($currentpage,0,3) == "FAQ") {
        $currentpage = "FAQ";
    };
    if (substr($currentpage,0,4) == "blog") {
        $currentpage = "blog";
    };
?>

<!-- Navbar elle-même -->

<div class="nav-container">
    <nav id="fading" class="overlay-nav">
        <div id="main-nav-row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-1">
                        <a href="home">
                            <img class="nav-logo" src="img/logo-white.png" id="heart">
                        </a>
                    </div>
                    <div class="col-xs-4">
                    </div>
                    <?php if (in_array($currentpage, $homepages)) { ?>
                    <div class="col-md-3 col-xs-6 align-right">
                        <a href="home" class="nav-text text-menu slide-underline">
                            Home
                        </a>
                    </div>
                    <?php } ?>
                    <?php if (in_array($currentpage, $FAQpages1)) { ?>
                    <div class="col-md-3 col-xs-6 align-right">
                        <a href="FAQ" class="nav-text text-menu slide-underline">
                            FAQ
                        </a>
                    </div>
                    <?php } ?>
                    <?php if (in_array($currentpage, $FAQpages2)) { ?>
                        <div class="col-md-2 col-xs-4 align-right">
                            <a href="FAQ" class="nav-text text-menu slide-underline">
                                FAQ
                            </a>
                        </div>
                    <?php } ?>
                    <?php if (in_array($currentpage, $blogpages)) { ?>
                    <div class="col-md-2 col-xs-4 align-right">
                        <a href="blog" class="nav-text text-menu slide-underline">
                            Blog
                        </a>
                    </div>
                    <?php } ?>
                    <div class="col-md-1 col-xs-2 align-right">
                        <form action="cookies.php" method="post" name="language" class="nav-text text-menu">
                            <input type="text" name="language" value="francais" style="display: none">
                            <input class="nav-text language-text english rond-language" type="submit" name="francais" value="Fr" id="btn-fr">
                        </form>
                        <form action="cookies.php" method="post" name="language" class="nav-text text-menu">
                            <input type="text" name="language" value="english" style="display: none">
                            <input class="nav-text language-text francais rond-language" type="submit" name="english" value="En" id="btn-en">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
