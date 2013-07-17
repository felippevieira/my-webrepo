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
    <div id="galeriavideos">
    			<div id="titulo">
                    <h3>Videos</h3>
                </div>
                <ul>
                <li>
                	<a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos/entrevistas"><h4>Entrevistas</h4></a>
                	<ul>
                	<?php query_posts("cat=14"); ?>
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
                    <p><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 35;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </li>
                <li>
                	

<a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos/lutas"><h4>Lutas</h4></a>
                	<ul>
                	<?php query_posts("cat=15"); ?>
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
                    <p><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 35;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </li>
                <li>
                	<a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos/materias-sinistras"><h4>Matérias Sinistras</h4></a>
                	<ul>
                	<?php query_posts("cat=18"); ?>
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
                    <p><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 35;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </li>
                <li>
                	<a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos/esportes-bizarros"><h4>Esportes Bizarros</h4></a>
                	<ul>
                	<?php query_posts("cat=17"); ?>
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
                    <p><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 35;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </li>
                <li>
                	<a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos/humanoides"><h4>Humanoides</h4></a>
                	<ul>
                	<?php query_posts("cat=13"); ?>
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
                    <p><?php
						$thetitle = $post->post_title; /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 35;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?></p></a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </li>
                </ul>
                </div>
                   </div>	
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>