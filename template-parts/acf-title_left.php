<?php
    if( get_row_layout() == 'title_left' ) : 
        ?>
        <section class="title-left">
            <?php
            // Left Column
            if (have_rows('title_left_left') ) :
                while( have_rows('title_left_left') ) : the_row();
                    $title_left_titel = get_sub_field('title_left_titel');
                    $hat_weitere_links = get_sub_field('hat_weitere_links');
                    ?>
                    <div class="title-left__title title-left__title--profil">
                        <h3><?php echo $title_left_titel ?></h3>
                        <?php
                        if ($hat_weitere_links) :
                            if (have_rows('weitere_links') ) :
                                while( have_rows('weitere_links') ) : the_row();
                                    $link_block_titel = get_sub_field('link_block_titel');
                                    ?>
                                    <div class="title-left__title__box">
                                        <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/img/info-azul.svg" alt="" class="info-blue">
                                        <div class="links">
                                            <p class="links-title"><?php echo $link_block_titel ?></p>
                                            <?php
                                            if (have_rows('block_links') ) :
                                                while( have_rows('block_links') ) : the_row();
                                                    $link_text = get_sub_field('link_text');
                                                    $link_url = get_sub_field('link_url');
                                                    ?>
                                                    <a href=<?php echo $link_url ?> class="lineBlue-link"><?php echo $link_text ?></a>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                        else : null;
                        endif;
                        ?>
                    </div>
                    <?php
                endwhile;
            endif;

            // Right Column
            if (have_rows('title_left_right') ) :
                while( have_rows('title_left_right') ) : the_row();
                    $title_left_texte = get_sub_field('title_left_texte');
                    $title_left_button = get_sub_field('title_left_button');
                    ?>
                    <div class="title-left__description">
                        <div><?php if ($title_left_texte) echo $title_left_texte; else null; ?></div>
                        <?php
                        switch($title_left_button ) {
                            case 'kein_button' : 
                            null;
                            break;

                            case 'download_button' :
                            if (have_rows('download_button') ) :
                                while( have_rows('download_button') ) : the_row();
                                    $download_button_text = get_sub_field('download_button_text');
                                    $datei_zum_downloaden = get_sub_field('datei_zum_downloaden');
                                    ?>
                                    <a href="<?php echo $datei_zum_downloaden ?>" download="">
                                        <button class="main-button main-button--orange">
                                            <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/img/download.svg" alt="">
                                            <?php echo $download_button_text ?>
                                        </button>
                                    </a>
                                    <?php
                                endwhile;
                            endif;
                            break;

                            case 'url_button' :
                            if (have_rows('url_button') ) :
                                while( have_rows('url_button') ) : the_row();
                                    $url_button_text = get_sub_field('url_button_text');
                                    $url_button_link = get_sub_field('url_button_link');
                                    ?>
                                    <button class="main-button main-button--orange" onClick="window.open('<?php echo $url_button_link ?>')" >
                                        <?php echo $url_button_text ?>
                                    </button>
                                    <?php
                                endwhile;
                            endif;
                            break;
                        } ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </section>
        <?php
    endif;
?>