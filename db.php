<?php
try {
    // Connexion db
    $db = new PDO("sqlite:" . __DIR__ . "/auth.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création table users si elle n'existe pas
    $db->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            username TEXT UNIQUE,
            password TEXT
        )
    ");

    echo "Base et table prêtes ✅";

} catch (Exception $e) {
    die("Erreur SQLite : " . $e->getMessage());
}