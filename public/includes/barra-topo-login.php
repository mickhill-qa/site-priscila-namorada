<!-- Menu Login -->
<ul class="nav pull-right">
	<li><a data-toggle="modal" href="#criarConta">Registrar-se</a></li>
	<li class="divider-vertical"></li>
	<li class="dropdown">
		<a data-toggle="dropdown" href="#" class="dropdown-toggle">Login <strong class="caret"></strong></a>
		<div style="padding: 15px; padding-bottom: 0px;" class="dropdown-menu">
			<div class="row-fluid">
				<form action="<?php echo INICIO_SITE; ?>/acoes.php?acao=entra" method="post">
					<div>
						<input name="login" class="span12" placeholder="Usuário" style="margin-bottom: 15px;" type="text" required />
						<input name="senha" class="span12" placeholder="Senha" style="margin-bottom: 15px;" type="password" required />
					</div>
					<div>
						<input type="submit" value="Entrar" class="btn btn-primary btn-block" />
					</div>
				</form>
			</div>
		</div>
	</li>
</ul><!-- Fim do menu Login -->

<!-- Criar Conta - Modal -->
<div aria-hidden="true" style="display: none;" id="criarConta" class="modal hide fade">
	<!-- Cabeçario do Modal -->
	<div class="modal-header">
		<button class="close" data-dismiss="modal">×</button>
		<h2>Criar Conta!</h2>
	</div>
	<!-- Corpo do Modal -->
	<div class="modal-body">
		<div class="row-fluid">
			<div class="span8 offset2" >
				<form action="<?php echo INICIO_SITE; ?>/acoes.php?acao=cadastrar-usuario" method="POST">
					<!-- input Nome-->
					<div class="row-fluid">
						<div class="spam12">
							<label class="control-label" for="nome">Seu Nome</label>
							<input id="nome" name="nome" type="text" placeholder="Digite seu nome..." class="span12" required />
						</div>
					</div>
					<!-- Input Usuário -->
					<div class="row-fluid">
						<div class="spam12">
							<label class="control-label" for="login">Login</label>
							<input id="login" name="login" type="text" placeholder="exemplo@email.com" class="span12" required />
						</div>
					</div>
					<!-- Input Senha -->
					<div class="row-fluid">
						<div class="spam12">
							<label class="control-label" for="senha">Senha</label>
							<input id="senha" name="senha" type="password" placeholder="********" class="span12" required />
						</div>
					</div>
					<!-- Input Cadastrar -->
					<div class="row-fluid">
						<div class="spam12">
							<input value="Cadastrar!" type="submit" class="btn btn-primary btn-block" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!-- Fim do corpo do Modal -->
	<div class="modal-footer">
		<p><i><?php echo COPYRIGHT; ?></i></p>
	</div>
</div><!-- Fim do Modal -->

