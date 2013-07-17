<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<?php remove_filter( 'the_content', 'resize_vimeo' ); ?>
<div id="conteudo">
	<div id="content">
    <?php while (have_posts()) : the_post(); ?>
    <div id="titulo">
    	<h3><?php the_title(); ?></h3>
    </div>
    	<?php the_content(); ?>
     <?php endwhile; ?>
     </div>
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>