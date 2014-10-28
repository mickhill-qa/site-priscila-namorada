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
$config['SLUG_SESSION']                = 'sister-araujo';
$config['AUTOR_APLICACAO']             = '';
$config['CONTATO_AUTOR']               = '';
$config['PAGINA_INICIAL']              = '';
$config['VERSAO_APLICACAO']            = 'v2.0';
$config['COPYRIGHT_APLICACAO']         = '';

$config['HTML_HEAD']['keywords']       = 'declaração, amor, amor, apaixonado, quero, vocẽ';
$config['HTML_HEAD']['description']    = 'Declaração para meu amor que está fazendo 9 meses de Missão!';
$config['HTML_HEAD']['favicon']        = true;
$config['HTML_HEAD']['css']            = array('bootstrap.min', 'font-awesome.min', 'bootstrap-social', 'sisteraraujo');
$config['HTML_HEAD']['js']             = array('jquery-1.10.2.min', 'bootstrap.min', 'sisteraraujo');

$config['URL_BASE']['URL_DINAMICA']    = true;
$config['URL_BASE']['ALIAS']           = 'sisteraraujo';
$config['URL_BASE']['DOMINIO']         = '';

$config['AUTOLOAD']['helper']          = array('default');
$config['AUTOLOAD']['class']           = array('Pagina');

$config['EXTENCOES']['Controllers']    = '';
$config['EXTENCOES']['Views']          = '';
$config['EXTENCOES']['favicon']        = '';

$config['EXIBIR_CONFIG_PADRAO']        = false;