#!/bin/bash

echo "PHP Installation für Mac mit Homebrew"
echo "======================================"

# Prüfen ob Homebrew installiert ist
if ! command -v brew &> /dev/null; then
    echo "Homebrew wird installiert..."
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
else
    echo "Homebrew ist bereits installiert"
    echo "Führe Homebrew Update aus..."
    brew update
fi

echo "Installiere PHP..."
brew install php

echo "PHP Version:"
php -v

echo "======================================"
echo "Installation abgeschlossen!"
echo "Starte nun den Development Server mit:"
echo "./dev-server.sh"
