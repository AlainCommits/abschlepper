<?php 
$relative_path = '../';
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Über uns</h1>
                <p class="lead">Ihr zuverlässiger Partner für Pannenhilfe und Fahrzeugtransport</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>Erfahrung und Kompetenz</h2>
                <p class="lead mb-4">Seit über 15 Jahren sind wir Ihr verlässlicher Partner auf Deutschlands Straßen.</p>
                <p>Als etablierter Abschleppdienst in <?php echo $companyData['address']; ?> stehen wir für:</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-check text-danger me-2"></i>
                        Professionelle Pannenhilfe rund um die Uhr
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-danger me-2"></i>
                        Schnelle Reaktionszeiten bei Notfällen
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-danger me-2"></i>
                        Modernste Ausrüstung und Fahrzeuge
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check text-danger me-2"></i>
                        Qualifizierte und erfahrene Mitarbeiter
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about-image rounded shadow-lg">
                    <!-- <img src="<?php echo $relative_path; ?>assets/images/about.jpg" alt="Unser Team" class="img-fluid rounded"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Warum uns wählen?</h2>
            <p class="lead">Unsere Werte und Versprechen an Sie</p>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-stopwatch display-4 text-danger"></i>
                        </div>
                        <h3 class="h4">Schneller Service</h3>
                        <p>Wir garantieren schnelle Reaktionszeiten und sind innerhalb kürzester Zeit bei Ihnen vor Ort.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-tools display-4 text-danger"></i>
                        </div>
                        <h3 class="h4">Professionelle Ausrüstung</h3>
                        <p>Unsere moderne Ausrüstung ermöglicht es uns, jede Situation effizient zu bewältigen.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-hand-holding-usd display-4 text-danger"></i>
                        </div>
                        <h3 class="h4">Faire Preise</h3>
                        <p>Wir bieten transparente und faire Preise ohne versteckte Kosten.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Area -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>Unser Servicegebiet</h2>
                <p class="lead mb-4">Wir sind in folgenden Regionen für Sie im Einsatz:</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <?php 
                            $areas = array_slice($companyData['serviceAreas'], 0, ceil(count($companyData['serviceAreas'])/2));
                            foreach($areas as $area): 
                            ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-danger me-2"></i>
                                    <?php echo $area; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <?php 
                            $areas = array_slice($companyData['serviceAreas'], ceil(count($companyData['serviceAreas'])/2));
                            foreach($areas as $area): 
                            ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-danger me-2"></i>
                                    <?php echo $area; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <p class="mt-3"><em>* Auf Anfrage auch deutschlandweit verfügbar</em></p>
            </div>
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded">
                    <h3 class="h4 mb-4">24/7 Notfallservice</h3>
                    <p>Benötigen Sie dringend Hilfe? Wir sind rund um die Uhr für Sie erreichbar!</p>
                    <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg">
                        <i class="fas fa-phone-alt me-2"></i>
                        <?php echo $companyData['phone']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4">Brauchen Sie Hilfe?</h2>
                <p class="lead mb-4">Unser Team steht Ihnen rund um die Uhr zur Verfügung!</p>
                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-light btn-lg btn-custom">
                    <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>
