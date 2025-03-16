<footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Kontakt</h5>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="text-light"><?php echo $companyData['phone']; ?></a></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $companyData['address']; ?></p>
                    <p><i class="fas fa-clock"></i> <?php echo $companyData['hours']; ?> verfügbar</p>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Service-Gebiete</h5>
                    <ul class="list-unstyled footer-areas">
                        <?php foreach(array_slice($companyData['serviceAreas'], 0, 6) as $area): ?>
                            <li><i class="fas fa-check"></i> <?php echo $area; ?></li>
                        <?php endforeach; ?>
                        <li>... und weitere Gebiete</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Notfall?</h5>
                    <p>Wir sind rund um die Uhr für Sie da! Rufen Sie uns jetzt an:</p>
                    <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg">
                        <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-darker text-light py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $companyData['name']; ?>. Alle Rechte vorbehalten.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="/pages/impressum.php" class="text-light me-3">Impressum</a>
                    <a href="/pages/datenschutz.php" class="text-light">Datenschutz</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="/assets/js/main.js"></script>
</body>
</html>
