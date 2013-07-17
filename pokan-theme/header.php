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
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="http://www.pokancomunicacao.com.br/favicon.ico" >
<link rel="icon" href="http://www.pokancomunicacao.com.br/favicon.ico" >
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:300' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.eislideshow.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.iconmenu.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- Coloque esta chamada de renderização conforme necessário -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
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
			$(function() {
				$('#sti-menu').iconmenu();
			});
</script>
<script type="text/javascript">
            jQuery(function() {
                jQuery('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 6000,
					titlesFactor		: 0
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


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38124122-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>
<body>
<div id="pagewrap">
    	<div class="center">
        <div id="topo">
    	<div id="logo">
        	<h1><a href="http://www.pokancomunicacao.com.br/site/">Pokan Comunicação Integrada</a></h1>
        </div>
        <div class="menu">
            <div class="item">
                <a class="link icon_mail"></a>
                <div class="item_content">
                    <h2>Contato</h2>
                    <p>
                        <a href="mailto:contato@pokancomunicacao.com.br">Email</a>
                        <a href="#">Facebook</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_help"></a>
                <div class="item_content">
                    <h2>Cases</h2>
                    <p class="desc">
                        <a href="http://www.pokancomunicacao.com.br/site/category/cases/">Veja nossos trabalhos</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_find"></a>
                <div class="item_content">
                    <h2>Serviços</h2>
                    <p>
                        <a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-design/">Design</a>
                        <a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-eventos/">Eventos</a>
                        <a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-web/">Web</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a href="http://www.pokancomunicacao.com.br/site/category/a-pokan/" class="link icon_photos"></a>
                <div class="item_content">
                    <h2>A Pokan</h2>
                    <p class="desc">
                       <a href="http://www.pokancomunicacao.com.br/site/category/a-pokan/"> Saiba mais sobre a empresa</a>
                    </p>
                </div>
            </div>
            <div class="item">
                <a href="http://www.pokancomunicacao.com.br/site/" class="link icon_home"></a>
                <div class="item_content">
                    <h2>Home</h2>
                    <p class="desc">
                       <a href="http://www.pokancomunicacao.com.br/site/">Página Principal</a>
                    </p>
                </div>
            </div>
        </div><!-- Fim menu --->
        </div><!-- Fim do topo -->