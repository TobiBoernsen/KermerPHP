<?php
require 'db.php'; // Bindet das Skript für die Datenbankverbindung ein

// Überprüfen, ob das Formular abgesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nutzerdaten aus dem Formular holen
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Passwort verschlüsseln
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Überprüfen, ob der Benutzername lang genug ist
    if (strlen($username) < 5) {
        echo "Benutzername muss länger als 4 Zeichen sein.";
    } else {
        // SQL-Befehl vorbereiten, um den neuen Benutzer einzufügen
        $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
        $stmt= $pdo->prepare($sql);
        // SQL-Befehl ausführen und Benutzerdaten einfügen
        $stmt->execute([$username, $hashed_password]);
        header('Location: index.html');
        exit;
    }
}
?>
