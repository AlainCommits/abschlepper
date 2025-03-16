<?php 
// Setze relative Pfade für die Hauptseite
$relative_path = '';
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>24/7 PANNENHILFE & ABSCHLEPPDIENST</h1>
        <h2 class="h4 mb-4">Schnell und zuverlässig - Wir sind immer für Sie da!</h2>
        <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg btn-custom">
            <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($companyData['features'] as $feature): ?>
                <div class="col-md-3 mb-4">
                    <div class="feature-box">
                        <i class="<?php echo $feature['icon']; ?>"></i>
                        <h3 class="h5"><?php echo $feature['title']; ?></h3>
                        <p><?php echo $feature['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Unsere Leistungen</h2>
            <p class="lead">Professionelle Pannenhilfe und Abschleppdienst in Ihrer Region</p>
        </div>
        
        <div class="row">
            <?php foreach($companyData['services'] as $service): ?>
                <div class="col-md-4 mb-4">
                    <div class="card service-card">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="<?php echo $service['icon']; ?>"></i>
                            </div>
                            <h3 class="h5 card-title"><?php echo $service['title']; ?></h3>
                            <p class="card-text"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4">Stecken geblieben? Wir helfen sofort!</h2>
                <p class="lead mb-4">Egal ob Panne, Unfall oder Transportproblem - unser Team ist rund um die Uhr für Sie im Einsatz.</p>
                <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-light btn-lg btn-custom">
                    <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Unser Einsatzgebiet</h2>
                <p class="lead mb-4">Wir sind in folgenden Regionen für Sie im Einsatz:</p>
                <ul class="service-area-list">
                    <?php foreach($companyData['serviceAreas'] as $area): ?>
                        <li><i class="fas fa-check"></i> <?php echo $area; ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="mt-3">* Auf Anfrage auch deutschlandweit verfügbar</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <h3 class="h4 mb-3">Jetzt anrufen!</h3>
                    <p>Wir sind 24/7 für Sie erreichbar und schnell bei Ihnen.</p>
                    <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg btn-custom">
                        <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
