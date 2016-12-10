/* Description */
// Fait bouger le produit avec le scrolling

/* Variables */
var produit = $('.photo-produit'),
    pageProduit = $('#presentation');

var pageProduitHeight = pageProduit.height();

var translate = pageProduitHeight/15;

var divide = headerHeight*4;

/* Fonction */
$(window).bind('scroll', function(){
    var offset = $(document).scrollTop(),
        rotation = -7 + 10*offset/divide,
        translation = -translate*(1/3) + translate*offset/divide;
    produit.css('transform', 'translate3d(0px,' + translation + 'px,0px)' + ' ' +'rotate(' + rotation + 'deg)');
});

// I'm not sure how it works, but it works...