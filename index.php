<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login und Registrierung</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
  <!-- Überschrift der Webseite -->
  <div class="header">
    <h1>Login und Registrierung</h1>
  </div>

  <!-- Login-Formular -->
  <form id="login-form" class="form">
    <label for="login-username">Benutzername:</label>
    <input type="text" id="login-username" name="username" required>

    <label for="login-password">Passwort:</label>
    <input type="password" id="login-password" name="password" required>

    <button type="submit">Login</button>
  </form>

  <!-- Registrierungs-Formular (versteckt beim Start) -->
  <form id="registration-form" class="form" style="display: none;">
    <label for="register-username">Benutzername:</label>
    <input type="text" id="register-username" name="username" required>

    <label for="register-password">Passwort:</label>
    <input type="password" id="register-password" name="password" required>

    <button type="submit">Registrieren</button>
  </form>

  <!-- Schaltfläche zum Wechseln zwischen Login und Registrierung -->
  <button id="switch-btn">Zu Registrierung wechseln</button>
</div>

<script src="script.js"></script>
</body>
</html>