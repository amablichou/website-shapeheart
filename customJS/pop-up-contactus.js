$(document).ready( function() {

    $('.close').click( function() {
        unloadPopupBox();
    });

    $('.contactus').click(function() {
        loadPopupBox();
    });

    function unloadPopupBox() {    // TO Unload the Popupbox
        $('#contact-us').fadeOut(1000);
    }

    function loadPopupBox() {    // To Load the Popupbox
        $('#contact-us').fadeIn(1000);
    }
});