<?php
	require_once('configuracoes/config.php'); // Comfigurações de todo o site.
	// Redireciona para uma mensagem padão...
	echo '<script type="text/javascript">location.href=("' . INICIO_SITE . '/acoes.php");</script>';
?>


<!-- Aviso! -->
<div class="row-fluid alert-success">
	<div class="span6 offset3">
		<div class="alert alert-block alert-success fade in" style="text-align:center;">
			<!-- <button data-dismiss="alert" class="close" type="button">×</button> -->
			<h3 class="alert-heading">Olá!</h3>
			<p>Estou aprendendo a programar e recentemente comecei a me familiarizar com sistemas integrados com banco de dados! De imediato me veio a cabeça varias possibilidades do que eu poderia fazer com esse conhecimento, então como meu primeiro teste e exercício de aprendizado aqui está um sistema bem simples de cadastro e login a partir do cadastro realizado!</p>
			<p><b><i>"Fique a vontade para testa-lo..."</i></b></p><br />
			<p><a href="https://www.facebook.com/MickHill.org" target="_blanck"><i>By.: Mick Hill.</i></a></p>
		</div>
	</div>
</div>



<!-- Estrutura html 5 -->
<?php 
	include_once("includes/html-topo.php");
	// Testes


	#RewriteRule . /index.php [L]


	#php_flag session.auto_start 1
	#php_flag ["session.auto_start"] = true

	// echo "session.auto_start é:". ini_get ('session.auto_start'). "\ N";
	// if (ini_get ('session.auto_start')) {
	//         echo "Algum código aqui ..... \ n";
	// }

	// exibe($_SESSION);

	// $consulta_nome_usuario = query("SELECT nome FROM usuarios WHERE login = '" . $_SESSION['login'] . "'");
	// $nome_usuarios = mysql_fetch_assoc($consulta_nome_usuario);
	// $usuario_atual = $nome_usuarios['nome'];
	// echo $usuario_atual;


	// $teste = array(
	// 	'nome'  => "Mick Hill", 
	// 	'idade' => 18
	// );
	// foreach ($teste as $key => $value) {
	// 	echo "$key: $value<br />";
	// }

	// $teste1 = implode(", "   , array_keys($teste));
	// echo $teste1 . "<br />";

	// $teste2 = "'" . implode("', '"   , array_values($teste)) . "'";
	// echo $teste2 . "<br />";

	// echo $_SESSION['usuarioLogado']['senha'];

	// <div class="alert alert-block alert-error fade in">
	// 	<button data-dismiss="alert" class="close" type="button">×</button>
	// 	<h4 class="alert-heading">Oh! Você tem um erro!</h4>
	// 	<p>Mude isto e tente novamente. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
	// 	<p>
	// 		<a href="#" class="btn btn-danger">Tomar esta ação</a> <a href="#" class="btn">Ou faça isto</a>
	// 	</p>
	// </div>
	// $url1 = $_SERVER['REQUEST_URI'];
	// echo $url1;

	// $url2 = $_GET['url'];
	// echo $url2."<br />";

	include_once("includes/html-rodape.php");
?><!-- Fim html -->