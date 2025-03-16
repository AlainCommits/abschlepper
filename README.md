# Abschleppdienst Website

Hier hast du die Anleitung zu deiner Seite. Ich hab sie dir als statische Website gebaut damit du sie einfach auf webgo hosten kannst. Die Bilder usw. lädst du dann einfach wie immer über FTP hoch. Ich denke du kannst sie auch bei wordpress hochladen, habe versucht sie als template dafür zu erstellen und sie besteht nur aus HTML, CSS, Javascript nur fürs frontend und PHP also genauso wie eure Wordpressseiten. Wenn alles klapp kannst du sie einfach darüber bearbeiten sonst lad dir vs code oder so runter.

Du kannst dir Seite zum entwickeln einfach auf einem lokelen server starten indem du doppelklick auf die dev-server.bat machst und dann auf http://localhost:8000 gehst.

# Variante 1: Direkt bei Webgo hosten

## 1. Seite hochladen

### Bei Webgo einloggen
1. Geh auf www.webgo.de
2. Mit deinen Zugangsdaten einloggen
3. "Hosting" auswählen

### FileZilla einrichten
1. FileZilla herunterladen und installieren
2. Neue Verbindung:
   - Server: Aus Webgo E-Mail kopieren
   - Benutzername: Aus Webgo E-Mail
   - Passwort: Aus Webgo E-Mail
3. Alle Dateien ins `htdocs` oder `www` ziehen

## 2. Firmendaten & Texte ändern

### Die wichtigsten Dateien
- `includes/config.php`: Hier stehen alle Texte
- `assets/images/`: Hier kommen alle Bilder rein 

### Firmendaten eintragen
1. `config.php` mit Editor (Notepad++ oder VS Code) öffnen
2. Suche nach:
   ```php
   // Firmendaten
   'name' => 'Name ändern',      // Dein Firmenname
   'phone' => '0123 456789',     // Deine Nummer
   'email' => 'mail@domain.de',  // Deine Email
   'address' => 'Straße ...',    // Deine Adresse
   ```
3. Text zwischen den Anführungszeichen ändern
4. Speichern und hochladen

### Einsatzgebiete ändern
1. In `config.php`:
   ```php
   'serviceAreas' => [
       'Hamburg',    // Diese Orte
       'Bremen',     // einfach anpassen
       'Hannover'    // oder neue hinzufügen
   ],
   ```

### Leistungen/Services
1. In `config.php`:
   ```php
   'services' => [
       [
           'title' => 'Pannenhilfe',     // Titel ändern
           'description' => '...',        // Text ändern
           'icon' => 'fa-wrench'         // Icon aus FontAwesome
       ],
   ```

## 3. Bilder austauschen

### Startseite
1. Diese Bilder brauchst du:
   - `hero-bg.jpg`: Großes Titelbild (1920x1080px)
   - `about-img.jpg`: Bild bei "Über uns" (800x600px)
   - `service-1/2/3.jpg`: Leistungsbilder (600x400px)

2. So bereitest du die Bilder vor:
   - Auf richtige Größe bringen
   - Auf tinypng.com kleiner machen
   - Genau so benennen wie die alten
   - Per FileZilla in `assets/images` hochladen

### Weitere Bilder
- `logo.png`: Dein Firmenlogo
- `favicon.ico`: Browser-Icon
- `team.jpg`: Team-Foto für "Über uns"

## 4. E-Mail-Formular & SSL

### Kontaktformular aktivieren
1. Im Webgo Control Panel:
   - "E-Mail" → "PHP Mail"
   - Deine E-Mail als Absender eintragen

### SSL einrichten
1. Im Webgo Control Panel:
   - "SSL/TLS" → "Let's Encrypt"
   - Domain auswählen
   - Zertifikat erstellen

# Variante 2: Mit WordPress

## 1. WordPress installieren

### Bei Webgo
1. Control Panel → "WordPress"
2. "Neue Installation"
3. Domain auswählen
4. Admin-Daten eingeben

## 2. Theme installieren

### Theme hochladen
1. WordPress Admin → "Design" → "Themes"
2. "Theme hochladen" klicken
3. `wordpress-theme` Ordner als ZIP hochladen
4. Theme aktivieren

## 3. Inhalte bearbeiten

### Firmendaten
1. "Theme Einstellungen" im Menü
2. Alle Daten eintragen:
   - Firmenname
   - Telefon
   - E-Mail
   - Adresse
   - Öffnungszeiten

### Bilder & Texte
1. Seiten im Menü:
   - "Startseite"
   - "Über uns" 
   - "Leistungen"
   - "Kontakt"
2. Mit WordPress Editor bearbeiten
3. Bilder über Mediathek hochladen

### Kontaktformular
1. Plugin "Contact Form 7" installieren
2. Neues Formular erstellen
3. Shortcode in Kontaktseite einfügen

