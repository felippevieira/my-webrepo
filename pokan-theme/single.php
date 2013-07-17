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
			<?php while (have_posts()) : the_post(); ?>
            <div class="breadcrumbs">
   				 <?php if(function_exists('bcn_display'))
    					{
       					 bcn_display();
    			}?>
            </div>

            <div id="casesinterna">
        	<h2><span class="cat">Cases</span><span class="project"><?php the_title(); ?></span><?php echo get_post_meta($post->ID, 'Tag', true); ?></h2>
            		<div id="galeriacase">
                        <div id="imagemdestaque">
						<?php
							    // Busca a imagem anexadas ao post
							    $args = array(
							    'post_type' => 'attachment',
							    'post_mime_type' => 'image',
							    'numberposts' => -1,
							    'order' => 'DESC',
							    'post_status' => null,
							    'post_parent' => $post->ID
							    );
							 
							 		
							 
							    // Verifica se exite alguma imagem anexada e pega sua URL
							    $attachments = get_posts($args);
								
								if ( has_post_thumbnail()) {
									$img = wp_get_attachment_url( get_post_thumbnail_id(), 'medio' );
							   
							 
							    // Busca Permalink e o Titulo do Post
							    $link = post_permalink;
							    $title = $post->post_title;
								
								
							 
							    // Agora que ja temos a URL da imagem, o titulo e a Permalink do post, inserimos isso no HTML
							    echo "<div class='imagem'><img width='260' src='$img' alt='$title' /></div>";
							    }
								
							    else if ($attachments) {
							    foreach ($attachments as $attachment) {
							    $img = wp_get_attachment_url( $attachment->ID );
							    break;
							    }
								
								list($width, $height, $type, $attr) = getimagesize($img);
								
								if ($width >= $height) {
									
									$proporcao_height = round($height/177, 1);
									$proporcao_width = round($width/$proporcao_height, 1);
									
									if ($proporcao_width < 260 ) {$define_img = "height='260'";} else {$define_img = "width='260'";}
									
								}else{
									$define_img = "width='260'";
								}
								
								$link = $post->ID;
							    $title = $post->post_title;
								
								echo "<div class='imagem'><img ".$define_img." src='$img' alt='$title' /></div>";
								}
								 else {
								 $link = $post->ID;
								 echo "<div class='imagem'><img src='$img' alt='$title' /></div>";
								 }
								 ?>
								 </div>
                    	<div id="galeria"><?php echo do_shortcode('[gallery option1="value1" columns="2" link="file"]'); ?></div>
                    </div>
					<div id="infocase"> 
                    	<h3><?php echo get_post_meta($post->ID, 'Tag', true); ?><span><?php the_title(); ?></span></h3>
                        <div id="social">
							<ul class="tt-wrapper">
                            <li class="fancyplus"><?php do_action( 'wp_plus_one_button'); ?></li>
							<li class="fancytwitter"><?php tweet_this('twitter'); ?></li>
            				<li class="fancyfacebook"><?php tweet_this('facebook'); ?></li>
            				<li class="fancylinkedin"><?php tweet_this('linkedin'); ?></li>
           					</ul>
                        </div>
						<p><?php the_content(); ?></p>
                        <div id="voltar">
                    	<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
                        <img src="<?php bloginfo('template_url'); ?>/images/mais.jpg" />
                        <span>Voltar</span>
                        </a>
                    </div>
                    </div>
                    
                    	<?php endwhile;?>

             </div>           
        </div><!-- Fim do conteudo -->

 
<?php get_footer(); ?>