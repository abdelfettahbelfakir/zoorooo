<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = nl2br(htmlspecialchars($_POST['message']));  // nl2br pour afficher les sauts de ligne dans le message

    // Affichage du message
    echo "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Message Envoyé</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }
            .container {
                background-color: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: auto;
            }
            h2 {
                text-align: center;
                color: #333;
            }
            p {
                font-size: 16px;
                color: #333;
            }
        </style>
    </head>
    <body>

        <div class='container'>
            <h2>Votre Message a été Envoyé</h2>
            <p><strong>Nom:</strong> $name</p>
            <p><strong>E-mail:</strong> $email</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </div>

    </body>
    </html>";
}
?>
