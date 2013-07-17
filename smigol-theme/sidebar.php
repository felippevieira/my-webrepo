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
<script type="text/javascript">
$(document).ready(function(){
    jQuery('#sliderdois').nivoSlider({
		effect:'fade',
        pauseTime:5000, // How long each slide will show
		directionNav:false, // 
    });
});	
</script>
            <div id="sidebar">
            <div id="agenda"> 
                            <div id="titulo"><h3>Agenda:</h3></div>
                            <ul>
                            <?php query_posts('cat=19&posts_per_page=2'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <li>
                                    <div class="dia">
                                        <p class="numero"><?php echo get_post_meta($post->ID, 'dia', true); ?></p>
                                        <p class="mes"><?php echo get_post_meta($post->ID, 'mes', true); ?></p>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo get_post_meta($post->ID, 'resumo', true); ?></p>
                                </li>
                                <?php endwhile;?>
                            </ul>
                        </div>
        	<div id="msocial">
            	<a href="http://twitter.com/smigol01" class="twitter" title="twitter" target="_blank">Twitter</a>
                <a href="https://www.facebook.com/Marcelo.Oliosi.Smigol.Sportv" title="facebook" class="facebook" target="_blank">Facebook</a>
            </div>
        	<div id="apoio">
            	<div id="titulo"><h3>Apoio:</h3></div>
                <div id="sliderapoio">
                        	<div id="sliderdois" class="nivoSlider">
                           		<?php $post_id = 973;
                                $queried_post = get_post($post_id); ?>  
                                <?php echo $queried_post->post_content; ?>
                                <?php wp_reset_query(); ?>             
                            </div>
                 </div>
            </div>
        	<div id="bannersmigol">
            	<a href="http://www.smigol.com.br/site/category/ping-pong-com-smigol">Ping pong com smigol</a>
            </div>
        </div>
        
<?php endif; ?>