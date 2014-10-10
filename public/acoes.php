<!-- Estrutura html 5 -->
<?php include_once("includes/html-topo.php"); ?>
<?php

	// Recebe a ação que essa pagina fará.
	$acao = $_GET['acao'];








	// Se a açõa for entra, execute esse bloco de ações.
	if ($acao == entra) {

		// recebe as informações e salva em variáveis.
		$login    = $_POST['login'];
		$senha    = md5($_POST['senha']);  // MD5 é um tipo de criptografia muito seguro.

		// Consulta no banco de dados se o usuário existe...
		$consulta = query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
		$conta    = mysql_num_rows($consulta);

		// Se o usuário existir...
		if ($conta == 1) {

			// ... busca o nome do usuário...
			$buscaNomeUsuario = query("SELECT nome FROM usuarios WHERE login = '$login' AND senha = '$senha'");
			$nomeUsuario	  = mysql_fetch_array($buscaNomeUsuario);
			$usuario 		  = $nomeUsuario['nome'];

			// Inicia a sessão com esses dados.
			sessao_inicia($usuario, $login, $senha);

			// Redireciona a página.
			javaRedireciona(INICIO_SITE);


		// 	Se o usuário não existir imprime esse alerta...
		} elseif ($conta == 0) {
?>
			<!-- Corpo de mensagen padão -->
			<?php include_once("includes/corpo-mensagem-topo.php"); ?>


				<!-- Mensagem erro ao logar-se! -->
				<?php include_once("includes/mensagem-erro-login.php"); ?><!-- Mensagem erro ao logar-se! -->


			<?php include_once("includes/corpo-mensagem-rodape.php"); ?><!-- fim corpo de mensagen padão -->
			<?php include_once("includes/html-rodape.php"); ?><!-- Fim html -->

<?php
			// Mata a página antes de inicias outras ações.
			die;
		}
	}

?>








<!-- Corpo de mensagen padão -->
<?php include_once("includes/corpo-mensagem-topo.php"); ?>








<?php
	switch ($acao) {




		// Encerrar a sessão e imprime uma mensagem.
		case 'sair':

			// Se existir uma sessão de usuário...
			if ($_SESSION['usuarioLogado']) {

				// Finaliza a sessão.
				sessao_finaliza();
?>
				<!-- Imprime mensagem de saida! -->
				<?php include_once("includes/mensagem-usuario-sair.php"); ?>
<?php
			} else {
?>
				<!-- Imprime mensagem de saida erro! -->
				<?php include_once("includes/mensagem-usuario-sair-erro.php"); ?>
<?php
			}
		break;






		// Cadastrar usuário.
		case 'cadastrar-usuario':

			// Recebe os dados cadastrados no formulário.
			$usuario = $_POST['nome'];
			$login   = $_POST['login'];
			$senha   = md5($_POST['senha']); // MD5 é um tipo de criptografia muito seguro.

			// Verificar se o usuário já existe.
			$verifica_usuario 	= query("SELECT * FROM usuarios WHERE login = '$login'");
			$resultado_verificacao 	= mysql_num_rows($verifica_usuario);


			// Se os campos login e senha forem vazios inprime: Preencha login e senha.
			if (($login == "") || ($senha == "")) {
?>
				<!-- Mensagem Preencha os obrigatórios de campos de cadastro! -->
				<?php include_once("includes/mensagem-usuario-vazio-preencher-campos.php"); ?>
<?php

			// Se existir um usuário com o mesmo logim imprime: Já existe usuário.
			} elseif ($resultado_verificacao == 1) {
?>
				<!-- Mensagem usuário já exite, tentar outro! -->
				<?php include_once("includes/mensagem-usuario-ja-existe.php"); ?>
<?php

			// Se não existir um usuário com este login e ele não for vazio cadasstra ele e imprime: Cadastrado com sucesso.
			} elseif (($resultado_verificacao == 0) && (($login != "") && ($senha != ""))) {

				// Prepara os dados para serem inseridos no banco.
				$cadastro = array(
					'nome'  => $usuario,
					'login' => $login,
					'senha' => $senha
				);

				// Cadastra o usuário no banco...
				cadastrar_db(usuarios, $cadastro);

				// Inicia a sessão e nelaguarda o dados.
				sessao_inicia($usuario, $login, $senha);
?>
				<!-- Mensagem usuário cadastrado cadastrado com sucesso! -->
				<?php include_once("includes/mensagem-usuario-cadastrado.php"); ?>
<?php
			}
		break;









		// Se o usuário for somente direcionado para esta página imprime essa mensagem.
		default:
?>
			<!-- Mensagem padão! -->
			<?php include_once("includes/mensagem-padrao.php"); ?><!-- Fim da Mensagem Padão -->
<?php
		break;
	}
?>
	<?php include_once("includes/corpo-mensagem-rodape.php"); ?><!-- fim corpo de mensagen padão -->
<?php include_once("includes/html-rodape.php"); ?><!-- Fim html -->