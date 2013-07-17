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
    <div id="galeria">
    			<div id="titulo">
                    <h3>Fotos mais recentes</h3>
                    <a href="http://www.smigol.com.br/site/category/multimidia/multimidia-fotos" title="Ver todas as galerias">Ver todas as galerias</a>
                </div>
                <ul>
                	<?php query_posts("posts_per_page=4&cat=11"); ?>
					<?php while (have_posts()) : the_post(); ?>  
                	<li><a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
                    <?php
							    // Busca a imagem anexadas ao post
							    $args = array(
							    'post_type' => 'attachment',
							    'post_mime_type' => 'image',
							    'numberposts' => -1,
							    'order' => 'ASC',
							    'post_status' => null,
							    'post_parent' => $post->ID
							    );
							 
							 		
							 
							    // Verifica se exite alguma imagem anexada e pega sua URL
							    $attachments = get_posts($args);
								
								if ( has_post_thumbnail()) {
									$img = wp_get_attachment_url( get_post_thumbnail_id(), 'full' );
							   
							 
							    // Busca Permalink e o Titulo do Post
							    $link = $post->ID;
							    $title = $post->post_title;
							 
							    // Agora que ja temos a URL da imagem, o titulo e a Permalink do post, inserimos isso no HTML
							    echo "<div id='imagem'><img width='174' height='101' src='$img' alt='$title' /></div>";
							    }
								
							    else if ($attachments) {
							    foreach ($attachments as $attachment) {
							    $img = wp_get_attachment_url( $attachment->ID );
							    break;
							    }
								
								list($width, $height, $type, $attr) = getimagesize($img);
								
								if ($width >= $height) {
									
									$proporcao_height = round($height/101, 1);
									$proporcao_width = round($width/$proporcao_height, 1);
									
									if ($proporcao_width < 174) {$define_img = "width='174'";} else {$define_img = "height='115'";}
									
								}else{
									$define_img = "width='174'";
								}
								
								$link = $post->ID;
							    $title = $post->post_title;
								
								echo "<div id='imagem'><img ".$define_img." src='$img' alt='$title' /></div>";
								}
								 else {
								 $link = $post->ID;
								 echo "<div id='imagem'><img width='174' height='101' src='$img' alt='$title' /></div>";
								 }
							?>
                    <p><?php the_title(); ?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </div>
        <div id="videosmultimidia">
        		<div id="titulo">
                    <h3>Videos Recentes</h3>
                    <a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos">Ver todos os vídeos</a>
                </div>
							<div id="conteudovideos">
								<ul class="tabNav">
									<?php query_posts("posts_per_page=6&cat=10"); ?>
									<?php while (have_posts()) : the_post(); ?>	
									<li><a href="#"><img src="<?php video_thumbnail(); ?>" width="83" height="63" /><span class="descricao"><?php the_title(); ?></span></a></li>
									<?php endwhile; ?> 
								</ul>		
									<div class="tabContainer">
									 <div class="tab current">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=0"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
									  <div class="tab">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=1"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
									 <div class="tab">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=2"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
                                      <div class="tab">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=3"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
									 <div class="tab">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=4"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
                                      <div class="tab">
									 	<?php query_posts("posts_per_page=1&cat=10&offset=5"); ?>
										<?php while (have_posts()) : the_post(); ?>
									 	<?php the_content(); ?>	
									 	<?php endwhile; ?> 
									 </div>
								</div>	
							</div>
                   </div>	
        </div>
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>