<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et nettoyer les données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Valider les champs
    if (!empty($nom) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Préparer l'email
            $to = "phillipifeanyi64@gmail.com"; // Remplacez par votre adresse email
            $subject = "Nouveau message de contact de $nom";
            $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            // Envoyer l'email
            if (mail($to, $subject, $body, $headers)) {
                echo "<p style='color: green; font-size: 1.2em;'>Votre message a été envoyé avec succès. Merci de nous avoir contactés.</p>";
            } else {
                echo "<p style='color: red; font-size: 1.2em;'>Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer.</p>";
            }
        } else {
            echo "<p style='color: red; font-size: 1.2em;'>Veuillez entrer une adresse email valide.</p>";
        }
    } else {
        echo "<p style='color: red; font-size: 1.2em;'>Tous les champs sont obligatoires.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Phillip Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Hadja&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Hadja', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, #4CAF50, #2E7D32);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #FFD700;
        }

        .contact {
            padding: 50px 20px;
            text-align: center;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 50px auto;
        }

        .contact h2 {
            font-size: 2.5em;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group textarea {
            resize: none;
            height: 150px;
        }

        button {
            padding: 10px 20px;
            font-size: 1.2em;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2E7D32;
        }

        footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Phillip Digital</h1>
            <nav>
                <ul>
                    <li><a href="accueil.html">Accueil</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="apropos.html">À propos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="contact">
            <div class="container">
                <h2>Nous Contacter</h2>
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" placeholder="Écrivez votre message ici..." required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Phillip Digital. Tous droits réservés.</p>
        </div>
    </footer>
</body>
<html date_default_timezone_set tempnam key_exists            
