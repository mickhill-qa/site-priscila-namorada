<?php require_once('configuracoes/config.php'); // Comfigurações de todo o site. ?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<!-- Recursos para ajudar na busca. -->
		<meta name="keywords"     content="<?php echo KEYWORDS_SITE;  ?>" />
		<meta name="description"  content="<?php echo DESCRICAO_SITE; ?>" />
		<meta name="author"       content="<?php echo ALTOR_SITE;     ?>" />
		<link rel="shortcut icon" href="<?php echo INICIO_SITE; ?>/img/icone-titulo.png" />
		<title>
			<?php
				// Inicia uma sessão para...
				session_start();

				// ...Verifica se há usuário logado que tenha nome para colocar o nome dele no titulo da página.
				if (isset($_SESSION['usuarioLogado']) && ($_SESSION['usuarioLogado']['nome'] != "")) {
					echo TITULO_SITE . " | " . $_SESSION['usuarioLogado']['nome'];
				} else {
					echo TITULO_SITE;
				}
			?>

		</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo INICIO_SITE; ?>/css/bootstrap.min.css" />
		<!-- Bootstrap responsivo-->
		<link rel="stylesheet" type="text/css" href="<?php echo INICIO_SITE; ?>/css/bootstrap-responsive.min.css" />
		<!-- Modificações de layout -->
		<link rel="stylesheet" type="text/css" href="<?php echo INICIO_SITE; ?>/css/style.css" />
		<!-- Necessários para efeitos da página -->
		<script src="<?php echo INICIO_SITE; ?>/js/code.jquery.com-latest.js"></script>
		<script src="<?php echo INICIO_SITE; ?>/js/bootstrap.min.js"></script>
	</head>
	<body>
