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

<!-- Recupération de l'article concerné -->
<?php
$idmax = $bdd->query('SELECT MAX(id) AS idmax FROM article');
$idmax = $idmax->fetch();
$idmax = $idmax["idmax"];
$listearticles = $bdd->prepare('SELECT * FROM article WHERE id = ?');
$idurl = htmlspecialchars($_GET['article']);
if (is_numeric($idurl) AND is_numeric($idmax)) {
    $idurl = intval($idurl);
    $idmax = intval($idmax);
    if (($idurl <= $idmax) AND ($idurl > 0)) {
        $listearticles->execute(array($idurl));
        $article = $listearticles->fetch();
    }
    else {
        echo "404 not found";
        exit();
    }
}
else {
    echo "404 not found";
    exit();
};
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
                            <div id="article-header">
                                <h1>
                                <span class="english"><?php echo($article["titreen"]); ?></span>
                                <span class="francais"><?php echo($article["titrefr"]); ?></span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="back-blog">
        <p id="back-blog">
            <a id="back-to-blog" href="blog" class="lien-article">
            <span class="english">< Back to the blog </span>
            <span class="francais">< Retour au blog </span>
            </a>
        </p>
    </section>

    <section class="article">
        <div class="article-pleine-page">
            <div id="articles">
                <p class="date-article">
                    <?php echo($article["date_article"]); ?>
                </p>
                <br />
                <span class="english"><?php echo($article["texte1en"]); ?></span>
                <span class="francais"><?php echo($article["texte1fr"]); ?></span>
                <br />
                <br />
                <img class="article_picture" src="<?php echo($article["photo"]); ?>" width="100%">
                <br />
                <br />
                <span class="english"><?php echo($article["texte2en"]); ?></span>
                <span class="francais"><?php echo($article["texte2fr"]); ?></span>
            </div>
            <div class="share-container">
                <div class="share">
                    <span class="english">Share</span>
                    <span class="francais">Partager</span>
                </div>
                <div class="share_separator"></div>
                <div class="share_logos">
                    <div class="share_logo_block">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.shapeheart.com/article.php?article=<?php echo($idurl); ?>">
                            <img class="share_logo" src="img/Facebook.png">
                        </a>
                        <a href="https://www.linkedin.com/cws/share?url=http://www.shapeheart.com/article.php?article=<?php echo($idurl); ?>">
                            <img class="share_logo" src="img/Linked_in.png">
                        </a>
                        <a href="https://twitter.com/share?url=http://www.shapeheart.com/article.php?article=<?php echo($idurl); ?>">
                            <img class="share_logo" src="img/Twitter.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="previous-next">
        <?php if ($idurl > 1) { ?>
        <a href="article.php?article=<?php echo($idurl - 1); ?>" id="previous" class="lien-article">
            <span class="english">< Previous</span>
            <span class="francais">< Précédent</span>
        </a>
        <?php }
        if ($idurl < $idmax) { ?>
        <a href="article.php?article=<?php echo($idurl + 1); ?>" id="next" class="lien-article">
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