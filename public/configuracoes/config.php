<?php
	// Configurações de banco de dados.
	//include_once("conexao_banco_local.php");

	// Conectando ao banco.
	//mysql_pconnect(HOST_DB, USUARIO_DB, SENHA_DB) or die(mysql_error());
	//mysql_select_db(DATA_BASE) or die(mysql_error());

	// Definições padrão do site.
	define("TITULO_SITE"    , 'Sister Araújo');
	define("TITULO_TOPO"    , 'Para: Sister Araújo');
	define("KEYWORDS_SITE"  , 'declaração, amor, amor, apaixonado, quero, vocẽ');
	define("DESCRICAO_SITE" , 'Declaração para meu amor que está fazendo 9 meses de Missão!');
	define("ALTOR_SITE"     , 'Mick Hill :-)');
	define("COPYRIGHT"      , TITULO_SITE . ' - 2014 © Todos os direitos reservados.');

	// Configurações de URL.
	define("INICIO_SITE", 'http://' . $_SERVER["SERVER_NAME"] . '/');
	define("INICIO_ADMIN", INICIO_SITE . '/admin');

	// UTF8 - Codificação para banco de dados.
	// mysql_query("SET NAMES 'utf8'");
	// mysql_query('SET character_set_connection=utf8');
	// mysql_query('SET charecter_set_client=utf8');
	// mysql_query('SET charecter_set_results=utf8');

	// UTF-8 - Codificação para tratamento de dados no PHP.
	header("Content-type: text/html; charset=utf8");

	// Funções do site
	require_once('funcoes.php');
?>
