<?php
    if( get_row_layout() == 'picture_left' ) : 
        $picture_left_id = get_sub_field( 'picture_left_id' );
        $picture_left_img = get_sub_field( 'picture_left_img' );
        $has_picture_left_button = get_sub_field( 'has_picture_left_button' );
        echo '<section class="picture-left" id="picture_left_'.$picture_left_id.'">';
            $picture_left_position = get_sub_field( 'picture_left_position' );
            if ($picture_left_position == 'picture_left') :
                $order_img = 1;
                $order_text = 2;
            elseif ($picture_left_position == 'picture_right') :
                $order_img = 2;
                $order_text = 1;
            else : echo 'Bitte Bild Position auswählen';
            endif;
            ?>
            <img src="<?php echo $picture_left_img ?>" alt="">
            <?php
            if (have_rows('picture_left_texte') ) :
                while( have_rows('picture_left_texte') ) : the_row();
                    $picture_left_titel_S = get_sub_field('picture_left_titel_S');
                    $picture_left_titel_L = get_sub_field('picture_left_titel_L');
                    $picture_left_beschreibung = get_sub_field('picture_left_beschreibung');
                    $picture_left_bkg_color = get_sub_field('picture_left_bkg_color');
                    ?>
                    <div class="picture-left__text">
                        <div class="picture-left__text__title">
                            <p><?php echo $picture_left_titel_S ?></p>
                            <h3><?php echo $picture_left_titel_L ?></h3>
                        </div>
                        <div><?php echo $picture_left_beschreibung ?></div>
                        <?php
                    endwhile;
                endif;
                // Picture left Button
                if ($has_picture_left_button) :
                    if (have_rows('picture_left_button') ) :
                        while( have_rows('picture_left_button') ) : the_row();
                            $picture_left_button_text = get_sub_field('picture_left_button_text');
                            $picture_left_button_link = get_sub_field('picture_left_button_link');
                            $picture_left_button_farbe = get_sub_field('picture_left_button_farbe');
                            $picture_left_button_farbe_hover = get_sub_field('picture_left_button_farbe_hover');
                            
                            echo '<button class="main-button" onClick="window.open(`'.$picture_left_button_link.'`)">';
                                echo $picture_left_button_text;
                            echo '</button>';
                        endwhile;
                    endif;
                else : null;
                endif;
                ?>
            </div>
        </section>
        <style>
            <?php echo '#picture_left_'.$picture_left_id ?> img {
                order: <?php echo $order_img ?>
            }
            <?php echo '#picture_left_'.$picture_left_id ?> .picture-left__text {
                order: <?php echo $order_text ?>;
            }
            <?php echo '#picture_left_'.$picture_left_id ?> {
                background-color: <?php echo $picture_left_bkg_color ?>
            }
            <?php echo '#picture_left_'.$picture_left_id ?> .picture-left__text > button {
                background-color: <?php echo $picture_left_button_farbe ?>
            } 
            <?php echo '#picture_left_'.$picture_left_id ?> .picture-left__text > button:hover {
                background-color: <?php echo $picture_left_button_farbe_hover ?>
            } 
        </style>
    <?php
    endif;
?>