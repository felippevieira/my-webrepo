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
				<form name="formulario" method="post" action="<?php bloginfo('template_url'); ?>/forms/enviar.php" >
                <input type="hidden" name="Assunto" value="Contato pelo site Smigol.com.br" />
                    <fieldset>
                    	<ul>
                        	<li>
                            	<label>Nome:</label>
                                <input name="Nome" type="text" class="quebra" id="Nome" />
                            </li>
                            <li>
                            	<label>Email:</label>
                                <input name="Email" type="text" class="quebra" id="Email" />
                            </li>
                              <li>
                            	<label>Telefone:</label>
                                <input name="Telefone" type="text" class="quebra" id="Telefone" />
                            </li>
                            <li>
                            	<label>Assunto:</label>
                              <select name="Assunto" id="Assunto">
                               	<option value="Contrate-nos">Contrate-nos</option>
                                <option value="Eventos">Eventos</option>
                                <option value="Empresariamento">Empresariamento</option>
                                <option value="Outros">Outros</option>
                              </select>                         
                            </li>
                      <li>
                            	<label>Mensagem:</label>
                                <textarea name="Mensagem" class="textarea"></textarea>
                            </li>
                        </ul>
                        <input id="enviar" type="submit" value="Enviar" /><input id="apagar" type="reset" value="Apagar" />
                    </fieldset>
                    </form>
                    <div id="contatoalka">
                    	<a href="http://www.alkaparra.com.br" target="_blank" title="Alkaparra Produções">
                        Alkaparra Produções
                        </a>
                        <p><b>Alkaparra Produções</b><br />(21) 2245-6483 / 7850-3424 ou 8*32136<br />Segunda à sexta das 12h às 18h</p>
                    </div>
     </div>
  </div><!-- Fim do Conteudo -->
<?php get_footer(); ?>