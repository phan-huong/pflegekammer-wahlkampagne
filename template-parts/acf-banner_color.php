<?php
    if( get_row_layout() == 'banner_color' ) : 
        $banner_color_id = get_sub_field( 'banner_color_id' );
        $banner_color_bkg_color = get_sub_field( 'banner_color_bkg_color' );
        $banner_color_text_color = get_sub_field( 'banner_color_text_color' );
        ?>
        <section class="banner-color" id="banner_color_<?php echo $banner_color_id ?>">
            <span></span>
            <div class="banner-color__text">
                <?php
                $banner_color_titel_S = get_sub_field( 'banner_color_titel_S' );
                $banner_color_titel_L = get_sub_field( 'banner_color_titel_L' );
                $banner_color_beschreibung = get_sub_field( 'banner_color_beschreibung' );
                // Banner Color Titel klein
                if( $banner_color_titel_S ) echo '<p class="titleS">'.$banner_color_titel_S.'</p>'; else null;
                ?>
                <!-- Banner Color Titel groß und Beschreibung -->
                <h3 class="titleM"><?php echo $banner_color_titel_L ?></h3>
                <p class="description"><?php echo $banner_color_beschreibung ?></p>
            </div>

            <?php
            // Banner Color Button
            if (have_rows('banner_color_button') ) :
                while( have_rows('banner_color_button') ) : the_row();
                    $banner_color_button_text = get_sub_field('banner_color_button_text');
                    $banner_color_button_link = get_sub_field('banner_color_button_link');
                    $banner_color_button_farbe = get_sub_field('banner_color_button_farbe');
                    $banner_color_button_farbe_hover = get_sub_field('banner_color_button_farbe_hover');
                    
                    echo '<button class="button-circleSimple" onClick="window.open(`'.$banner_color_button_link.'`)">';
                        echo '<img src='.get_bloginfo('stylesheet_directory').'/assets/img/arrow-button-orange.svg alt="">'.$banner_color_button_text;
                    echo '</button>';
                endwhile;
            endif;
            ?>
            <span></span>
        </section>
        <style>
            <?php echo '#banner_color_'.$banner_color_id ?> {
                background-color: <?php echo $banner_color_bkg_color ?>;
            }
            <?php echo '#banner_color_'.$banner_color_id ?> > .banner-color__text {
                color: <?php echo $banner_color_text_color ?>;
            }
            <?php echo '#banner_color_'.$banner_color_id ?> > button {
                background-color: <?php echo $banner_color_button_farbe ?>;
            }
            <?php echo '#banner_color_'.$banner_color_id ?> > button:hover {
                background-color: <?php echo $banner_color_button_farbe_hover ?>;
            }
        </style>
        <?php
    endif;
?>

