<?php
require 'db.php'; // Bindet das Skript für die Datenbankverbindung ein

session_start(); // Startet eine neue Sitzung oder setzt eine vorhandene fort

// Überprüfen, ob das Formular abgesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nutzerdaten aus dem Formular holen
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL-Befehl vorbereiten, um den Benutzer zu finden
    $sql = "SELECT id, username, password FROM user WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    // SQL-Befehl ausführen und nach dem Benutzernamen suchen
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    
// Nach erfolgreicher Authentifizierung
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['userid'] = $user['id'];
    $_SESSION['last_activity'] = time(); // Zeitstempel der letzten Aktivität speichern
    // Weiterleitung zur geschützten Startseite
    header('Location: home.php');
    exit;
    // Weiterleitung zur Startseite oder Dashboard
} else {
    echo "Falsche Anmeldedaten!";
}

// Automatisches Abmelden nach Inaktivität (z.B. 30 Minuten)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
    session_unset(); // Sitzungsvariablen entfernen
    session_destroy(); // Sitzung zerstören
}
$_SESSION['last_activity'] = time(); // Aktualisiere die letzte Aktivität
}
?>
