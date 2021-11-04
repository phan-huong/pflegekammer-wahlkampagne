<?php 
    // $firmenname = get_theme_mod('firmenname');
    $firmen_logo = get_theme_mod('firmen_logo');
?>

<!-- Header Menu with Navigation Bar -->
<nav class="nav nav--wahl">
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu( array( 
            'theme_location' => 'primary', 
            'container' => '',
            'items_wrap' => '<ul class="nav__items">%3$s</ul>',
            'add_li_class'  => 'nav__items__itemWahl'
            ) 
        );
    }
    ?>
    <div class="nav__logo nav__logo--wahl">
        <a href=<?php echo get_bloginfo( 'url' ) ?>><img src=<?php echo $firmen_logo ?> alt=""></a>
    </div>
</nav>