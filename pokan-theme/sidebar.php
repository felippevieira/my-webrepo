<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="sidebar">
            	<div id="sidebar">
            	<h2>Cases Recentes</h2>
                <ul>
                		<?php query_posts('cat=5&posts_per_page=4'); ?>
						<?php while (have_posts()) : the_post(); ?>
                	<li>
                    	<a href="<?php the_permalink(); ?>">
                        <?php echo get_post_meta($post->ID, 'Tag', true); ?>
                        <h3><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 30;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></h3>
                        <p><?php the_advanced_excerpt('length=5'); ?></p> 
                        </a>
                    </li>
                    	<?php endwhile;?>
                    <div id="maiscases">
                    	<a href="http://www.pokancomunicacao.com.br/site/category/cases/">
                        <img src="<?php bloginfo('template_url'); ?>/images/mais.jpg" />
                        <span>Cases</span>
                        </a>
                    </div>
                </ul>
            </div><!-- Fim da sidebar -->
        </div>
        
<?php endif; ?>