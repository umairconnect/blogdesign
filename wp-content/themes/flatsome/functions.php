<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

update_option( get_template() . '_wup_purchase_code', '*******' );
update_option( get_template() . '_wup_supported_until', '01.01.2030' );
update_option( get_template() . '_wup_buyer', 'nulled' );

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'post category Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );

function my_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'my_excerpt_length');

function change_excerpt( $more ) {
    if(post_type_exists('services')){
        return '';
    }
    return '...';
}
add_filter('excerpt_more', 'change_excerpt'); //Wordpress 2.8+