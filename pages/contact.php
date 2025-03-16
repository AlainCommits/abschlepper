<?php 
$relative_path = '../';
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Kontakt</h1>
                <p class="lead">Wir sind rund um die Uhr für Sie erreichbar</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-4 mb-4">
                <div class="contact-info p-4 bg-light rounded">
                    <h3>Direktkontakt</h3>
                    <p class="text-danger fw-bold mb-4">24/7 Notfallnummer</p>
                    
                    <div class="mb-4">
                        <h4 class="h5 mb-3">Telefon</h4>
                        <p class="mb-2">
                            <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="text-dark text-decoration-none">
                                <i class="fas fa-phone-alt text-danger me-2"></i>
                                <?php echo $companyData['phone']; ?>
                            </a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="h5 mb-3">E-Mail</h4>
                        <p class="mb-2">
                            <a href="mailto:<?php echo $companyData['email']; ?>" class="text-dark text-decoration-none">
                                <i class="fas fa-envelope text-danger me-2"></i>
                                <?php echo $companyData['email']; ?>
                            </a>
                        </p>
                    </div>

                    <div class="mb-4">
                        <h4 class="h5 mb-3">Adresse</h4>
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            <?php echo $companyData['address']; ?>
                        </p>
                    </div>

                    <div>
                        <h4 class="h5 mb-3">Öffnungszeiten</h4>
                        <p class="mb-2">
                            <i class="fas fa-clock text-danger me-2"></i>
                            <?php echo $companyData['hours']; ?> erreichbar
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form p-4">
                    <h3 class="mb-4">Kontaktformular</h3>
                    <form action="send_mail.php" method="POST" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">E-Mail *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Betreff *</label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Bitte wählen Sie</option>
                                <option value="Allgemeine Anfrage">Allgemeine Anfrage</option>
                                <option value="Angebot anfordern">Angebot anfordern</option>
                                <option value="Rückruf erwünscht">Rückruf erwünscht</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Nachricht *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="privacy" required>
                            <label class="form-check-label" for="privacy">
                                Ich akzeptiere die <a href="<?php echo $relative_path; ?>pages/datenschutz.php">Datenschutzerklärung</a> *
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger">Nachricht senden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Unser Einsatzgebiet</h3>
                <p class="lead mb-4">Wir sind in folgenden Regionen für Sie im Einsatz:</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled service-area-list">
                            <?php foreach($companyData['serviceAreas'] as $area): ?>
                                <li><i class="fas fa-check text-danger"></i> <?php echo $area; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <p class="mt-3"><em>* Auf Anfrage auch deutschlandweit verfügbar</em></p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency CTA -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4">Notruf - Wir sind sofort für Sie da!</h2>
                <p class="lead mb-4">Rufen Sie uns jetzt an - schnelle & professionelle Hilfe garantiert!</p>
                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-light btn-lg btn-custom">
                    <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
