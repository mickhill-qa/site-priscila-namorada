<?php
/*
 *-------------------------------------------------------
 *              Simple MVC - Mick Hill
 *-------------------------------------------------------
 * 
 *  Configurações do site:
 *
 */

$config['TITULO_APLICACAO']            = 'Sister Araújo';
$config['AUTOR_APLICACAO']             = '';
$config['CONTATO_AUTOR']               = '';
$config['PAGINA_INICIAL']              = '';
$config['VERSAO_APLICACAO']            = 'v2.0';
$config['COPYRIGHT_APLICACAO']         = 'Todos os direitos reservados © 2014-2015';

$config['HTML_HEAD']['keywords']       = 'declaração, amor, amor, apaixonado, quero, vocẽ';
$config['HTML_HEAD']['description']    = 'Declaração para meu amor que está fazendo 9 meses de Missão!';
$config['HTML_HEAD']['favicon']        = true;
$config['HTML_HEAD']['css']            = array('bootstrap.min');
$config['HTML_HEAD']['js']             = array('bootstrap.min');

$config['URL_BASE']['URL_DINAMICA']    = true;
$config['URL_BASE']['ALIAS']           = '';
$config['URL_BASE']['DOMINIO']         = '';

$config['AUTOLOAD']['helper']          = array('default');
$config['AUTOLOAD']['class']           = array('Site', 'Html', 'Pagina');

$config['EXTENCOES']['Controllers']    = '';
$config['EXTENCOES']['Views']          = '';
$config['EXTENCOES']['favicon']        = '';

$config['EXIBIR_CONFIG_PADRAO']        = false;