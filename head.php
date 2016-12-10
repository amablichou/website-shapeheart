<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="The first connected armband for runners that allows you to track your heart rate on your favorite running app while giving access to your smartphone">
<meta name="author" content="">
 
 <!-- Code pour les métas de partage Facebook ZBOOB modifs -->
<meta property="og:title" content="Shapeheart" />
<meta property="og:description" content="Le premier brassard de running connecté, permettant de suivre sa fréquence cardiaque et de rendre le smartphone accessible." />
<meta property="og:url" content="http://www.shapeheart.com/home.php" />
<meta property="og:image" content="http://www.shapeheart.com/img/Vignette-facebook.jpg" />


<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/stylish-portfolio.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Pour un site bilingue -->
<?php
if (ISSET($_COOKIE["language"])) {
    $language = htmlspecialchars($_COOKIE["language"]);
}
else {
    $language = "english";
}
if ($language == "francais") { ?>
<link href="css/francais.css" rel="stylesheet" title="francais">
<link href="css/english.css" rel="alternate stylesheet" title="english">
<?php }
else { ?>
<link href="css/english.css" rel="stylesheet" title="english">
<link href="css/francais.css" rel="alternate stylesheet" title="francais">
<?php } ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Code Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},
        i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    }
    (window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-78608965-1', 'auto');
    ga('send', 'pageview');
</script>
