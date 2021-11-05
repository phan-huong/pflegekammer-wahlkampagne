<?php
    if( get_row_layout() == 'faq_accordion' ) : ?>
        <section class="accordion-wrapper">
            <?php
            if( have_rows('accordion_tab_group') ) : ?>
                <section class="downloadsNav">
                    <div class="downloadsNav__items downloadsNav__items--faq">
                    <?php
                    while( have_rows('accordion_tab_group') ) : the_row();
                        $tab_group_index = get_row_index();
                        if( have_rows('accordion_tab') ) :
                            while( have_rows('accordion_tab') ) : the_row();
                                $accordion_tab_icon = get_sub_field( 'accordion_tab_icon' );
                                $accordion_tab_titel = get_sub_field( 'accordion_tab_titel' ); ?>
                                
                                <button class="tab_btn" onclick="openTab(event, 'tab_group_<?php echo $tab_group_index ?>')" 
                                <?php echo ($tab_group_index == 1) ? 'id="defaultOpen"' : '' ?> >
                                    <img src=<?php echo $accordion_tab_icon ?> alt=""><?php echo $accordion_tab_titel ?>
                                </button>
                            <?php
                            endwhile;
                        endif;
                    endwhile;
                    ?>
                    </div>
                </section>
            <?php endif; 
            
            if( have_rows('accordion_tab_group') ) : ?>
                <section class="accordion">
                    <?php
                    while( have_rows('accordion_tab_group') ) : the_row();
                        $tab_group_index = get_row_index(); ?>
                        <div class="accordion__column" id="tab_group_<?php echo $tab_group_index ?>">
                        <?php
                        if( have_rows('accordion_item') ) :
                            while( have_rows('accordion_item') ) : the_row();
                                $accordion_item_titel = get_sub_field( 'accordion_item_titel' );
                                $accordion_item_inhalt = get_sub_field( 'accordion_item_inhalt' ); ?>
                                
                                <button class="accordion__column__item"><?php echo $accordion_item_titel ?></button> 
                                <div class="accordion__column__item__panel">
                                    <p><?php echo $accordion_item_inhalt ?></p>
                                </div>
                            <?php
                            endwhile;
                        endif; ?>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </section>
            <?php endif; ?>
        </section>
    <?php endif;
?>