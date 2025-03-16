# Abschleppdienst Website

Hier hast du die Anleitung zu deiner Seite. Ich hab sie dir als statische Website gebaut damit du sie einfach auf webgo hosten kannst. Die Bilder usw. lädst du dann einfach wie immer über FTP hoch. Ich denke du kannst sie auch bei wordpress hochladen, habe versucht sie als template dafür zu erstellen und sie besteht nur aus HTML, CSS, Javascript nur fürs frontend und PHP also genauso wie eure Wordpressseiten. Wenn alles klapp kannst du sie einfach darüber bearbeiten sonst lad dir vs code oder so runter.

## Installation als PHP-Website

### Lokale Entwicklung
1. PHP installieren (7.4 oder höher):
```bash
./install-php.sh   # Für Mac
```

2. Development Server starten:
```bash
# Windows:
dev-server.bat

# Mac/Linux:
chmod +x dev-server.sh
./dev-server.sh
```

Die Website ist dann unter http://localhost:8000 erreichbar.

### Kontaktformular einrichten

#### Ohne WordPress
1. Email-Server auf deinem Hosting konfigurieren
2. In `includes/config.php` die Emailadresse anpassen
3. Das Formular sendet automatisch an diese Adresse

#### Mit WordPress
1. Plugin "Contact Form 7" installieren
2. Neues Formular erstellen mit diesen Feldern:
   - Name (Pflichtfeld)
   - Email (Pflichtfeld)
   - Telefon
   - Betreff
   - Nachricht
3. Formular-Shortcode in die contact.php einfügen

### WordPress Konvertierung

Um die Seite als WordPress-Theme zu nutzen:

1. Neues Theme-Verzeichnis erstellen:
```
wp-content/themes/abschleppdienst/
```

2. Dateien anpassen:
- index.php → front-page.php
- pages/about.php → page-about.php 
- pages/services.php → page-services.php
- etc.

3. WordPress-spezifische Funktionen hinzufügen:
- style.css mit Theme-Header
- functions.php für Menüs und Features
- header.php/footer.php anpassen

4. Inhalte in WordPress-Editor übertragen:
- Seiten anlegen für About, Services etc.
- Menüs in WordPress erstellen
- Widgets für Footer einrichten

### Hosting / Upload

1. Dateien per FTP hochladen
2. Dateirechte setzen:
   - Dateien: 644
   - Ordner: 755
   
3. .htaccess und PHP-Einstellungen prüfen


