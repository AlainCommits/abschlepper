<?php 
$relative_path = '../';
require_once '../includes/header.php'; 
?>

<!-- Page Header -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Unsere Leistungen</h1>
                <p class="lead">Professionelle Pannenhilfe und Abschleppdienst - rund um die Uhr für Sie im Einsatz</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Detail Section -->
<section class="py-5">
    <div class="container">
        <?php foreach($companyData['services'] as $index => $service): ?>
            <div class="row align-items-center <?php echo $index % 2 ? 'flex-row-reverse' : ''; ?> mb-5">
                <div class="col-lg-6">
                    <div class="p-4">
                        <div class="display-4 text-danger mb-3">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                        <h2><?php echo $service['title']; ?></h2>
                        <p class="lead"><?php echo $service['description']; ?></p>
                        <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg mt-3">
                            <i class="fas fa-phone-alt"></i> Jetzt anrufen
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-features bg-light p-4 rounded">
                        <h3 class="h5 mb-4">Was wir bieten:</h3>
                        <ul class="list-unstyled">
                            <?php 
                            // Service-specific features
                            $features = [
                                'Pannenhilfe' => [
                                    '24/7 Verfügbarkeit',
                                    'Schnelle Reaktionszeit',
                                    'Professionelles Team',
                                    'Faire Preise'
                                ],
                                'Fahrzeugbergung' => [
                                    'Spezialausrüstung verfügbar',
                                    'Erfahrene Bergungsprofis',
                                    'Sichere Bergung',
                                    'Für alle Fahrzeugtypen'
                                ],
                                'Autotransport' => [
                                    'Sicherer Transport',
                                    'Versicherter Transport',
                                    'Deutschlandweiter Service',
                                    'Alle Fahrzeuggrößen'
                                ]
                            ];
                            
                            // Get features for current service or use default features
                            $currentFeatures = $features[$service['title']] ?? [
                                'Schneller Service',
                                'Professionelle Ausführung',
                                'Faire Preise',
                                'Zuverlässige Arbeit'
                            ];
                            
                            foreach($currentFeatures as $feature):
                            ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4">Benötigen Sie Hilfe?</h2>
                <p class="lead mb-4">Unser Team steht Ihnen rund um die Uhr zur Verfügung - schnell und zuverlässig!</p>
                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-light btn-lg btn-custom">
                    <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Unser Einsatzgebiet</h2>
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

<?php require_once '../includes/footer.php'; ?>
