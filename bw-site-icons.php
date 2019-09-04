<?php
/**
 * Plugin Name: BW Site Icons
 * Plugin URI: https://blindemanwebsites.com/today-i-learned/
 * Github plugin URI: https://github.com/Blindeman/bw-site-icons
 * Description: Lightweight and minimal set of icons that one might need on a website
 * Version: 0.0.1
 * Author: Naomi Blindeman
 * Author URI: https://blindemanwebsites.com/
 * License: GNU General Public License
 * License URI: https://www.gnu.org/licenses/gpl.html
 */

defined( 'ABSPATH' ) or die;

//add a stylesheet with the icon font I like
class a_few_site_icons {
    /**
     * The whole reason this class is here is so I can play with them, feels a bit like overkill
     */
    function __construct(){
        add_action( 'wp_enqueue_scripts', array( $this, 'add_icon_styles') );
    }

    /**
     * Register & enqueue styles
     */
    public function add_icon_styles(){
        wp_register_style( 'bw-site-icons', plugins_url('bw-site-icons/css/entypo.css'), '', '', 'screen' );
        wp_enqueue_style( 'bw-site-icons' );
    }
}

//instantiate -- call the class to invoke the function inside it
new a_few_site_icons();