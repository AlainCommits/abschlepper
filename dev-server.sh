#!/bin/bash

# Überprüfen, ob PHP installiert ist
if ! command -v php &> /dev/null; then
    echo "PHP ist nicht installiert. Bitte installieren Sie PHP."
    exit 1
fi

echo "Starte PHP Development Server..."
echo "Die Website ist unter http://localhost:8000 erreichbar"
echo "Zum Beenden STRG+C drücken"

# Ins Verzeichnis des Scripts wechseln
SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd "$SCRIPT_DIR"

# Starte PHP Development Server im Document Root Modus
PHP_SERVER_COMMAND="php -S localhost:8000 -t ."
echo "Führe aus: $PHP_SERVER_COMMAND"
$PHP_SERVER_COMMAND
