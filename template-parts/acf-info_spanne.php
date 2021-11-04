<?php
    if( get_row_layout() == 'info_spanne' ) : 
        $info_spanne_titel = get_sub_field('info_spanne_titel');
        $info_icon = get_sub_field('info_icon');
        $info_spanne_texte = get_sub_field('info_spanne_texte');
        ?>
        <div class="infoBig-wrapper">
            <section class="infoBig">
                <div class="infoBig__title">
                    <?php
                    if ($info_icon) : echo '<img src='.get_bloginfo('stylesheet_directory').'/assets/img/info-purple.svg alt="">'; else : null; endif;
                    ?>
                    <p><?php echo $info_spanne_titel ?></p>
                </div>
                <div class="infoBig__links__paragraph">
                    <?php
                    if ($info_spanne_texte) : echo '<div class="infoBig__paragraph">'.$info_spanne_texte.'</div>' ; else : null; endif;

                    if( have_rows('info_spanne_links') ) :
                        echo '<div class="infoBig__links"> ';
                        while( have_rows('info_spanne_links') ) : the_row();
                            $info_spanne_link_text = get_sub_field('info_spanne_link_text');
                            $info_spanne_link_url = get_sub_field('info_spanne_link_url');
                            ?>
                            <div class="infoBig__links__item">
                                <a href="<?php echo $info_spanne_link_url ?>"><?php echo $info_spanne_link_text ?></a>
                            </div>
                            <?php       
                        endwhile;
                        echo '</div>';
                    endif;
                    ?>
                </div>
            </section> 
        </div>       
        <?php
    endif;
?>