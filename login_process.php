<?php 
require 'db.php';
session_start();

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header('Location: success.php');
        exit;
    } else {
        echo "Identifiants incorrects.";
    }
}

?>