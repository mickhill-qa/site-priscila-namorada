<?php
/*
 *-------------------------------------------------------
 *              Simple MVC - Mick Hill
 *-------------------------------------------------------
 * 
 *  Configurações do site
 *
 */

$config['TITULO_APLICACAO']            = 'Sister Araújo';
$config['SLUG_SESSION']                = 'sister-araujo';
$config['AUTOR_APLICACAO']             = '';
$config['CONTATO_AUTOR']               = '';
$config['PAGINA_INICIAL']              = '';
$config['VERSAO_APLICACAO']            = 'v2.0.1 RC2';
$config['COPYRIGHT_APLICACAO']         = '';

$config['TITULO_ERRO']['404']          = 'Oops! 404 Not Found';
$config['TITULO_ERRO']['403']          = 'Acesso Negado!';

$config['HTML_HEAD']['keywords']       = "declaração, amor, amor, apaixonado, quero, vocẽ";
$config['HTML_HEAD']['description']    = "Desenvolvi esse site afim de mostrar alguns vídeos do YouTube para minha namorada que até a  data desta publicação é missionária de tempo integral de A IGREJA DE JESUS CRISTO DOS SANTOS DOS ÚLTIMOS DIAS. Minha intenção é mostrar para ela alguns vídeos que ao longo da semana me fizeram pensar nela, mas faze-lo sem que ela quebre as regras de sua missão, pois em algumas missões não se pode ter acesso a redes sociais como Facebook, Google+... Esse é o caso dela (baseado nessa idéia desenvolvi a primeira versão que era bem mais simples). Então junto a essa solução implementei mais algumas coisas que achei conveniente (isso já nessa verão: $config[VERSAO_APLICACAO]). Caso queira ver como essa aplicação funciona em back-end ou como era a versão anterior, disponibilizei o código fonte em meu GitHub.";
$config['HTML_HEAD']['favicon']        = true;
$config['HTML_HEAD']['css']            = array('bootstrap.min', 'font-awesome.min', 'bootstrap-social', 'sisteraraujo');
$config['HTML_HEAD']['js']             = array('jquery-1.10.2.min', 'bootstrap.min');
$config['HTML_FOOTER']['js']           = array('sisteraraujo');

$config['URL_BASE']['URL_DINAMICA']    = true;
$config['URL_BASE']['ALIAS']           = 'sisteraraujo';
$config['URL_BASE']['DOMINIO']         = '';

$config['AUTOLOAD']['helper']          = array('default');
$config['AUTOLOAD']['class']           = array('Pagina');

$config['EXTENCOES']['Controllers']    = '';
$config['EXTENCOES']['Views']          = '';
$config['EXTENCOES']['favicon']        = '';

$config['EXIBIR_INDEX_URL']            = false;
$config['EXIBIR_CONFIG_PADRAO']        = false;