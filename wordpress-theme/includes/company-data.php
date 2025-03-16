<?php
// Import der ursprünglichen Konfiguration
require_once dirname(__FILE__) . '/../../includes/config.php';

// WordPress Theme Optionen auf Basis der config.php
function sync_company_data_to_wordpress() {
    global $companyData;
    
    // Nur ausführen, wenn die Daten noch nicht in WordPress existieren
    if (!get_theme_mod('phone_number')) {
        set_theme_mod('phone_number', $companyData['phone']);
        set_theme_mod('phone_link', $companyData['phoneLink']);
        set_theme_mod('email', $companyData['email']);
        set_theme_mod('address', $companyData['address']);
        set_theme_mod('hours', $companyData['hours']);
        set_theme_mod('name', $companyData['name']);
        
        // Service-Gebiete als ACF Repeater-Feld
        if(function_exists('update_field') && !get_field('service_areas', 'option')) {
            $areas = array();
            foreach($companyData['serviceAreas'] as $area) {
                $areas[] = array('area' => $area);
            }
            update_field('service_areas', $areas, 'option');
        }
        
        // Services als Custom Post Type
        if(!empty($companyData['services'])) {
            foreach($companyData['services'] as $service) {
                $existing = get_page_by_title($service['title'], OBJECT, 'service');
                
                if(!$existing) {
                    $post_data = array(
                        'post_title'    => $service['title'],
                        'post_content'  => $service['description'],
                        'post_status'   => 'publish',
                        'post_type'     => 'service'
                    );
                    
                    $post_id = wp_insert_post($post_data);
                    
                    if($post_id && function_exists('update_field')) {
                        update_field('icon', $service['icon'], $post_id);
                    }
                }
            }
        }
    }
}

// Synchronisation beim Theme Aktivieren
add_action('after_switch_theme', 'sync_company_data_to_wordpress');
