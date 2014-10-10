<!-- Menu Logout -->
<ul class="nav pull-right">
	<li class="divider-vertical"></li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> 
<?php
	// Se existir nome de usuário gravado na sessão e ele não for vazio, imprima ele.
	if (isset($_SESSION) && ($_SESSION['usuarioLogado']['nome'] != "")) {
		echo $_SESSION['usuarioLogado']['nome']; 
	} else {
		echo "Olá, pessoa sem nome!";
	}
?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="#"><i class="icon-pencil"></i> Editar Perfil</a></li>
			<li><a href="#">Outra ação</a></li>
			<li><a href="#">Algo a mais aqui</a></li>
			<li class="divider"></li>
			<!-- <li><a href="<?php echo INICIO_SITE; ?>/deslogar_usuarios.php"><i class="icon-off"></i> Sair</a></li> -->
			<li><a href="<?php echo INICIO_SITE; ?>/acoes.php?acao=sair"><i class="icon-off"></i> Sair</a></li>
		</ul>
	</li>
</ul>
