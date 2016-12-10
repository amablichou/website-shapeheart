<?php // for MailChimp API v3.0

include('MailChimp.php');  // path to API wrapper downloaded from GitHub

use \DrewM\MailChimp\MailChimp;

function storeAddress() {

    $key        = "ff1ebecfafd67786204b33a3cf51db76-us12";
    $list_id    = "16a24afed6";

    //liste shapeheart.com 16a24afed6
    //liste test api ea1c314b7b
    
    /*$merge_vars = array(
        'FNAME'     => $_POST['fname'],
        'LNAME'     => $_POST['lname']
    );*/

    $mc = new MailChimp($key);

    // add the email to your list
    $result = $mc->post('/lists/'.$list_id.'/members', array(
            'email_address' => $_POST['email'],
            //'merge_fields'  => $merge_vars,
            //'status'        => 'pending'     // double opt-in
             'status'     => 'subscribed'  // single opt-in
        )
    );
    return json_encode($result);
}

// If being called via ajax, run the function, else fail

if ($_POST['ajax']) { 
    echo storeAddress(); // send the response back through Ajax
} else {
    echo 'Method not allowed - please ensure JavaScript is enabled in this browser';
}
