<?php /* The Silence is Gold!

Plugin Name: Torres Digital - eXtPlorer WP Plugin
Plugin URI: http://torresdigital.com.br/
Description: ❉ This plugin allows the <strong>eXtPlorer </strong> to be accessed directly through the Wordpress Panel. Simple as that, simple as life should be. Source Code on GitHub https://github.com/eXtPlorer/eXtPlorer | eXtPlorer  Site - https://eXtPlorer.net/
Version: 1.0.2020
Author: Torres Digital -Sites → Lojas Virtuais e e-Commerce
Author URI: https://facebook.com/torresdigital */

     /**
        *Torres Digital eXtPlorer  WP Plugin By Torres Digital ! // Source https://extreme-ip-lookup.com/
        *
        */
        add_action('admin_bar_menu', 'add_toolbar_items', 100);
        function add_toolbar_items($admin_bar){
            $admin_bar->add_menu( array(
                'id'    => 'extplorer-',
                'title' => ' ❉ eXtPlorer  - LOGIN',
                'href'  => '/wp-content/plugins/torres-digital-extplorer-wp-plugin-master/eXtplorer_2.1.13/',
                'meta'  => array(
                    'title' => __('* eXtPlorer  - LOGIN'),
                    'target' => '_blank',
                    'class' => 'extplorer-'
                ),
            ));
            $admin_bar->add_menu( array(
                'id'    => 'extplorer-sub-item',
                'parent' => 'extplorer',
                'title' => 'Torres Digital - facebook <i class="fa fa-facebook-square" aria-hidden="true"></i>',
                'href'  => 'https://www.facebook.com/torresdigital/',
                'meta'  => array(
                    'title' => __('Torres Digital - facebook'),
                    'target' => '_blank',
                    'class' => 'my_menu_item_class'
                ),
            ));
            $admin_bar->add_menu( array(
                'id'    => 'extplorer-second-sub-item',
                'parent' => 'extplorer',
                'title' => 'Torres Digital -Sites → Lojas Virtuais e e-Commerce',
                'href'  => 'https://www.torresdigital.tk/',
                'meta'  => array(
                    'title' => __('Torres Digital -Sites → Lojas Virtuais e e-Commerce'),
                    'target' => '_blank',
                    'class' => 'my_menu_item_class'
                ),
            ));
        }



/*
* Font AWesome
*/
function wmpudev_enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );
// Add a parent shortcut link


/* Style */
function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style', $plugin_url . 'assets/css/style.css' );
    wp_enqueue_style( 'style2', $plugin_url . 'assets/css/style2.css' );

}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

?>
