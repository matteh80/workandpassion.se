<?php
defined('ABSPATH') or die();
if(!function_exists('is_plugin_active')){
      	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

require_once( get_template_directory().'/lib/tgm/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'theme_register_required_plugins' );

function theme_register_required_plugins() {

	$plugins = array(
		array(
			'name'     				=> esc_html__('Detheme Portfolio','detheme'),
			'slug'     				=> 'detheme-portfolio',
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/detheme-portfolio_1.0.4.zip', 
			'required' 				=> false,
		),
		array(
			'name'     				=> esc_html__('WPBakery Visual Composer','detheme'),
			'slug'     				=> 'js_composer',
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/js_composer_5.1.1.zip',
			'required' 				=> true,
		),
		array(
			'name'     				=> esc_html__('Detheme Visual Composer Add On','detheme'),
			'slug'     				=> 'zeyn_vc_addon',
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/zeyn_vc_addon_1.0.11.zip', 
			'required' 				=> false, 
		),
		array(
			'name'     				=> esc_html__('Detheme Megamenu Plugin','detheme'), 
			'slug'     				=> 'dt-megamenu', 
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/dt-megamenu.zip',
			'required' 				=> false,
		),
		array(
			'name'     				=> esc_html__('WooCommerce - excelling eCommerce','hnd'),
			'slug'     				=> 'woocommerce', 
			'required' 				=> false, 
		),
		array(
			'name'     				=> esc_html__('Contact Form 7','detheme'), 
			'slug'     				=> 'contact-form-7',
			'required' 				=> false,
		),
		array(
			'name'     				=> esc_html__('Zeyn Demo Packages','detheme'),
			'slug'     				=> 'zeyn-demo', 
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/zeyn-demo_1.0.1.zip', 
			'required' 				=> false, 
		),
		array(
			'name'     				=> esc_html__('Revolution Slider','detheme'),
			'slug'     				=> 'revslider',
			'source'   				=> 'http://detheme.com/repo/mnemonic/plugins/revslider-v5.4.1.zip',
			'required' 				=> true,
		),
		array(
			'name'     				=> esc_html__('Easy Google Fonts','detheme'),
			'slug'     				=> 'easy-google-fonts', 
			'source'   				=> 'http://downloads.wordpress.org/plugin/easy-google-fonts.zip', 
			'required' 				=> false, 
		),
		);


	// Change this to your theme text domain, used for internationalising strings

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'id'       		    => 'zeyn-tgmpa',         	// Text domain - likely want to be the same as your theme.
		'domain'       		=> 'tgmpa',         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_slug' 		=> 'themes.php', 				// Default parent menu slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
	);

	tgmpa( $plugins, $config );

}

add_action( 'after_setup_theme', 'detheme_gallery_setup' );
function detheme_gallery_setup() {
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}

function dtheme_startup() {

	global $dt_revealData, $detheme_Scripts,$detheme_Style;
	$dt_revealData=array();
	$detheme_Scripts=array();
	$detheme_Style=array();
	
	$locale = get_locale();

	$localelanguage=get_template_directory() . '/languages';

	if((is_child_theme() && !load_textdomain( 'detheme', untrailingslashit(get_stylesheet_directory()) . "/{$locale}.mo")) || !is_child_theme()){
		load_theme_textdomain('detheme',$localelanguage );
	}



	if($locale!=''){
		load_textdomain('tgmpa', get_template_directory() . '/languages/tgmpa-'.$locale.".mo");
	}	

	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	
	add_theme_support('menus');
	add_theme_support( 'post-formats', array( 'quote', 'video', 'audio', 'gallery', 'link' , 'image' , 'aside' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );


	register_nav_menus(array(
		'primary' => __('Top Navigation', 'detheme')
	));


	// sidebar widget
	register_sidebar(
		array('name'=> __('Sidebar Widget Area', 'detheme'),
			'id'=>'detheme-sidebar',
			'description'=> __('Sidebar Widget Area', 'detheme'),
			'before_widget' => '<div class="widget %s %s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>'
		));

	register_sidebar(
		array('name'=> __('Bottom Widget Area', 'detheme'),
			'id'=>'detheme-bottom',
			'description'=> __('Bottom Widget Area', 'detheme'),
			'before_widget' => '<div class="widget %s %s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="row"><div class="col col-sm-12 centered"><h3 class="widget-title">',
			'after_title' => '</h3></div></div>'

		));

	register_sidebar(
		array('name'=> __('Sticky Widget Area', 'detheme'),
			'id'=>'detheme-scrolling-sidebar',
			'description'=> __('Sticky Widget Area', 'detheme'),
			'before_widget' => '<div class="widget %s %s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="row"><div class="col col-sm-12 centered"><h3>',
			'after_title' => '</h3></div></div>'

		));

	if (is_plugin_active('woocommerce/woocommerce.php')) {

		register_sidebar(
			array('name'=> __('Shop Sidebar Widget Area', 'detheme'),
				'id'=>'shop-sidebar',
				'description'=> __('Sidebar will display on woocommerce page only', 'detheme'),
				'before_widget' => '<div class="widget %s %s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget_title">',
				'after_title' => '</h3>'
			));

		// Display 12 products per page.
		add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );
	}

  	is_detheme_demo();
	add_action('wp_enqueue_scripts', 'dtheme_scripts', 999);
	add_action('wp_head', 'dtheme_load_preloader', 10000);
  	add_action('wp_head',create_function('','global $detheme_config;print "<script type=\"text/javascript\">var themeColor=\'".$detheme_config[\'primary-color\']."\';</script>\n";'));
	add_action('wp_enqueue_scripts', 'dtheme_css_style',999);
	add_action('wp_print_scripts', 'dtheme_print_inline_style' );
	add_action('wp_footer','dt_lightbox_1st');
	add_action('wp_footer','get_exitpopup');
  	add_action('wp_footer',create_function('','global $detheme_Scripts;if(count($detheme_Scripts)) print "<script type=\"text/javascript\">\n".@implode("\n",$detheme_Scripts)."\n</script>\n";'),99998);
  	add_action('wp_head','get_seo_generator',1);
  	add_action('wp_head','get_meta_open_graph',1);
  	add_action('wp_footer','get_custom_code',9999999);
} 

add_action('after_setup_theme','dtheme_startup');


if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function theme_slug_render_title() {
		echo '<title>'.get_bloginfo( 'name', 'raw' ).' '.wp_title( '|', false, 'left' )."</title>\n";
	}

	add_action( 'wp_head', 'theme_slug_render_title',1);

endif;

function dtheme_css_style(){

	if(is_admin())
		return;

	global $detheme_config;

	wp_enqueue_style( 'styleable-select-style', get_template_directory_uri() . '/css/select-theme-default.css', array(), '0.4.0', 'all' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'detheme-style-ie', get_template_directory_uri() . '/css/ie9.css', array());
	wp_style_add_data( 'detheme-style-ie', 'conditional', 'IE 9' );

	add_filter( "get_post_metadata",'check_vc_custom_row',1,3);

	add_action('wp_footer',create_function('','global $dt_revealData,$detheme_Style; 
		if(count($dt_revealData)) { print @implode("\n",$dt_revealData);'
		.'print "<div class=\"md-overlay\"></div>\n";'
		.'print "<script type=\'text/javascript\' src=\''.get_template_directory_uri().'/js/classie.js\'></script>";'
		.'print "<script type=\'text/javascript\' src=\''.get_template_directory_uri().'/js/modal_effects.js\'></script>";}'
		.'if(count($detheme_Style)){print "<style type=\"text/css\">".@implode("\n",$detheme_Style)."</style>";}'
		.' print "<div class=\"jquery-media-detect\"></div>";'),99999);

}

function check_vc_custom_row($post=null,$object_id, $meta_key=''){

  if('_wpb_shortcodes_custom_css'==$meta_key){

    $meta_cache = wp_cache_get($object_id, 'post_meta');
    return '';
   }
}

function get_seo_generator(){

	if(is_admin())
		return;

	global $detheme_config;

	print "<meta name=\"theme\" content=\"Zeyn - Multipurpose WordPress Theme, Version: 1.1.3\">\n";

	$keyword=$detheme_config['meta-keyword'];
	$description=$detheme_config['meta-description'];
	$author=$detheme_config['meta-author'];
	if(''!=$keyword){
	print "<meta name=\"keywords\" content=\"".$keyword."\">\n";
	}
	if(''!=$description){
	print "<meta name=\"description\" content=\"".$description."\">\n";
	}
	if(''!=$author){
	print "<meta name=\"author\" content=\"".$author."\">\n";
	}
}

if ( ! function_exists( 'get_meta_open_graph' ) ) :
	function get_meta_open_graph(){
		global $detheme_config;

		if(is_admin() || defined('IFRAME_REQUEST'))
			return;

		if (isset($detheme_config['meta-og']) && !$detheme_config['meta-og'])
			return;

		$ogimage = "";
		if (function_exists('wp_get_attachment_thumb_url')) {
			$ogimage = wp_get_attachment_thumb_url(get_post_thumbnail_id(get_the_ID())); 
		}

		print '<meta property="og:title" content="'.get_the_title().'" />'."\n";
		print '<meta property="og:type" content="article"/>'."\n";
		print '<meta property="og:locale" content="en_US" />'."\n";
		print '<meta property="og:site_name" content="'.get_bloginfo('name').'"/>'."\n";
		print '<meta property="og:url" content="'.get_permalink().'" />'."\n";
		print '<meta property="og:description" content="'.sanitize_text_field(get_the_content()).'" />'."\n";
		print '<meta property="og:image" content="'.$ogimage.'" />'."\n";
		print '<meta property="fb:app_id" content="799143140148346" />'."\n";
	}
endif;

function get_custom_code(){
	if(is_admin())
		return;

	global $detheme_config;

	$footercode=$detheme_config['footer-code'];

	if(''!=$footercode){
		print $footercode;
	}

}

function dtheme_print_inline_style(){

	if(is_admin() || in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')))
		return;

	global $detheme_config;


	$css_banner=array();

	if(!empty($detheme_config['banner'])){
		$css_banner[]= 'background: url('.maybe_ssl_url($detheme_config['banner']).') no-repeat 50% 50%; max-height: 100%; background-size: cover;'; 
	}
	
	if(!empty($detheme_config['bannercolor'])){
		$css_banner[]='background-color: '.$detheme_config['bannercolor'].';'; 
	}

	if(!empty($detheme_config['dt-banner-height'])){
		$detheme_config['dt-banner-height']=(strpos($detheme_config['dt-banner-height'], "px") || strpos($detheme_config['dt-banner-height'], "%"))?$detheme_config['dt-banner-height']:$detheme_config['dt-banner-height']."px";
		$css_banner[]='min-height:'.$detheme_config['dt-banner-height'].";";
	}


	$css_highlight_bg = '';
	if(!empty($detheme_config['dt-slider-bg-image']['url'])){
		$css_highlight_bg .= '@media (max-width: 767px) { .section-banner .slide-carousel { background: url("'.$detheme_config['dt-slider-bg-image']['url'].'") !important; }} ';
		$css_highlight_bg .= '.section-banner .fullbg-img { background: url("'.$detheme_config['dt-slider-bg-image']['url'].'")  no-repeat scroll 50% 50% / cover  rgba(0, 0, 0, 0) !important; } ';
	}

	if(!empty($detheme_config['dt-slider-blur-bg-image']['url'])){
		$css_highlight_bg .= '@media (min-width: 768px) { .section-banner:before { background: url("'.$detheme_config['dt-slider-blur-bg-image']['url'].'") no-repeat scroll 50% 50% / cover  rgba(0, 0, 0, 0) !important; }} ';
	}


	print "<style type=\"text/css\">\n";

	print "@import url(". get_template_directory_uri() . "/style.css);\n";
	print "@import url(". get_template_directory_uri() . '/css/bootstrap.css);'."\n";	

	if(!wp_style_is('fontello-font'))
	print "@import url(". get_template_directory_uri() . '/css/fontello.css);'."\n";

	if (!empty($detheme_config['primary-font']['font-family'])) {
		if (isset($detheme_config['primary-font']['google']) && $detheme_config['primary-font']['google']=='true') {
			$fontfamily = str_replace(" ", "+", $detheme_config['primary-font']['font-family']);

			$subsets = '';

			if (!empty($detheme_config['primary-font']['subsets'])) {
				$subsets = '&subset='.$detheme_config['primary-font']['subsets'];
			}
			
			$fonturl = '//fonts.googleapis.com/css?family='.$fontfamily.':100,100italic,300,300italic,400,400italic,600,600italic,700,700italic'.$subsets;

			print "@import url(". esc_url($fonturl) . ');'."\n";
		}	
	} else {
		print "@import url(//fonts.googleapis.com/css?family=Istok+Web:100,100italic,300,300italic,400,400italic,600,600italic,700,700italic);\n";
	}


	if (!empty($detheme_config['secondary-font']['font-family'])) {
		if (isset($detheme_config['secondary-font']['google']) && $detheme_config['secondary-font']['google']=='true') {
			$fontfamily = str_replace(" ", "+",$detheme_config['secondary-font']['font-family']);
			$subsets = '';

			$fonturl = '//fonts.googleapis.com/css?family='.$fontfamily;

			if (!empty($detheme_config['secondary-font']['font-weight'])) {
				$fonturl.=":".$detheme_config['secondary-font']['font-weight'].','.$detheme_config['secondary-font']['font-weight'].'italic';
			}
			

			if (!empty($detheme_config['secondary-font']['subsets'])) {
				$fonturl.='&subset='.$detheme_config['secondary-font']['subsets'];
			}

			print "@import url(". esc_url($fonturl) . ');'."\n";
		}	
	} else {
		print "@import url(//fonts.googleapis.com/css?family=Dosis:,600);\n";
	}

	if (!empty($detheme_config['section-font']['font-family'])) {
		if (isset($detheme_config['section-font']['google']) && $detheme_config['section-font']['google']=='true') {
			$fontfamily = str_replace(" ", "+",$detheme_config['section-font']['font-family']);
			$fonturl = '//fonts.googleapis.com/css?family='.$fontfamily;

			if (!empty($detheme_config['section-font']['font-weight'])) {
				$fonturl.=":".$detheme_config['section-font']['font-weight'].','.$detheme_config['section-font']['font-weight'].'italic';
			}
			

			if (!empty($detheme_config['section-font']['subsets'])) {
				$fonturl.='&subset='.$detheme_config['section-font']['subsets'];
			}
			print "@import url(". esc_url($fonturl) . ');'."\n";

		}	
	}

	if (!empty($detheme_config['tertiary-font']['font-family'])) {
		if (isset($detheme_config['tertiary-font']['google']) && $detheme_config['tertiary-font']['google']=='true') {
			$fontfamily = str_replace(" ", "+", $detheme_config['tertiary-font']['font-family']);
			$fonturl = '//fonts.googleapis.com/css?family='.$fontfamily;

			if (!empty($detheme_config['tertiary-font']['font-weight'])) {
				$fonturl.=":".$detheme_config['tertiary-font']['font-weight'].','.$detheme_config['secondary-font']['font-weight'].'italic';
			}
			

			if (!empty($detheme_config['tertiary-font']['subsets'])) {
				$fonturl.='&subset='.$detheme_config['tertiary-font']['subsets'];
			}

			print "@import url(". esc_url($fonturl) . ');'."\n";
		}	
	} else {
		print "@import url(//fonts.googleapis.com/css?family=Merriweather:300,700);\n";
	}

	if(!defined('IFRAME_REQUEST')){
		print "@import url(". get_template_directory_uri() . '/css/detheme.css);'."\n";
	}

	if(is_child_theme()){
		print "@import url(". get_stylesheet_directory_uri() . '/css/mystyle.css);'."\n";
	}

	$blog_id="";

	if ( is_multisite()){
		$blog_id="-site".get_current_blog_id();
	}

	print "@import url(". get_template_directory_uri() . '/css/customstyle'.$blog_id.'.css);'."\n";

	if(count($css_banner)){

		print (count($css_banner))?"section#banner-section {".@implode("\n",$css_banner)."}\n".(!empty($detheme_config['dt-banner-height'])?"section#banner-section .container{height:".$detheme_config['dt-banner-height']."}\n":""):"";
		print ($detheme_config['title-color'])?"section#banner-section .page-title{color:".$detheme_config['title-color'].";}\n":"";
		print (isset($detheme_config['logo-top']) && $detheme_config['logo-top'])?"div#head-page #dt-menu ul li.logo-desktop a {margin-top:".$detheme_config['logo-top']."px;}\n":"";
		print (isset($detheme_config['logo-left']) &&  $detheme_config['logo-left'])?"div#head-page #dt-menu ul li.logo-desktop a {margin-left:".$detheme_config['logo-left']."px;}\n":"";
	}
	print (isset($detheme_config['body_background']))?$detheme_config['body_background']:"";

	print $css_highlight_bg;
	print "</style>\n";

	/* favicon handle */

	if(isset($detheme_config['dt-favicon-image']) && ''!==$detheme_config['dt-favicon-image']['url'] && !function_exists('wp_site_icon')){

		$favicon_url=$detheme_config['dt-favicon-image']['url'];
		print "<link rel=\"shortcut icon\" type=\"image/png\" href=\"".esc_url(maybe_ssl_url($favicon_url))."\">\n";
	}

}

function dtheme_scripts(){
	global $detheme_config;

    $suffix       = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

  	if(isset($detheme_config['js-code']) && !empty($detheme_config['js-code'])){
  		add_action('wp_footer',create_function('','global $detheme_config;if(isset($detheme_config[\'js-code\']) && !empty($detheme_config[\'js-code\'])) print "<script type=\"text/javascript\">".$detheme_config[\'js-code\']."</script>\n";'),99998);
	}

    wp_enqueue_script( 'waypoints' , get_template_directory_uri() . '/js/waypoints'.$suffix.'.js', array( ), '', false );
    wp_enqueue_script( 'modernizr' , get_template_directory_uri() . '/js/modernizr.js', array( ), '2.6.2', false );
    wp_enqueue_script( 'bootstrap' , get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.0', false );
    wp_enqueue_script( 'dt-script' , get_template_directory_uri() . '/js/myscript'.$suffix.'.js', array( 'jquery','bootstrap'), '1.0', false );
    wp_enqueue_script( 'styleable-select', get_template_directory_uri() . '/js/select'.$suffix.'.js', array(), '0.4.0', true );
    wp_enqueue_script( 'styleable-select-exec' , get_template_directory_uri() . '/js/select.init.js', array('styleable-select'), '1.0.0', true );
    wp_enqueue_script( 'jquery.appear' , get_template_directory_uri() . '/js/jquery.appear'.$suffix.'.js', array(), '', true );
    wp_enqueue_script( 'jquery.counto' , get_template_directory_uri() . '/js/jquery.counto'.$suffix.'.js', array(), '', true );

}

function dtheme_load_preloader(){

	global $detheme_config;
	if(!$detheme_config['page_loader'] || defined('IFRAME_REQUEST') || is_404() || (defined('DOING_AJAX') && DOING_AJAX))
		return '';
?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
	'use strict';
    $("body").queryLoader2({
        barColor: "#fff",
        backgroundColor: "#bebebe",
        percentage: true,
        barHeight: 1,
        completeAnimation: "grow",
        minimumTime: 500,
        onLoadComplete: function() {$('.modal_preloader').remove();}
        });
});
</script>

	<?php 
}

function get_exitpopup(){

	if(is_admin())
		return;

	global $detheme_config;

	if(isset($detheme_config['exitpopup']) && !empty($detheme_config['exitpopup'])){

            print '<div class="exitpopup" id="exitpopup">'.do_shortcode($detheme_config['exitpopup']).'</div>'."\n";
            print '<div class="exitpopup_bg" id="exitpopup_bg"></div>';

	}
}

function load_admin_stylesheet(){

	wp_enqueue_style( 'detheme-admin',get_template_directory_uri() . '/lib/css/admin.css', array(), '', 'all' );

}

add_action('admin_head','load_admin_stylesheet');

require_once( get_template_directory().'/lib/options.php'); // load bootstrap stylesheet and scripts
require_once( get_template_directory().'/lib/metaboxes.php'); // load custom metaboxes
require_once( get_template_directory().'/lib/custom_functions.php'); // load specific functions
require_once( get_template_directory().'/lib/widgets.php'); // load custom widgets
require_once( get_template_directory().'/lib/shortcodes.php'); // load custom shortcodes
require_once( get_template_directory().'/lib/updater.php'); // load easy update
require_once( get_template_directory().'/lib/fonts.php'); // load detheme font family
require_once( get_template_directory().'/lib/detheme_demo/one_click.php'); // load detheme one click installer


// Redefine woocommerce_output_related_products()
function woocommerce_output_related_products() {
	$args = array(
		'posts_per_page' => 4,
		'columns' => 1,
		'orderby' => 'rand'
	);

	woocommerce_related_products($args); // Display 4 products in rows of 1
}

// Redefine woocommerce_output_related_products()
function woocommerce_output_cross_sells($posts_per_page) {
	return 2;
}


add_filter( 'woocommerce_cross_sells_total', 'woocommerce_output_cross_sells' );

?>