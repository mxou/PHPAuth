<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Succès</title>
</head>

<body>
    <?php 

session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// echo "Bonjour ". htmlspecialchars($_SESSION['user']). ", connexion réussie";?>

    <h1>Connexion réussie !</h1>
    <p>Bonjour <?php echo htmlspecialchars($_SESSION['user'])?></p>
    <p>Cette page indique que la connexion a été réussie</p>
    <p>Vous avez exploité au maximum les possibilitées offerte par ce projet</p>
    <p>Vous pouvez rester la, mais honnêtement y a plus grand chose a faire</p>
    <p>Pour réitérer l'expérience, vous pouvez cliquer sur les boutons du bas pour être redirigé vers la page de
        connexion ou d'inscription</p>

    <div class="buttons_container">
        <a href="index.php">Page d'inscription</a>
        <a href="login.php">Page de connexion</a>
    </div>
</body>

</html>