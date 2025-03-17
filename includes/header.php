<?php 
require_once dirname(__FILE__) . '/init.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyData['name']; ?> - Pannenhilfe & Abschleppdienst 24/7</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            max-height: 50px; /* Control logo height */
            width: auto;
        }
    </style>
</head>
<body>
    <!-- Emergency Call Button -->
    <div class="emergency-call d-block d-lg-none">
        <a href="tel:<?php echo $companyData['phoneLink']; ?>" class="btn btn-danger btn-lg">
            <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
        </a>
    </div>

    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $relative_path ?? ''; ?>index.php">
                    <img src="../assets/images/logo.jpeg" alt="<?php echo $companyData['name']; ?>" class="img-fluid" style="max-height: 50px;">
                    <h3>Abschleppdienst Spuling</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/services.php">Leistungen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/about.php">Über uns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/contact.php">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger ms-lg-2" href="tel:<?php echo $companyData['phoneLink']; ?>">
                                <i class="fas fa-phone-alt"></i> <?php echo $companyData['phone']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
