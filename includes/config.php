<?php
// Company Information
$companyData = [
    'name' => 'Abschleppdienst Spuling',
    'phone' => '0178 836 9012',
    'phoneLink' => '+491788369012',
    'address' => 'Essen, Nordrhein-Westfalen',
    'email' => 'abschlepperspuling@outlook.de',
    'hours' => '24/7',
    'serviceAreas' => [
        'Essen',
        'Bochum',
        'Bottrop',
        'Gladbeck',
        'Gelsenkirchen',
        'Marl',
        'Recklinghausen',
        'Herne',
        'Düsseldorf',
        'Dortmund',
        'Witten'
    ],
    // Farben für die Seite in hexcodes 
    'colors' => [
        'primary' => '#dc3545',   
        'secondary' => '#343a40',  
        'accent' => '#ffc107'      
    ],
    // Bilder für die Seite - wenn du sie ändern willst musst du nur neue Bilder mit dem selben Namen in den assets/images packen und die alten löschen
    
    'images' => [
        'hero' => 'assets/images/hero.jpg', // Startseite Hauptbild
        'about' => 'assets/images/about.jpg', // aboutseite Bild
    ],
    // Services
    'services' => [
        [
            'title' => 'Pannenhilfe Deutschland',
            'description' => 'Hilfe für Ihre Mobilität, wo auch immer Sie sich in Deutschland befinden.',
            'icon' => 'fas fa-car-crash'
        ],
        [
            'title' => 'Fahrzeug steckt fest?',
            'description' => 'Im Schlamm, Sand oder auf einem Felsen stecken geblieben? Wir helfen Ihnen, wieder auf den Weg zu kommen.',
            'icon' => 'fas fa-car-side'
        ],
        [
            'title' => 'Autotransport',
            'description' => 'Zuverlässiger Transport Ihres Fahrzeugs, wohin Sie wollen.',
            'icon' => 'fas fa-car'
        ],
        [
            'title' => 'Punktion',
            'description' => 'Schnelle und effiziente Wiederherstellung im Falle einer unerwarteten Reifenpanne.',
            'icon' => 'far fa-dot-circle'
        ],
        [
            'title' => 'Batterie-Startservice',
            'description' => 'Mit unserem Startup-Service bringen Sie Ihr Fahrzeug schnell wieder in Fahrt.',
            'icon' => 'fas fa-car-battery'
        ],
        [
            'title' => 'Autorettung rund um die Uhr',
            'description' => 'Zuverlässige Autoaufbewahrung, immer verfügbar.',
            'icon' => 'fas fa-car-alt'
        ]
    ],
    // Features
    'features' => [
        [
            'title' => 'Ausgezeichneter Qualitätsservice',
            'description' => 'Unsere Dienstleistungen zeichnen sich durch beispiellose Qualität aus.',
            'icon' => 'fas fa-check-double'
        ],
        [
            'title' => 'Erreichbarkeit rund um die Uhr',
            'description' => 'Tag und Nacht für Sie verfügbar - 24/7 Service.',
            'icon' => 'fas fa-clock'
        ],
        [
            'title' => 'Schnell vor Ort',
            'description' => 'Schnelle Reaktionszeiten und professionelle Hilfe.',
            'icon' => 'fas fa-rocket'
        ],
        [
            'title' => 'Kundenorientierter Ansatz',
            'description' => 'Individueller Service nach Ihren Bedürfnissen.',
            'icon' => 'fas fa-people-arrows'
        ]
    ]
];
