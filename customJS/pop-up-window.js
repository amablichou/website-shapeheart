$(document).ready( function() {

    $('.close').click( function() {
        unloadPopupBox();
    });

    $('.pop-in').click(function() {
        loadPopupBox();
    });

    $('#runwith-btn').click(function() {
        loadPopupBox();
    });

    function unloadPopupBox() {    // TO Unload the Popupbox
        $('#pop-up').fadeOut(1000);
    }

    function loadPopupBox() {    // To Load the Popupbox
        $('#pop-up').fadeIn(1000);
    }
});