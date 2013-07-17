<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="conteudo">
	<div id="content">
    <h3><?php single_cat_title(); ?></h3>
    <?php while (have_posts()) : the_post(); ?>
    	<?php the_content(); ?>
     <?php endwhile; ?>
        <div id="galeriainterna">
        <div id="titulo">
        <h3>Confira a galeria de fotos</h3>
        </div>
        <?php query_posts('p=134'); ?>
		<?php while (have_posts()) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile;
		wp_reset_query();
		?>	
        </div>
     </div>
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>