<?php 
    if( get_row_layout() == 'three_box_block' ) :
        echo '<section class="threeboxes-wrapper">';
            // Name des Blocks
            $three_box_block_name = get_sub_field( 'three_box_block_name' );
            echo 
            '<div class="mainTitle">';
                echo '<p>'.$three_box_block_name.'</p>';
                echo '<h3>';
                // Mitgliederbereich Titel
                $three_box_block_titel = get_sub_field( 'three_box_block_titel' );
                if( $three_box_block_titel ) echo $three_box_block_titel; else echo 'empty';
                echo '</h3>';
            echo '</div>';
            if( have_rows('three_box_block_inhalt') ):
                echo '<div class="threeboxes">';
                while( have_rows('three_box_block_inhalt') ) : the_row();
                    // Mitglieder Blocks
                    $icon = get_sub_field('icon');
                    $name = get_sub_field('name');
                    $block_titel = get_sub_field('block_titel');
                    $caption = get_sub_field('caption');
                    $link = get_sub_field('link');
                    echo '<div class="threeboxes__box">';
                        echo '<img src=' . $icon . ' alt="">';
                        echo '<p class="threeboxes__box__titleS">' . $name . '</p>';
                        echo '<p class="threeboxes__box__titleM">' . $block_titel . '</p>';
                        echo '<p class="threeboxes__box__description">' . $caption . '</p>';
                        echo '<a class="threeboxes__box__link" href=' . $link . '>Mehr erfahren</a>';
                    echo '</div>';
                endwhile;
                echo '</div>';
            else : echo 'No blocks';
            endif;
        echo '</section>';
    endif;
?>
       

