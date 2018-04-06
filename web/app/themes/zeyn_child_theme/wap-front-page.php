<?php
defined('ABSPATH') or die();
/**
 * Template Name: Wap front page
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Zeyn
 * @since Zeyn 1.0
 */

global $detheme_config,$post;

get_header();
set_query_var('sidebar','nosidebar');
$vertical_menu_container_class = ($detheme_config['dt-header-type']=='leftbar')?" vertical_menu_container":"";
?>
<!-- start content -->
<div <?php post_class('content'.$vertical_menu_container_class); ?>>
<div class="nosidebar">
<?php 
$i = 0;
$reveal_area_class = 'blank-reveal-area';
while ( have_posts() ) :
	$i++;
	if ($i==1) :
	?>

	<div class="<?php echo $reveal_area_class; ?>"></div>

	<?php endif; //if ($i==1) 
the_post();
?>
<div class="banner videobanner">
    <div id="bgvid" style='background-image: url("<?php bloginfo('stylesheet_directory'); ?>/images/man_startsidebild_mobil.jpg");'>
        <video playsinline autoplay muted loop poster="<?php bloginfo('stylesheet_directory'); ?>/images/man_startsidebild_mobil.jpg">
            <source src="<?php bloginfo('stylesheet_directory'); ?>/images/startfilm.mp4" type="video/mp4">
        </video>
    </div>
    <div class="header-text container-fluid">
        <h1 class="title text-center"><i>Rätt jobb</i> eller <i>rätt person?</i></h1>
        <h1 class="title text-center">Hitta båda här.</h1>
        <h3 class="subtitle text-center">Matchning värd varje krona och sekund.</h3>
        <div class="row buttons mt-5 w-100">
            <div class="col-12 col-md-3 offset-md-3 col-lg-2 offset-lg-4 mb-2 mb-md-0 text-center">
                <a href="https://app.workandpassion.se/login" class="btn btn-default btn-color-primary btn-login w-100 btn-lg btn-heading">Logga in</a>
            </div>
            <div class="col-12 col-md-3 col-lg-2 text-center">
                <a href="https://app.workandpassion.se/register" class="btn btn-default btn-ghost skin-light w-100 btn-lg btn-heading">Registrera dig</a>
            </div>
        </div>
    </div>
</div>
<?php if($detheme_config['dt-show-title-page']):?>
						<h2 class="post-title"><?php the_title();?></h2>
		<?php if($subtitle = get_post_meta( get_the_ID(), '_subtitle', true )):?>
						<h3 class="post-sub-title"><?php print $subtitle;?></h3>
		<?php endif;?>				
<?php endif;?>
						<div class="post-article">
<?php
	the_content();

 ?>
						</div>
<?php endwhile; ?>
			</div>
	</div>
<!-- end content -->
<?php
get_footer();
?>