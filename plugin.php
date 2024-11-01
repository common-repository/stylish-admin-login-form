<?php
/**
 * Plugin Name: Stylish Admin Login Form
 * Description: Stylish Admin Login Form is a simple plugin that allows you to change the look of the WordPress login page.
 * Version: 1.0.0
 * Author: Zakaria Binsaifullah
 * Author URI: https://makegutenblock.com
 * Text Domain: stylish-admin-login-form
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

//  Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// require admin page 
require_once plugin_dir_path( __FILE__ ) . 'admin/lib/framework.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

/**
 * Define constant 
 */
define( 'SALF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Setting options
 */
$salf__options = get_option('salf__options');

$salf__logo_link = $salf__options['logo__url'];

$salf__logo_wrap = $salf__options['logo'];

$salf__logo = $salf__logo_wrap != '' ? $salf__logo_wrap['url'] : SALF_PLUGIN_URL . 'admin/img/wordpress-logo.svg';

$salf__logo_dimension = $salf__options['logo__dimension'];
$salf__logo_width     = $salf__logo_dimension['width'] != '' ? $salf__logo_dimension['width'] . 'px' : 'auto';
$salf__logo_height    = $salf__logo_dimension['height'] != '' ? $salf__logo_dimension['height'] . 'px' : 'auto';

$salf__logo_radius = $salf__options['logo__radius'] != '' ? $salf__options['logo__radius'] : 50;

// login form
$login__form_color = $salf__options['login__form_color'] != '' ? $salf__options['login__form_color'] : '#8b8888';
$login__form_bg    = $salf__options['login__form_bg'] != '' ? $salf__options['login__form_bg'] : '#101010';
$login__radius     = $salf__options['login__radius'] != '' ? $salf__options['login__radius'] : 5;
$salf__btn_color   = $salf__options['login__form_btn_color'] != '' ? $salf__options['login__form_btn_color'] : '#8b8888';
$salf__btn_bg      = $salf__options['login__form_btn_bg'] != '' ? $salf__options['login__form_btn_bg'] : '#222222';


// login page 
$salf__bg_type = $salf__options['login__page_bg_type'];

$salf__bg_image = ($salf__bg_type === 'image' && $salf__options['login__page_bg_image'] != '') ? $salf__options['login__page_bg_image']['url'] : '';

$salf__bg_color = $salf__options['login__page_bg_color'] != '' ? $salf__options['login__page_bg_color'] : '#222222';

// overlay 
$salf__overlay       = ( $salf__bg_type === 'image' &&  $salf__options['background__overlay'] != '' ) ? $salf__options['background__overlay'] : '0';
$salf__overlay_color = ( $salf__bg_type === 'image' &&  $salf__options['overlay__color'] != '' ) ? $salf__options['overlay__color'] : '';

/**
 * Login logo 
 */
function salf_login_logo() { 
    global $salf__logo, $salf__logo_height, $salf__logo_width, $salf__logo_radius;

    if ( isset ( $salf__logo )): 
    ?>
    <style type = "text/css">
        #login h1 a, .login h1 a {
            background-image : url(<?php echo esc_url($salf__logo) ?>);
            height           : <?php echo esc_attr( $salf__logo_height ) ;?>;
            width            : <?php echo esc_attr( $salf__logo_width ) ;?>;
            background-size  : 100% 100%;
            background-repeat: no-repeat;
            padding-bottom   : 0;
            border-radius    : <?php echo esc_attr($salf__logo_radius) ;?>%;
        }
    </style>
<?php
    endif;
}
add_action( 'login_enqueue_scripts', 'salf_login_logo' );

/**
 * Logo URL 
 */
function salf_login_logo_url() {
    global $salf__logo_link; 
    return $salf__logo_link;
}
add_filter( 'login_headerurl', 'salf_login_logo_url' );

/**
 * CSS Style
 */
 function salf_css_style(){
    global $login__form_bg, $login__radius, $login__form_color, $salf__bg_color, $salf__bg_image, $salf__overlay, $salf__overlay_color, $salf__btn_color, $salf__btn_bg;
    ?>
        <style>
            .login {
                background         : <?php echo esc_attr($salf__bg_color) ;?>;
                background-image   : url(<?php echo esc_attr($salf__bg_image) ;?>);
                background-size    : cover;
                background-position: center center;
                background-repeat  : no-repeat;
                position           : relative;
            }
            .login form .input {
                background: none !important;
            }
            <?php if ($salf__overlay === '1'): ;?>
                  .login:before {
                position  : absolute;
                top       : 0;
                left      : 0;
                width     : 100%;
                height    : 100%;
                background: <?php echo esc_attr($salf__overlay_color) ;?>;
                content   : "";
                z-index   : -1;
            }
            <?php endif ;?>
            #loginform {
                background-color: <?php echo esc_attr($login__form_bg) ;?>;
                border-radius   : <?php echo esc_attr($login__radius) ;?>px;
                border          : none !important;
            }
            #loginform label {
                color: <?php echo esc_attr($login__form_color) ;?>;
            }
            #wp-submit {
                color           : <?php echo esc_attr($salf__btn_color) ;?>;
                background-color: <?php echo esc_attr($salf__btn_bg) ;?>;
                border          : none;
            }
        </style>
    <?php
 }
 add_action( 'login_enqueue_scripts', 'salf_css_style' );