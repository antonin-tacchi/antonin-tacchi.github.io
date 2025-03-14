<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validation basique
    if (!empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Destinataire de l'email (ton adresse email)
        $destinataire = "antonin.tacchi2005@gmail.com";  // Remplace par ton adresse email
        
        // Sujet de l'email
        $objet = "Nouveau message de contact";
        
        // Contenu de l'email
        $contenu = "Message envoyé depuis ton portfolio :\n\n";
        $contenu .= "Email de l'utilisateur : $email\n\n";
        $contenu .= "Message :\n$message\n";

        // En-têtes de l'email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Envoi de l'email
        if (mail($destinataire, $objet, $contenu, $headers)) {
           $message = "Message envoyé avec succès ! Je vous répondrais dans les plus brefs délais.";
        } else {
           $message = "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    } else {
        $message = "Veuillez remplir tous les champs correctement et vérifier votre adresse email.";
    }
}
?>