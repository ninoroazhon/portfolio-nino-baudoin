<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adresse email de réception
    $receiving_email_address = 'baudoinnino@gmail.com';

    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construction du contenu de l'email
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // En-têtes de l'email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'email
    if (mail($receiving_email_address, $subject, $email_content, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
