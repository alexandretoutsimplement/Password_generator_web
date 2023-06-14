<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs soumises dans le formulaire
    $user = $_POST["user"];
    $motdepasse = $_POST["motdepasse"];

    // Valider les données (vous pouvez ajouter vos propres règles de validation)

    // Effectuer le traitement (par exemple, enregistrer les données dans une base de données)
    // ...

    // Rediriger l'utilisateur vers une page de succès ou afficher un message de confirmation
    header("Location: success.php");
    exit();
}
?>

<!DOCTYPE html>
<head>
    <title>Password Generator</title>
    <html lang="fr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titre">Welcome</h1>
    <br>
    <div class="form">
    <form action="" method="post" class="formulaire"></form>
        <input class="user" type="text" name="user" placeholder="Entrez votre nom d'utilisateur" id="user" required>
        <br>
        <input class="motdepasse" type="password" name="motdepasse" placeholder="Entrez votre mot de passe" id="mdp" required>
        <br>
        <button class="Connexion" type="submit">Connexion</button>
        <a href="Incription.html" target="_blank">
            <button class="inscription">S'inscrire</button>
        </a>
    </div>
    </form>
    <div class="présentation">
        <p>Ce site est un gestionnaire de mot de passe dans le cloud.
            Tu peux générer des mots de passe de la taille que tu souhaite et bien plus.
            Les mot de passe sont stocké dans une base de donné.</p>
    </div>
</body>
</html>