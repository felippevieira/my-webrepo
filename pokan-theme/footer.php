<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div id="footer">
		<div id="navfooter">
    	<h5>o que fazemos</h5>
        <ul>
            	<li><a href="http://www.pokancomunicacao.com.br/site/">Home</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/apokan/">A Pokan</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-design">Design</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-eventos">Eventos</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/servicos/servicos-web">Web</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/cases/">Cases</a></li>
                <li><a href="http://www.pokancomunicacao.com.br/site/category/contato/">Contato</a></li>
        </ul>
        <p>Copyright©, 2013 Pokan Comunicação Integrada. Todos os Direitos Reservados.</p>
    </div>
    <div id="contatofooter">
    	<h5>contate-nos</h5>
        <a href="mailto:contato@pokancomunicacao.com.br">contato@pokancomunicacao.com.br</a>
        <h6><a href="http://www.pokancomunicacao.com.br/site/">Pokan</a></h6>
    </div>   
</div><!-- Fim do Footer -->	
		 <div class="clear"></div>
        </div> <!-- Fim center -->
        </div><!-- Fim wrap --->
        <div id="toTop">^ Voltar ao topo</div>
<script src="<?php bloginfo('template_url'); ?>/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){	
	$("a[rel^='prettyPhoto']").prettyPhoto();
	});
jQuery('.gallery-item a').addClass('pop-up').attr('rel','prettyPhoto[post]');
jQuery('.fancytwitter a').addClass('tt-twitter').html('<span>Twitter</span>')
jQuery('.fancyfacebook a').addClass('tt-facebook').html('<span>Facebook</span>')
jQuery('.fancylinkedin a').addClass('tt-linkedin').html('<span>Linkedin</span>')
jQuery('.SM a').addClass('tt-gplus').html('<span>Google Plus</span>')
</script>
        <script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>		
</body>   
</html>