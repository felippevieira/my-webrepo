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
    <div id="agendacontent">
    <h3><?php single_cat_title(); ?></h3>
    <ul id="localidades">
                <?php query_posts('cat=19'); ?>
				<?php while (have_posts()) : the_post(); ?>
                	<li class="local">
                    	<div class="mapa">                       
                        <div class="googleiframe">
                        	<?php echo get_post_meta($post->ID, 'mapa', true); ?>
                         </div>  
                        </div>
                        <div class="localtexto">
                        	<p><strong><?php the_title(); ?></strong></p>
                            <?php the_content(); ?>
                        </div>
                    </li> 
                    <?php endwhile;?>                   
                 </ul>
  </div>
  </div>            
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>