# PHP Login- und Registrierungsskript

Dieses Projekt implementiert ein einfaches Login- und Registrierungssystem mit PHP und MySQL. Es ermöglicht Benutzern, sich zu registrieren und mit ihren Anmeldedaten in das System einzuloggen. 

## Voraussetzungen

Um dieses Projekt auszuführen, müssen Sie folgende Software installiert haben:

- PHP (empfohlen ist die Verwendung der neuesten Version)
- MySQL-Datenbank
- Webserver (z.B. Apache)

## Installation

1. **Klonen Sie das Repository** oder laden Sie die Dateien in Ihr Webserver-Verzeichnis herunter.

    ```
    git clone(https://github.com/TobiBoernsen/KermerPHP.git)
    ```

2. **Erstellen Sie eine MySQL-Datenbank** und importieren Sie das beigefügte Schema aus der `database.sql`-Datei (nicht im Code enthalten, muss separat erstellt werden).

3. **Konfigurieren Sie die Datenbankverbindung** in der Datei, indem Sie Ihre Datenbankdetails eintragen:

    ```php
    $host = "localhost"; // Ihr Datenbank-Host
    $user = "root"; // Ihr Datenbank-Benutzer
    $password = ""; // Ihr Datenbank-Passwort
    $dbname = "testDB"; // Der Name Ihrer Datenbank
    ```

4. **Öffnen Sie die Anwendung** in Ihrem Webbrowser, indem Sie die URL zu Ihrem Webserver und dem Verzeichnis, in dem sich das Skript befindet, eingeben.

## Funktionen

- **Registrierung neuer Benutzer**: Benutzer können ein Konto erstellen, indem sie einen Benutzernamen und ein Passwort angeben. Das Passwort wird mit MD5 verschlüsselt, was für Demonstrationszwecke ausreicht, aber für Produktionsumgebungen nicht empfohlen wird.
- **Benutzerlogin**: Registrierte Benutzer können sich mit ihren Anmeldedaten einloggen. Die Anwendung überprüft, ob der Benutzername und das Passwort in der Datenbank vorhanden sind.

## Sicherheitshinweise

- Dieses Projekt verwendet MD5 zur Verschlüsselung von Passwörtern, was als unsicher gilt. Für Produktionsumgebungen wird empfohlen, sicherere Hashing-Methoden wie `password_hash()` und `password_verify()` in PHP zu verwenden.
- Stellen Sie sicher, dass Sie Ihre Datenbankverbindungsinformationen sicher aufbewahren und SQL-Injection vermeiden, indem Sie Prepared Statements verwenden.

## Beitrag

Beiträge zu diesem Projekt sind willkommen. Bitte folgen Sie den üblichen Git-Praktiken, um Codeänderungen vorzuschlagen:

1. **Forken Sie das Repository**
2. **Erstellen Sie einen neuen Branch** für Ihre Änderungen
3. **Commiten Sie Ihre Änderungen**
4. **Pushen Sie Ihren Branch** und erstellen Sie einen Pull Request

## Lizenz

Dieses Projekt ist unter der MIT-Lizenz lizenziert. Weitere Informationen finden Sie in der `LICENSE`-Datei.

---

Dieses README dient als grundlegende Dokumentation, um mit dem PHP Login- und Registrierungsskript zu beginnen. Passen Sie die Anweisungen entsprechend Ihrem spezifischen Setup und Ihren Anforderungen an.
