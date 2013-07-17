<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
  <div id="conteudo">
    <div id="content">
    	<div id="ladodireito">
    	<div id="titulo">
                    <h3>Fotos recentes</h3>
                    <a href="http://www.smigol.com.br/site/category/multimidia/multimidia-fotos" title="Ver todas as galerias">Ver todas as galerias</a>
                </div>
    	<div id="featured" >
					  <ul class="ui-tabs-nav">
	    			    <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1">
                        <a href="#fragment-1">
                        	<img width="170" height="83" class="attachment-thumbnail" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Smigol-e-Anderson-150x74.jpg">
                        </a>
                        </li>
	       				<li class="ui-tabs-nav-item" id="nav-fragment-2">
                        <a href="#fragment-2">
                        	<img width="170" height="83" class="attachment-thumbnail" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Romario-Smigol-e-Neimar-150x74.jpg">
                        </a>
                        </li>
	       				<li class="ui-tabs-nav-item ultima" id="nav-fragment-3">
                        <a href="#fragment-3">
                        	<img width="170" height="83" class="attachment-thumbnail" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Pedro-Bial-e-Smigol-no-Caldeirão-150x74.jpg">
                        </a>
                        </li>
	      			  </ul>
                      <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
        	<a href="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Smigol-e-Anderson.jpg" rel="prettyPhoto">
			<img  width="400" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Smigol-e-Anderson.jpg">
            </a>
			 <!--<div class="info" >
				<h2><a href="http://www.smigol.com.br/site/category/eventos" >Eventos</a></h2>
				<p>Saiba como ter o Smigol em seu evento!</p>
			 </div>-->
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
        	<a href="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Romario-Smigol-e-Neimar.jpg" rel="prettyPhoto">
        	<img width="400" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Romario-Smigol-e-Neimar.jpg">
            </a>
			 <!--<div class="info" >
				<h2><a href="http://www.smigol.com.br/site/category/radio" >Rádio</a></h2>
				<p>Confira as Novidades</p>
			 </div>-->
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
        	<a href="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Pedro-Bial-e-Smigol-no-Caldeirão.jpg" rel="prettyPhoto">		
            <img width="400" src="http://www.smigol.com.br/site/wp-content/uploads/2012/03/Pedro-Bial-e-Smigol-no-Caldeirão.jpg">
            </a>
			 <!--<div class="info" >
				<h2><a href="http://www.smigol.com.br/site/category/multimidia" >Fotos</a></h2>
				<p>Vejam as ultimas galerias de fotos</p>
	         </div>-->
             </div>
             </div>
             <div id="videos">
             	<div id="titulo">
                    <h3>Vídeos Recentes</h3>
                    <a href="http://www.smigol.com.br/site/category/multimidia/multimidia-videos">Ver todos os vídeos</a>
                </div>
							<div id="conteudovideos">
								<ul class="tabNav">
									<?php query_posts("posts_per_page=3&cat=10"); ?>
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
								</div>	
							</div>
                   </div>		
             </div>
             <div id="ladoesquerdo">
             <?php get_sidebar(); ?>
             </div>
    </div>	
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>
