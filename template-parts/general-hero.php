<?php
    $page_id = get_queried_object_id();
    $has_hero_bescheibung = get_field('has_hero_bescheibung');
    $hero_titel_L = get_field('hero_titel_L');
    $hero_titel_S = get_field('hero_titel_S');
    echo '<div class="hero hero--wahl">';
        // Page Hero Image
        $hero_image = get_field( 'hero_image' );
        if( $hero_image ) echo '<img class="heroBack" src='.$hero_image.' alt="">'; else echo 'empty';
        ?>
        <!-- Page Hero Texte -->
        <div class="hero__text">
            <div class="hero__text__headline <?php echo $has_hero_bescheibung ? 'hero__text__headline--wahlIndex' : 'hero__text__headline--wahl' ?>">
                <h1><?php echo $hero_titel_L ?></h1>
                <h2><?php echo $hero_titel_S ?></h2>
            </div>
            <?php
            if ($has_hero_bescheibung) : 
                $hero_bescheibung = get_field('hero_bescheibung'); ?>
                <div class="hero__text__headline hero__text__headline--second">
                    <p><?php echo $hero_bescheibung ? $hero_bescheibung : 'Bitte Bescheibungstext einfügen' ?></p>
                </div>
            <?php else : null;
            endif;
            ?>
        </div>
        <?php
        // Page Hero Button
        if (have_rows('hero_button') ) :
            while( have_rows('hero_button') ) : the_row();
                $hero_button_text = get_sub_field('hero_button_text');
                $hero_button_link = get_sub_field('hero_button_link');
                $hero_button_farbe = get_sub_field('hero_button_farbe');
                $hero_button_farbe_hover = get_sub_field('hero_button_farbe_hover');
                ?>
                <style>
                    <?php echo '#page_hero_'.$page_id ?> {
                        background-color: <?php echo $hero_button_farbe ?>
                    }
                    <?php echo '#page_hero_'.$page_id ?>:hover {
                        background-color: <?php echo $hero_button_farbe_hover ?>;
                    }
                </style>
                <?php 
                echo '<button class="button-circle" id="page_hero_'.$page_id.'" onClick="window.open(`'.$hero_button_link.'`)">';
                    echo '<img src='.get_bloginfo('stylesheet_directory').'/assets/img/arrow-button.svg alt="">'.$hero_button_text;
                echo '</button>';
            endwhile;
        endif;
    echo '</div>';
?>