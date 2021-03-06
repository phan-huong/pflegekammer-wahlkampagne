<?php 
/* Register Menus */
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'primary' => __( 'Navigation Bar'),
            'footer' => __( 'Footer Menu')
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

/* Add Extra Classes to Menus */
function add_classes_nav_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_nav_li', 1, 3);


/* Customizer */
require get_template_directory() . '/inc/customizer.php';


/* Remove the page editor */
add_action('init', 'init_remove_support', 100);

function init_remove_support()  {
    $post_type = 'page';
    remove_post_type_support($post_type, 'editor');
}


/* ACF Constructor Hover Module Effect */
add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    $siteURL = get_bloginfo('stylesheet_directory').'/assets/img/';
    ?>
    <style type="text/css">
        .imagePreview { position:absolute; right:100%; top:0px; z-index:999999; border:1px solid #f2f2f2; box-shadow:0px 0px 3px #b6b6b6; background-color:#fff; padding:20px;}
        .imagePreview img { width:300px; height:auto; display:block; }
        .acf-tooltip li:hover { background-color:#0074a9; }
    </style>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var waitForEl = function(selector, callback) {
                if (jQuery(selector).length) {
                    callback();
                } else {
                    setTimeout(function() {
                    waitForEl(selector, callback);
                    }, 100);
                }
            };
            $(document).on('click', 'a[data-name=add-layout]', function() {
                waitForEl('.acf-tooltip li', function() {
                    $('.acf-tooltip li a').hover(function() {
                        var imageTP = $(this).attr('data-layout');
                        $('.acf-tooltip').append('<div class="imagePreview"><img src="<?php echo $siteURL; ?>' + imageTP + '.png"></div>');
                    }, function() {
                        $('.imagePreview').remove();
                    });
                });
            })
        })
    </script>
<?php
}
?>

<?php
/* ACF Constructor Preview Image for General Page Header */
$id = 'group_6183b234ed671';
$img = 'page-hero';

add_action( 'acf/input/admin_head', function() use ($id, $img) {
    $siteURL = get_bloginfo('stylesheet_directory').'/assets/img/';
    ?>
    <style type="text/css">
        .field_group_img { 
            width: 100px;
            height: 50px;
            position: absolute;
            z-index: 100;
            transform: translateY(-7px);
            border: 2px solid #c3c4c7;
            margin-left: 10px;
        }
        .field_group_img:hover {
            width: 400px;
            height: 200px;
        }
        .field_group_h2 {
            margin-left: 110px!important;
        }
    </style>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            const $field_group = $('#acf-<?php echo $id; ?>');
            var $field_wrapper = $field_group.children().first();
            var $field_name = $field_wrapper.children().first();
            $field_name.before('<img class="field_group_img" src="<?php echo $siteURL; ?><?php echo $img; ?>.png">');
            $field_name.addClass("field_group_h2");
        })
    </script>
    <?php
});
?>

