<?php 
    $firmenname = get_theme_mod('firmenname');
    $firmen_logo = get_theme_mod('firmen_logo');
    $ueberuns_footer = get_theme_mod('ueberuns_footer');
?>    
    <footer class="footer footer--wahl">
        <div class="footer__logo footer__logo--wahl">
            <img src=<?php echo $firmen_logo ?> alt="">
        </div>
        <div class="footer__social footer__social--wahl">
            <p>Hier kann man uns auch finden:</p>
            <div class="footer__social__icons footer__social__icons--wahl">
                <a href=""><img src=<?php echo get_bloginfo('stylesheet_directory').'/assets/img/facebook.svg' ?> alt="" class="socialIcon"></a>
                <a href=""><img src=<?php echo get_bloginfo('stylesheet_directory').'/assets/img/twit.svg' ?> alt="" class="socialIcon"></a>
                <a href=""><img src=<?php echo get_bloginfo('stylesheet_directory').'/assets/img/instagram.svg' ?> alt="" class="socialIcon"></a>
                <a href=""><img src=<?php echo get_bloginfo('stylesheet_directory').'/assets/img/youtube.svg' ?> alt="" class="socialIcon"></a>    
            </div>
        </div>
        <div class="footer__last footer__last--wahl">
            <div class="footer__last__item footer__last__item--wahl">
                <p>© 2021 Pflegekammer NRW</p>
            </div>
            <?php
            if (has_nav_menu('footer')) {
                wp_nav_menu( array( 
                    'theme_location' => 'footer', 
                    'container' => '',
                    'items_wrap' => '<ul class="footer__last__item footer__last__item--wahl">%3$s</ul>',
                    'add_li_class'  => ''
                    ) 
                );
            }
            ?>
        </div>

        <script src=<?php echo bloginfo('template_url').'/js/accordion.js' ?>></script>
        <!-- <script src=<?php //echo bloginfo('template_url').'/js/footer.js' ?>></script>
        <script src=<?php //echo bloginfo('template_url').'/js/menu.js' ?>></script>
        <script src=<?php //echo bloginfo('template_url').'/js/carousel.js' ?>></script> -->
        <?php wp_footer(); ?>

    </footer>
</body>
</html>