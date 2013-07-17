<?php add_filter( 'show_admin_bar', '__return_false' ); ?>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/estilo.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="http://www.smigol.com.br/favicon.ico" >
<link rel="icon" href="http://www.smigol.com.br/favicon.ico" >
<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.jparallax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.events.frame.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>  
<!-- Coloque esta chamada de renderização conforme necessário -->
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function()
{
$('#parallax .parallax-layer')
.parallax({
mouseport: $('#parallax')
});
}); 
</script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
		 	pauseTime: 6000, // How long each slide will show
		 });
    });
</script>
<script type="text/javascript">
	jQuery(document).ready(function()
{
$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);

$('ul.tabNav a').click(function() {
	var curChildIndex = $(this).parent().prevAll().length + 1;
	$(this).parent().parent().children('.current').removeClass('current');
	$(this).parent().addClass('current');
	$(this).parent().parent().next('.tabContainer').children('.current').fadeOut('slow',function() {
		$(this).removeClass('current');
		$(this).parent().children('div:nth-child('+curChildIndex+')').fadeIn('slow',function() {
		$(this).addClass('current');
		});
	});
	return false;
	});
}); 
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body>
<div id="gar">
<div id="parallax" class="clear">
                <div class="parallax-layer" style="width:870px; height:495px;">
                    <img src="<?php bloginfo('template_url'); ?>/images/ball1.png" />
                </div>
                <div class="parallax-layer" style="width:805px; height:444px;">
                    <img src="<?php bloginfo('template_url'); ?>/images/ball2.png" />
                </div>
                <div class="parallax-layer" style="width:839px; height:433px;">
                    <img src="<?php bloginfo('template_url'); ?>/images/ball3.png" />
                </div>
                <div class="parallax-layer" style="width:870px; height:541px;">
                    <img src="<?php bloginfo('template_url'); ?>/images/ball4.png" />
                </div>
            </div>
            </div>
<div id="pagewrap">
	<div id="topo">
    	<div id="logo">
        	<h1><a href="http://www.smigol.com.br" title="Website oficial do SMIGOL">Website oficial do SMIGOL</a></h1>
        </div>
        <div id="wrapper">
                 <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_url'); ?>/images/banner1.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
            <?php query_posts('cat=3'); ?>
			<?php while (have_posts()) : the_post(); ?>
            	<span class="titulo"><?php the_title(); ?></span>
                <span class="texto"><?php the_advanced_excerpt('length=30'); ?></span>
                <a href="http://www.smigol.com.br/site/category/quem-e" class="saibamais">Saiba Mais</a>
             <?php endwhile;
			  	wp_reset_query();
			  ?>
            </div>
        </div>
        </div>
        <div id="menu">
 			<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
        </div>
    </div><!-- Fim do Topo -->