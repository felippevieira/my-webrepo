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
	<div id="copyright">
    	<p>Copyright © www.smigol.com.br - Todos direitos reservados</p>
    </div>
    <div id="pokanassinatura">
    	<p>Desenvolvido por <a href="http://www.pokancomunicacao.com.br/site" target="_blank">Pokan Comunicação Integrada</a></p>
    </div>
    </div><!-- Fim do Footer -->
	<div class="clear"></div>
</div><!-- Fim do pagewrap -->
        <div id="toTop">^ Voltar ao topo</div>
<script>
	$(document).ready(function(){	
		$("a[rel^='prettyPhoto']").prettyPhoto();
		$('.tabContainer iframe').each(function() {
		$(this).attr("src", $(this).attr("src") + '?wmode=transparent')
		});
	});
	
jQuery('.gallery-item a').addClass('pop-up').attr('rel','prettyPhoto[post]');
jQuery('.gallery-item a img').removeAttr('alt');
jQuery('.gallery-item a img').removeAttr('title');
jQuery('.gallery-item a').removeAttr('title');
jQuery('small a').addClass('pop-up').attr('target','_blank');
jQuery('small a').addClass('pop-up').css('text-align','center');
jQuery('small a').addClass('pop-up').css('color','#FFF');


</script>		
</body>   
</html>