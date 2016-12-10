<?php

// Variables
$from = htmlspecialchars($_POST["email"]);
$to = "solen-jini@hotmail.fr";
$subject = htmlspecialchars($_POST["subject"]);
$message = htmlspecialchars($_POST["message"]);

// Saut de ligne
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $to)) {
    $br = "\r\n";
}
else {
    $br = "\n";
}

// Boundary
$boundary = "-----=".md5(rand());

// En-tête
$header = 'From:'.$from.$br;
$header.= 'Reply-to:'.$from.$br;
$header.= "MIME-Version: 1.0".$br;
$header.= 'Content-Type: multipart/alternative;'.$br.' boundary='.$br;

// Corps du message
$mail = $br."--".$boundary.$br; // ouverture du boundary
$mail.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$br; // message en texte et non HTML
$mail.= "Content-Transfer-Encoding: 8bit".$br; // encodé en 8 bits, donc avec les accents
$mail.= $br.$message.$br; // message lui-même
$mail.= $br."--".$boundary."--".$br; // fermeture du boundary

// Envoi du mail
$bool = mail($to,$subject,$message,$header);

?>
<meta http-equiv="refresh" content="0;<?php echo 'home.php?bool='.$bool; ?>'" />