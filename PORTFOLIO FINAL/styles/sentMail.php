<?php
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page contact du site exemplesite.fr
        Nom : " . $_POST["nom"] . "
        Email : " . $_POST["email"] . "
        Sujet : " . $_POST["subject"] . "
        Message : " . $_POST["message"]; 
    $retour = mail("pedrassimartin@gmail.com", $_POST["sujet"], $message, "From:" . $_POST["email"]);
    if ($retour) {
        echo "<p> L'email a bien été envoyé. </p>"; 
    }
    }
?>

