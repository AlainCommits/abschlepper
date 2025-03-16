<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1><?php echo get_theme_mod('hero_title', '24/7 PANNENHILFE & ABSCHLEPPDIENST'); ?></h1>
        <h2 class="h4 mb-4"><?php echo get_theme_mod('hero_subtitle', 'Schnell und zuverlässig - Wir sind immer für Sie da!'); ?></h2>
        <a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="btn btn-danger btn-lg btn-custom">
            <i class="fas fa-phone-alt"></i> <?php echo get_theme_mod('phone_number'); ?>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php
            if(have_rows('features')):
                while(have_rows('features')): the_row();
                    ?>
                    <div class="col-md-3 mb-4">
                        <div class="feature-box">
                            <i class="<?php the_sub_field('icon'); ?>"></i>
                            <h3 class="h5"><?php the_sub_field('title'); ?></h3>
                            <p><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
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
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1
            );
            $services = new WP_Query($args);
            
            if($services->have_posts()):
                while($services->have_posts()): $services->the_post();
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body text-center">
                                <div class="card-icon">
                                    <i class="<?php the_field('icon'); ?>"></i>
                                </div>
                                <h3 class="h5 card-title"><?php the_title(); ?></h3>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4"><?php echo get_theme_mod('cta_title', 'Stecken geblieben? Wir helfen sofort!'); ?></h2>
                <p class="lead mb-4"><?php echo get_theme_mod('cta_text', 'Egal ob Panne, Unfall oder Transportproblem - unser Team ist rund um die Uhr für Sie im Einsatz.'); ?></p>
                <a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="btn btn-light btn-lg btn-custom">
                    <i class="fas fa-phone-alt"></i> <?php echo get_theme_mod('phone_number'); ?>
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
                    <?php
                    if(have_rows('service_areas', 'option')):
                        while(have_rows('service_areas', 'option')): the_row();
                            ?>
                            <li><i class="fas fa-check"></i> <?php the_sub_field('area'); ?></li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
                <p class="mt-3">* Auf Anfrage auch deutschlandweit verfügbar</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <h3 class="h4 mb-3">Jetzt anrufen!</h3>
                    <p>Wir sind 24/7 für Sie erreichbar und schnell bei Ihnen.</p>
                    <a href="tel:<?php echo get_theme_mod('phone_number'); ?>" class="btn btn-danger btn-lg btn-custom">
                        <i class="fas fa-phone-alt"></i> <?php echo get_theme_mod('phone_number'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
