<?php
require "db.php";

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([
        $_POST['username'],
        password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);
    header('Location: login.php');
    exit;
} else {
    echo "Veuillez remplir tous les champs !";
}

?>