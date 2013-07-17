<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<div id="conteudo-interna">

            <div class="breadcrumbs">
   				 <?php if(function_exists('bcn_display'))
    					{
       					 bcn_display();
    			}?>
            </div>
            <div id="casesinterna">
        	<h2>Cases</h2>
                <ul>
                		<?php query_posts('cat=5'); ?>
						<?php while (have_posts()) : the_post(); ?>
                	<li>
                    	<a href="<?php the_permalink(); ?>">
                        <?php echo get_post_meta($post->ID, 'Tag', true); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_advanced_excerpt('length=20'); ?></p> 
                        </a>
                    </li>
                    	<?php endwhile;?>
              </ul>
             </div>           
        </div><!-- Fim do conteudo -->
<?php get_footer(); ?>
