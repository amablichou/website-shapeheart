/* Requirement */
/*
fadeStart : start of the fading
fadeUntil : end of the fading
fading : id of the item, whose background's opacity will change (usually : fading = $('#fading') )
rondLanguage : id of the language button (usually : RondLanguage = $('.rond-language') )
 */

var header = $('header'),
    headerHeight = header.height(),
    rondLanguage = $('.rond-language');

var fadeStart = headerHeight/3,
    fadeUntil=headerHeight,
    fading = $('#fading');

$(window).bind('scroll', function(){
    var offset = $(document).scrollTop(),
        opacity = 1,
        langue = 1;
    if( offset<=fadeStart ){
        opacity = 0;
        langue = 1;
    }
    else if( offset<=fadeUntil ){
        opacity = offset/fadeUntil;
        langue = 0;
    }
    else if (offset > fadeUntil) {
        opacity = 1;
        langue = 0;
    }
    fading.css('background','rgba(41,55,69,'+opacity+')')
    rondLanguage.css('background', 'rgba(252,15,38,' + langue + ')');
});