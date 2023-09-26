<?php
/*
 * Plugin Name:       Kami Kerja Remote
 * Plugin URI:        https://github.com/kamikerjaremote/kkr
 * Description:       Kami Kerja Remote WordPress Plugin
 * Version:           0.0.1
 * Author:            Agung Sundoro
 * Author URI:        https://github.com/kamikerjaremote
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * SOFTWARE LICENSE INFORMATION
 *
 * For detailed information regards to the licensing of
 * this software, please review the license.txt
*/

/**
 * Add shortcode for partner (automix.ai)
 */
add_shortcode('kkr_partner_automix_builder', function( $atts ){
    ob_start();
        include plugin_dir_path( __FILE__ ) . 'src/View/Automix/builder.php';
    return ob_get_clean();
});