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
        	<div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                    	 <li>
                        	<a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-web/">
                            <img src="<?php bloginfo('template_url'); ?>/images/large/10.jpg" alt="image03" />
                            <div class="ei-title">
                                <h2>Destaque seu site</h2>
                                <h3>da concorrência</h3>
                                <h4>A função do design vai muito além de combinar cores e formas em harmonia. Um web design atrativo e funcional é capaz de convidar e manter convidados em seu site, transmitindo credibilidade e destacando sua empresa.</h4>
                               <h5 class="web">Web</h5>
                            </div>
                            </a>
                        </li>
                        <li>
                        	<a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-design/">
                            <img src="<?php bloginfo('template_url'); ?>/images/large/6.jpg" alt="image06"/>
                            <div class="ei-title">
                                <h2>comunicação visual</h2>
                                <h3>é a forma de expressão da marca com seu público alvo</h3>
                                <h4>Por isso acreditamos no design como um relacionamento através dos cinco sentidos.<br/>
Trabalhamos o alcance da marca em suas diversas aplicações: logotipos, embalagens, folders, cartazes, banners, cardápios, panfletos, informativos, anúncios, revistas, entre outros.</h4>
                                <h5 class="design">Design</h5>
                            </div>
                            </a>
                        </li> 
                    	<li>
                        	<a href="http://www.pokancomunicacao.com.br/site/comedia-em-pe/">
                            <img src="<?php bloginfo('template_url'); ?>/images/large/1.jpg" alt="image01" />
                            <div class="ei-title">
                                <h2>Comédia em Pé</h2>
                                <h3>Maior grupo de stand-up do Brasil</h3>
                                <h4>Primeiro grupo de stand up que surgiu no Brasil, sucesso de bilheteria e gargalhadas o Comédia em pé roda o país lotando as grandes casas de espetáculos por onde passa.<br /><br />A Pokan foi responsável pela criação e implementação de seu novo site o tornando leve e descontraído, ou seja, com a cara da comédia.</h4>
                               <h5 class="web">Web</h5>
                            </div>
                            </a>
                        </li>
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#">Slide 3</a><img src="<?php bloginfo('template_url'); ?>/images/thumbs/3.jpg" alt="thumb03" /></li> 
                        <li><a href="#">Slide 6</a><img src="<?php bloginfo('template_url'); ?>/images/thumbs/6.jpg" alt="thumb06" /></li>
                        <li><a href="#">Slide 1</a><img src="<?php bloginfo('template_url'); ?>/images/thumbs/1.jpg" alt="thumb01" /></li> 
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
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
