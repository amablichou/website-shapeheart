/* Requirement */
/*
shiftHeart = height at which the shift takes place
heart = logo Heart, whose height will change
mainNavRow = portion of the navbar whose margin-top will change
 */

/* Variables */
var header = $('header'),
    heart = $('#heart'),
    mainNavRow = $('#main-nav-row');

var headerHeight = header.height(),
    heartHeight = heart.height();

var shiftHeart = headerHeight/3;

/* Fonction */
$(window).bind('scroll', function() {

    var offset = $(document).scrollTop(),
        taille = heartHeight;

    if(offset <= shiftHeart) {
        taille = heartHeight;
    }

    else if(offset >= shiftHeart) {
        taille = 40;
    }

    heart.css('height', taille + 'px');
    mainNavRow.css('margin-top', (taille-40) + 'px');
});