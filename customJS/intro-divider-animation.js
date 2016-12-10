/* Description de la fonction */
// Permet à la barre d'intro d'apparaître en s'élargissant quand on charge la page

/* Variables */
var barreIntro = $('.intro-divider'), // id de la barre qui va s'élargir
    Nwidth = 0; // variable

var Nrun = setInterval(animation, 80); // lancement de la fonction animation toutes les 0,08s

/* Fonction */
function animation() {

    if (Nwidth == 130) { // une fois atteint la taille souhaitée,
        clearInterval(Nrun); // arrêt du Nrun, donc de l'appel de animation
    }
    else { // tant que la taille souhaitée n'est pas atteinte
        Nwidth = Nwidth + 13; // la variable augment de 13px
        barreIntro.css('width', Nwidth + 'px'); // ce qui est répercuté sur l'objet barreIntro
    }
}