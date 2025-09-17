<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Connexion</title>
</head>

<body>
    <form action="login_process.php" method="POST">
        <h1>Formulaire de connexion</h1>
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
    <a href="index.php">Vous n'avez pas de compte ? Inscrivez vous !</a>


</body>

</html>