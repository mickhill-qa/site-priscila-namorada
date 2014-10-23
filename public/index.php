<?php header('Content-type: text/html; charset=UTF-8');
/*
 *-------------------------------------------------------
 *              Simple MVC - Mick Hill
 *-------------------------------------------------------
 *
 */

echo '<pre>';var_dump($_SERVER);die;

$config['CAMINHOS']['APLICACAO'] = '../app/';

require_once $config['CAMINHOS']['APLICACAO'] . 'core/start.php';