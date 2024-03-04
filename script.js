// Wir warten darauf, dass das gesamte Dokument geladen ist, bevor wir JavaScript ausführen
document.addEventListener("DOMContentLoaded", function() {
            // Wir suchen und speichern die Formulare und den Wechsel-Button in Variablen
            var loginForm = document.getElementById("login-form");
            var registrationForm = document.getElementById("registration-form");
            var switchButton = document.getElementById("switch-btn");

            // Wir fügen einen Event-Listener hinzu, der auf Klicks auf den Wechsel-Button reagiert
            switchButton.addEventListener("click", function() {
                        // Wenn das Login-Formular sichtbar ist, verstecken wir es und zeigen das Registrierungsformular
                        if (loginForm.style.display === "block") {
                            loginForm.style.display = "none";
                            registrationForm.style.display = "block";
                            switchButton.textContent = "Zu Login wechseln";
                        } else {
                            // Wenn das Registrierungsformular sichtbar ist, verstecken