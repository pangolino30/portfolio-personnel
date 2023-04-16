<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
mail("spitzerl@proton.me", "$sujet de $nom", $message, "Reply-To: $email")
?>