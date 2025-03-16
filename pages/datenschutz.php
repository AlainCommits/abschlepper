<?php 
$relative_path = '../';
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Datenschutzerklärung</h1>
                <p class="lead">Informationen zum Datenschutz gemäß DSGVO</p>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h2>1. Datenschutz auf einen Blick</h2>
                        
                        <h3 class="h4 mt-4">Allgemeine Hinweise</h3>
                        <p>
                            Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten 
                            passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie 
                            persönlich identifiziert werden können.
                        </p>

                        <h3 class="h4 mt-4">Datenerfassung auf dieser Website</h3>
                        <h4 class="h5 mt-3">Wer ist verantwortlich für die Datenerfassung auf dieser Website?</h4>
                        <p>
                            Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten 
                            können Sie dem Impressum dieser Website entnehmen.
                        </p>

                        <h4 class="h5 mt-3">Wie erfassen wir Ihre Daten?</h4>
                        <p>
                            Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich 
                            z.B. um Daten handeln, die Sie in ein Kontaktformular eingeben.
                        </p>
                        <p>
                            Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere 
                            IT-Systeme erfasst. Das sind vor allem technische Daten (z.B. Internetbrowser, Betriebssystem oder 
                            Uhrzeit des Seitenaufrufs).
                        </p>

                        <h3 class="h4 mt-4">2. Allgemeine Hinweise und Pflichtinformationen</h3>
                        
                        <h4 class="h5 mt-3">Datenschutz</h4>
                        <p>
                            Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln 
                            Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften 
                            sowie dieser Datenschutzerklärung.
                        </p>

                        <h4 class="h5 mt-3">Hinweis zur verantwortlichen Stelle</h4>
                        <p>
                            Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:
                        </p>
                        <p>
                            <?php echo $companyData['name']; ?><br>
                            <?php echo $companyData['address']; ?><br>
                            Telefon: <?php echo $companyData['phone']; ?><br>
                            E-Mail: <?php echo $companyData['email']; ?>
                        </p>

                        <h3 class="h4 mt-4">3. Datenerfassung auf dieser Website</h3>
                        
                        <h4 class="h5 mt-3">Kontaktformular</h4>
                        <p>
                            Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem 
                            Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der 
                            Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht 
                            ohne Ihre Einwilligung weiter.
                        </p>

                        <h4 class="h5 mt-3">Server-Log-Dateien</h4>
                        <p>
                            Der Provider der Seiten erhebt und speichert automatisch Informationen in so genannten 
                            Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:
                        </p>
                        <ul>
                            <li>Browsertyp und Browserversion</li>
                            <li>Verwendetes Betriebssystem</li>
                            <li>Referrer URL</li>
                            <li>Hostname des zugreifenden Rechners</li>
                            <li>Uhrzeit der Serveranfrage</li>
                            <li>IP-Adresse</li>
                        </ul>

                        <h3 class="h4 mt-4">4. Analyse-Tools und Werbung</h3>
                        <p>
                            Diese Website verwendet keine Tracking- oder Analysewerkzeuge.
                        </p>

                        <h3 class="h4 mt-4">5. Plugins und Tools</h3>
                        
                        <h4 class="h5 mt-3">Google Maps</h4>
                        <p>
                            Diese Seite nutzt über eine API den Kartendienst Google Maps. Anbieter ist die Google Ireland 
                            Limited („Google"), Gordon House, Barrow Street, Dublin 4, Irland. Zur Nutzung der Funktionen 
                            von Google Maps ist es notwendig, Ihre IP-Adresse zu speichern. Diese Informationen werden in 
                            der Regel an einen Server von Google in den USA übertragen und dort gespeichert.
                        </p>

                        <h3 class="h4 mt-4">6. Ihre Rechte</h3>
                        <p>
                            Sie haben jederzeit das Recht:
                        </p>
                        <ul>
                            <li>Auskunft über Ihre bei uns gespeicherten Daten zu erhalten</li>
                            <li>Diese Daten berichtigen zu lassen</li>
                            <li>Die Löschung dieser Daten zu verlangen</li>
                            <li>Die Verarbeitung dieser Daten einschränken zu lassen</li>
                            <li>Der Verarbeitung zu widersprechen</li>
                            <li>Diese Daten übertragen zu lassen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Kontakt zum Datenschutzbeauftragten</h3>
                        <p>Bei Fragen zum Datenschutz können Sie sich gerne an uns wenden:</p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-envelope text-danger me-2"></i>
                                <a href="mailto:<?php echo $companyData['email']; ?>" class="text-dark text-decoration-none">
                                    <?php echo $companyData['email']; ?>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt text-danger me-2"></i>
                                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="text-dark text-decoration-none">
                                    <?php echo $companyData['phone']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
