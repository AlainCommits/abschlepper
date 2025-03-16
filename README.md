# Abschleppdienst Website

Hier hast du die Anleitung zu deiner Seite. Ich hab sie dir als statische Website gebaut damit du sie einfach auf webgo hosten kannst. Die Bilder usw. lädst du dann einfach wie immer über FTP hoch. Ich weiß nich ob du sie auch bei wordpress hochladen kannst aber sie besteht nur aus HTML, CSS, Javascript nur fürs frontend und PHP also genauso wie eure Wordpressseiten. 


## Website lokal testen

### Unter Windows
1. Stell sicher, dass PHP installiert ist (Version 7.4 oder höher)
2. Doppelklick auf `dev-server.bat`
3. Öffne http://localhost:8000 im Browser
4. Zum Beenden STRG+C drücken

### Unter Linux/Mac
1. Stell sicher, dass PHP installiert ist (Version 7.4 oder höher)
2. Terminal im Projektordner öffnen
3. Eingeben: `chmod +x dev-server.sh`
4. Dann: `./dev-server.sh`
5. Öffne http://localhost:8000 im Browser
6. Zum Beenden STRG+C drücken

## Was ist wo?

```
abschleppdienst-website-2/
├── assets/              # Alle Medien, Styles und Scripts
│   ├── css/            # Deine Styles
│   ├── js/             # JavaScript
│   ├── images/         # Bilder kommen hier rein
│   └── fonts/          # Schriftarten
├── includes/           # Wichtige PHP-Dateien
│   ├── config.php      # Deine Firmendaten ein
│   ├── header.php      # Kopfbereich der Seite
│   └── footer.php      # Fußbereich der Seite
├── pages/              # Alle Unterseiten
├── index.php           # Startseite
└── README.md           # Diese Datei
```

## Firmendaten anpassen

1. Öffne `includes/config.php`
2. Hier findest du alle wichtigen Einstellungen:
   - Firmenname
   - Telefon & E-Mail
   - Servicegebiete
   - Dienstleistungen
   - Farben

## Bilder

Neue Bilder kommen in den `assets/images` Ordner. Ein paar Tipps:
- Nicht zu groß (max. 1920px breit)
- Aussagekräftige Dateinamen für Google
- Immer optimieren (z.B. mit TinyPNG)

## Was ist alles drin?

- Responsive Design (sieht auf allen Geräten gut aus)
- 24/7 Notfall-Kontaktbutton
- Kontaktformular
- DSGVO-konform
- SEO-optimiert
- Schnelle Ladezeiten

## SEO-Tipps

1. Trag deine Standorte in der `config.php` ein
2. Nutze gute Bildnamen und Beschreibungen
3. Füll alle Texte mit deinen lokalen Infos

## Auf den Server hochladen

1. Backup von allen Dateien machen
2. Alle Dateien per FTP (Also das was du Datenbank nennst) hochladen
3. Rechte setzen:
   - Dateien: 644
   - Ordner: 755

## Performance

Die Seite ist schon optimiert mit:
- Komprimiertem CSS/JS
- Bildoptimierung
- Browser-Caching
- GZIP-Kompression

## Probleme?

Wenn was nicht klappt:
1. Schau in die config.php - stimmen alle Daten?
2. Test die Seite in verschiedenen Browsern
3. Schau in die PHP-Fehlerprotokolle

## Lizenz

Kannst die Seite umbauen und wiederverwenden wie es dir passt