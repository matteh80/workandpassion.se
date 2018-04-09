<?php 
global $detheme_config;
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php locate_template('lib/page-options.php',true);?>
<head>
<?php wp_head();?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100067149-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100067149-3');
  gtag('config', 'UA-100067149-4');
</script>
    <!-- Facebook Pixel Code -->

    <script>

      !function(f,b,e,v,n,t,s)

      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

        n.callMethod.apply(n,arguments):n.queue.push(arguments)};

        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

        n.queue=[];t=b.createElement(e);t.async=!0;

        t.src=v;s=b.getElementsByTagName(e)[0];

        s.parentNode.insertBefore(t,s)}(window,document,'script',

        'https://connect.facebook.net/en_US/fbevents.js');


      fbq('init', '624108044602744');

      fbq('track', 'PageView');

    </script>

    <noscript>

        <img height="1" width="1"

             src="https://www.facebook.com/tr?id=624108044602744&ev=PageView

&noscript=1"/>

    </noscript>

    <!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(is_detheme_home(get_post())?"home dt_custom_body":"dt_custom_body"); print $detheme_config['body_tag'];?>>
<?php if($detheme_config['page_loader'] && !is_404()):?>
<div class="modal_preloader"></div>
<?php endif;?>
<?php if(!is_404()): 

	/*** Boxed layout ***/
	$boxed_open_tag = "";
	$boxed_close_tag = "";
	$is_vertical_menu = false;
	$is_boxed = false;
	if($detheme_config['boxed_layout_activate']){
		$is_boxed = true;

		if ($detheme_config['dt-header-type']=='leftbar') {
			$is_vertical_menu = true;
			$boxed_open_tag = '<div class="vertical_menu_container"><div class="container dt-boxed-container">';
			$boxed_close_tag = '</div></div>';
		} else {
			$boxed_open_tag = '<div class="container dt-boxed-container">';
			$boxed_close_tag = '</div>';
		}
	}

	// write open tag when it's boxed and NOT vertical menu <div class="container dt-boxed-container">
	if ($is_boxed and !$is_vertical_menu) echo $boxed_open_tag; 
?>	
<input type="checkbox" name="nav" id="main-nav-check">
<div class="top-head<?php  print is_admin_bar_showing()?" adminbar-is-here":"";?><?php print $detheme_config['showtopbar']?" topbar-here":"";?> 
	<?php print $detheme_config['dt-header-type']=='leftbar'?" vertical_menu":"";?>">
<?php if($showtopbar=$detheme_config['showtopbar']): 
	locate_template('pagetemplates/top-bar.php',true);?>
<?php endif;?>

<?php if($showheader=$detheme_config['dt-show-header']): 
	locate_template('pagetemplates/heading.php',true);?>
<?php endif;?>
</div>
<?php 
	// write open tag when it's boxed and vertical menu <div class="vertical_menu_container"><div class="container dt-boxed-container">
	if ($is_boxed and $is_vertical_menu and !is_404()) echo $boxed_open_tag; 

endif; //if(!is_404())?>
<?php

	if($showbanner=$detheme_config['show-banner-area'] && !is_404() && !is_detheme_home(get_post())){
		locate_template('pagetemplates/banner.php',true);
	}
?>