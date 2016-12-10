<?php // Langue utilisateur
if (ISSET($_POST["language"])) { // Regarde si un des boutons langue vient d'être actionné
    $language = htmlspecialchars($_POST["language"]);
}
elseif (ISSET($_COOKIE["language"])) { // Sinon, regarde s'il y avait déjà un cookie
    $language = htmlspecialchars($_COOKIE["language"]);
}
else { // Sinon, la langue par défaut sera l'anglais
    $language = 'english';
}
setcookie("language", $language, time() + 365*24*3600, null, null, false, true); // Actualise le cookie avec la langue choisie (doit apparaître sur chaque page)
?>
<?php
setcookie("popup", "no", time() + 3600, null, null, false, true); //Cookie pour que le popup ne réapparaisse pas avant un certain temps (ici, une heure, soit 3600s)
?>
<?php $currentpage = $_SERVER['REQUEST_URI']; // trouve la page actuelle
$currentpage = basename($currentpage); // ne garde que le fin de l'adresse
if (substr($currentpage, 0, 11) == "cookies.php") { ?>
<meta http-equiv="refresh" content="0;URL='<?php echo $_SERVER[HTTP_REFERER]; ?>'" />
<?php }; ?>