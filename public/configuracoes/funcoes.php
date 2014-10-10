<?php
	// Abre terminal para execução de SQL.
	function query($sql){
		$executa_sql = mysql_query($sql);
		return $executa_sql;
	}
	// Abre terminal SQL com apresentação de erros.
	function query_debug($sql) {
		$executa_sql = query($sql);
		if ($executa_sql) {
			echo "Código SQL executado com sucesso!<br />";
			return $executa_sql;
		} else {
			echo "Erro no SQL!<br />";
			$executa_sql or die(mysql_error());
		}
	}

	// Inserir dados no banco. Obs.: O $cadastro tem que virm em um array...
	function cadastrar_db($tabela, $cadastro) {
		$campos_tabela      =       implode(", "   , array_keys($cadastro));
		$regitros_cadastrar = "'" . implode("', '" , array_values($cadastro)) . "'";

		$cadastrar = "INSERT INTO $tabela ($campos_tabela) VALUES ($regitros_cadastrar)";
		$executar  = query($cadastrar);
		return $executar;
	}

	// Var_damp - exibe os codigos organizados.
	function exibe($codigos) {
		echo "<pre>";
		var_dump($codigos);
		echo "</pre>";
	}


	// Funções de sessão - Logar...
	function sessao_inicia($usuario, $login, $senha){
		//Validando pois o login "nunca" pode ser vazio em uma sessão.
		session_start();
		$_SESSION['usuarioLogado']['nome'] = $usuario;
		$_SESSION['usuarioLogado']['login'] = $login;
		$_SESSION['usuarioLogado']['senha']= $senha;
	}
	//Funções de sessão - Deslogar...
	function sessao_finaliza(){
		session_start();
		session_destroy();
	}

	// Função que redireciona a página - Tentei usar o header do php mas não funcionou, então tenho que apela... kkk.
	function javaRedireciona($url) {
		echo '
			<script type="text/javascript">
				location.href=("' . $url . '");
			</script>
		';
	}
?>