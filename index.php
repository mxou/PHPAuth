<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>PHP Auth</title>
</head>

<body>
    <form action="register.php" method="POST">
        <h1>Formulaire d'inscription</h1>
        <input type="text" name="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">S'inscrire</button>
    </form>
    <a href="login.php">Déja inscrit ? Se connecter</a>

</body>

</html>