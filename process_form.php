<?php$
ini_set('SMTP', 'smtp.elasticemail.com');
ini_set('smtp_port', 2525);
ini_set('sendmail_from', 'rafael.mmix.contact@gmail.com');
ini_set('auth_username', 'rafael.mmix.contact@gmail.com');
ini_set('auth_password', 'DD5802BAAC90F7545EC51917ADA36932E4CB')

SMTP = smtp.example.com         ; Remplacez par le serveur SMTP
smtp_port = 587                 ; Port pour TLS (587) ou SSL (465)
sendmail_from = your_email@example.com
auth_username = your_email@example.com
auth_password = your_password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $name2 = htmlspecialchars($_POST['name2']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "rafael.mmix.contact@gmail.com";
    $subject = "Nouveau message de $name $name2";
    $body = "Nom complet: $name2 $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès!";
    } else {
        echo "L'envoi de l'email a échoué.";
    }
}
?>
