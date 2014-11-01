<?php header('Content-type: text/html; charset=UTF-8');
/*
 *-------------------------------------------------------
 *              Simple MVC - Mick Hill
 *-------------------------------------------------------
 * 
 *  Arquivo de acesso aplicação/cliente
 *
 */

$config['CAMINHOS']['APLICACAO'] = '../app/';
$config['CAMINHOS']['PUBLIC']    = __DIR__;

require_once $config['CAMINHOS']['APLICACAO'] . 'core/start.php';