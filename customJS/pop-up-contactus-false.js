$(document).ready( function() {

    $('.close').click( function() {
        unloadPopupBox();
    });

    function unloadPopupBox() {    // TO Unload the Popupbox
        $('#contact-us-false').fadeOut(1000);
    }

    function loadPopupBox() {    // To Load the Popupbox
        $('#contact-us-false').fadeIn(1000);
    }

    $('.close-true').click(function() {
        unloadPopupBoxTrue();
    });

    loadPopupBox();
});