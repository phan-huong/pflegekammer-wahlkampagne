<?php
if( have_rows('accordion_tab_group') ) :  
    while( have_rows('accordion_tab_group') ) : the_row();
        $accordion_tab_group_id = get_sub_field( 'accordion_tab_group_id' );
        if( have_rows('accordion_tab') ) :             
            while( have_rows('accordion_tab') ) : the_row(); ?>
                <section class="downloadsNav">
                <div class="downloadsNav__items downloadsNav__items--faq">

                </div>
                </section>
            <?php endwhile;
        endif;
    endwhile;
endif; 
?>