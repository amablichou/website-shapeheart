/* Description de la fonction */
// Permet à la navbar d'apparaître en tombant quand on charge la page

/* Variables */
var navbar = $('.overlay-nav'), // id de la navbar qui va tomber
    Npos = 0, // variable
    Nopacity = 0; // variable

var Nrun = setInterval(animation, 80); // lancement de la fonction animation toutes les 0,08s

/* Fonction */
function animation() {

    if (Npos == 60) { // une fois atteint la hauteur souhaitée,
        clearInterval(Nrun); // arrêt du Nrun, donc de l'appel de animation
    }
    else { // tant que la hauteur souhaitée n'est pas atteinte
        Npos = Npos+6; // la variable augment de 6px
        Nopacity = Nopacity + 0.1; // la variable augment de 0,1
        navbar.css('top',-60+Npos+'px');
        navbar.css('opacity', Nopacity); // ce qui est répercuté sur l'objet
    }
}