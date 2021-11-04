<?php 
function cbt_customize_register($wp_customize) {
    /** Index
         * GENERAL panel
         *      Firmeninfo
         *          Firmenlogo
         *          Firmenname
         *          Firmenbeschreibung
         *      FOOTER section
         *          Über uns text
         */

    /** ==================== GENERAL panel ==================== */
    $wp_customize->add_panel('general_panel', array(
        'title'         => __('Allgemein', 'pflegekammer'),
        'description'   => __('Allgemeine Einstellungen für Pflegekammer Theme', 'pflegekammer'),
        'capability'    => 'edit_theme_options',
        'priority'      => 0
    ));


    /* ------------------------- Firmeninfo -------------------------- */
    $wp_customize->add_section('general_section', array(
        'title'         => __('Firmeninfo', 'pflegekammer'),
        'description'   => sprintf(__('Allgemeine Firmeninformation', 'pflegekammer')),
        'panel'         => 'general_panel',
        'priority'      => 0
    ));

    // Firmenlogo
    $wp_customize->add_setting('firmen_logo', array(
        'default'       => get_bloginfo('stylesheet_directory').'/assets/img/logo.svg',
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'firmen_logo_control',
        array(
            'label'         => __('Firmenlogo', 'pflegekammer'),
            'section'       => 'general_section',
            'settings'      => 'firmen_logo',
            'priority'      => 0
        )
    ));

    // Firmenname
    $wp_customize->add_setting('firmenname', array(
        'default'       => get_bloginfo('name'),
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control('firmenname', array(
        'label'         => __('Firmenname', 'pflegekammer'),
        'section'       => 'general_section',
        'priority'      => 1
    ));

    // Firmenbeschreibung
    $wp_customize->add_setting('firmenbeschreibung', array(
        'default'       => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam duo dolores et ea rebum.',
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control('firmenbeschreibung', array(
        'label'         => __('Firmenbeschreibung', 'pflegekammer'),
        'description'   => sprintf(__('Kurze Beschreibungstexte zu Firma im Header', 'pflegekammer')),
        'section'       => 'general_section',
        'type'          => 'textarea',
        'priority'      => 2
    ));


    /* ------------------------- FOOTER Section -------------------------- */
    $wp_customize->add_section('footer_section', array(
        'title'         => __('Footer-Bereich', 'pflegekammer'),
        'description'   => sprintf(__('Einstellungen für den Footer-Bereich', 'pflegekammer')),
        'panel'         => 'general_panel',
        'priority'      => 1
    ));

    // Über uns text
    $wp_customize->add_setting('ueberuns_footer', array(
        'default'       => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.',
        'type'          => 'theme_mod'
    ));
    $wp_customize->add_control('ueberuns_footer', array(
        'label'         => __('Über uns Text', 'pflegekammer'),
        'section'       => 'footer_section',
        'type'          => 'textarea',
        'priority'      => 1
    ));
}

add_action('customize_register', 'cbt_customize_register');
?>