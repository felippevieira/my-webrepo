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
			<?php query_posts('cat=3'); ?>
			<?php while (have_posts()) : the_post(); ?>
            <div id="titulo">
            	
            </div>
            <div class="breadcrumbs">
   				 <?php if(function_exists('bcn_display'))
    					{
       					 bcn_display();
    			}?>
            </div>
        	<div class="wrapper">
                            <div class="apokan">
                                <h2><?php the_title(); ?></h2>
                                <h3><?php echo get_post_meta($post->ID, 'Subtitulo', true); ?></h3>
                                <h4><?php the_content(); ?></h4>
                                <h5 id="spinner">Very Cool!</h5>
                            </div>
                                        <?php endwhile;?>
            </div> 
       		<div id="sessoes">
            	<ul id="sti-menu" class="sti-menu">
				<li data-hovercolor="#c4161c" class="dd">
					<a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-design/">
						<h2 data-type="mText" class="sti-item">Design</h2>
						<h3 data-type="sText" class="sti-item">Refletindo valores para seu público-alvo</h3>
						<span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
					</a>
				</li>
				<li data-hovercolor="#e75358" class="ev">
					<a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-eventos/">
						<h2 data-type="mText" class="sti-item">Eventos</h2>
						<h3 data-type="sText" class="sti-item">Conceito, planejamento e criação</h3>
						<span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
					</a>
				</li>
				<li data-hovercolor="#404041" class="wb">
					<a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-web/">
						<h2 data-type="mText" class="sti-item">Web</h2>
						<h3 data-type="sText" class="sti-item">Divulgue sua empresa para o mundo</h3>
						<span data-type="icon" class="sti-icon sti-icon-info sti-item"></span>
					</a>
				</li>
			</ul>
        	</div>
            <?php get_sidebar(); ?>
        </div><!-- Fim do conteudo -->
<?php get_footer(); ?>
