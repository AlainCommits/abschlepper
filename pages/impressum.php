<?php 
$relative_path = '../';
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Impressum</h1>
                <p class="lead">Angaben gemäß § 5 TMG</p>
            </div>
        </div>
    </div>
</section>

<!-- Impressum Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h2>Angaben gemäß § 5 TMG</h2>
                        <p>
                            <?php echo $companyData['name']; ?><br>
                            <?php echo $companyData['address']; ?>
                        </p>

                        <h3 class="h4 mt-4">Kontakt</h3>
                        <p>
                            Telefon: <?php echo $companyData['phone']; ?><br>
                            E-Mail: <?php echo $companyData['email']; ?>
                        </p>

                        <!-- <h3 class="h4 mt-4">Umsatzsteuer-ID</h3>
                        <p>
                            Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:<br>
                            [Ihre USt-IdNr]
                        </p> -->

                        <!-- <h3 class="h4 mt-4">Aufsichtsbehörde</h3>
                        <p>
                            [Name der zuständigen Aufsichtsbehörde]<br>
                            [Anschrift der Aufsichtsbehörde]
                        </p> -->

                        <!-- <h3 class="h4 mt-4">Berufsbezeichnung und berufsrechtliche Regelungen</h3>
                        <p>
                            Berufsbezeichnung: Abschleppdienst<br>
                            Zuständige Kammer: [Name der Kammer]<br>
                            Verliehen in: Deutschland
                        </p> -->

                        <h3 class="h4 mt-4">Streitschlichtung</h3>
                        <p>
                            Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: 
                            <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr/</a>
                        </p>

                        <h3 class="h4 mt-4">Haftung für Inhalte</h3>
                        <p>
                            Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den 
                            allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht 
                            verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen 
                            zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.
                        </p>

                        <h3 class="h4 mt-4">Haftung für Links</h3>
                        <p>
                            Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. 
                            Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen.
                        </p>

                        <h3 class="h4 mt-4">Urheberrecht</h3>
                        <p>
                            Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen 
                            Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der 
                            Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="h4 mb-4">Kontakt aufnehmen</h3>
                        <p>Bei Fragen oder Anliegen können Sie uns gerne kontaktieren:</p>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-phone-alt text-danger me-2"></i>
                                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="text-dark text-decoration-none">
                                    <?php echo $companyData['phone']; ?>
                                </a>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-danger me-2"></i>
                                <a href="mailto:<?php echo $companyData['email']; ?>" class="text-dark text-decoration-none">
                                    <?php echo $companyData['email']; ?>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                <?php echo $companyData['address']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
