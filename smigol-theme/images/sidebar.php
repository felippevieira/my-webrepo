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
            	<div id="msocial">
            	<a href="http://www.twitter.com/#!/smigol01" class="twitter" title="twitter" target="_blank">Twitter</a>
                <a href="http://www.facebook.com/Marcelo.Oliosi.Smigol.Sportv" title="facebook" class="facebook" target="_blank">Facebook</a>
            </div>
        	<div id="apoio">
            	<div id="titulo"><h3>Apoio:</h3></div>
                <div id="sliderapoio">
                        	<div id="sliderdois" class="nivoSlider">
            				<a href="http://estiloarea21.com.br/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/apoio/1.jpg" alt="" /></a>
                            <img src="<?php bloginfo('template_url'); ?>/images/apoio/2.jpg" alt="" />
                            </div>
                 </div>
            </div>
        	<div id="bannersmigol">
            	<a href="http://www.smigol.com.br/site/category/ping-pong-com-smigol">Ping pong com smigol</a>
            </div>
        </div>
        
<?php endif; ?>