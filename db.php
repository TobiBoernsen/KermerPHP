<?php
// Daten für die Verbindung zur Datenbank
$host = 'localhost';
$db   = 'testDB'; // Hier den Namen deiner Datenbank eintragen
$user = 'root'; // Standard-Benutzername für XAMPP
$pass = ''; // Standardmäßig kein Passwort bei XAMPP
$charset = 'utf8mb4';

// DSN (Data Source Name) - enthält die Infos zur Datenbankverbindung
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Optionen für die PDO-Verbindung
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Fehler als Exceptions werfen
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Daten als assoziatives Array holen
    PDO::ATTR_EMULATE_PREPARES   => false, // Echte Prepared Statements benutzen
];

// Versuch, eine Verbindung zur Datenbank aufzubauen
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
