<!-- Estrutura html 5 -->
<?php include_once("includes/html-topo.php"); ?>
	<!-- Barra topo -->
	<?php include_once("includes/barra-topo.php"); ?><!-- Fim barra topo - ok -->

	<!-- Aviso! -->
<div class="row-fluid">
	<div class="span6 offset3" title="Mensagem para o meu amor... :-)">
		<div class="alert alert-block alert-error fade in" style="text-align:center;">
			<!-- <button data-dismiss="alert" class="close" type="button">×</button> -->
			<h3 class="alert-heading" title="<?php echo TITULO_SITE; ?>">Oooooiiii Meu Amor!</h3>
			<p>Bom! passei a semana toda lembrando que nessa sexta-feira, dia 25 de abril, você faria 9 meses de Missão e tentei pensar em algo criativo para fazer, mas todas as minha ideias estavão furadas (<i>"É que eu queria que já na segunda vc estivesse com o que eu fizer... mas lembrei que vc está longe e os correios é bem lento..."</i>).</p>
			<p><!-- <b><i>"Fique a vontade para testa-lo..."</i></b> --></p><br />
			<p title="Vai! Clica logo... kkk"><a class="btn btn-danger" href="#criarConta" data-toggle="modal"><i>Então tive a seguinte ideia...</i></a></p>
		</div>
	</div>





<!-- Criar Conta - Modal -->
<div aria-hidden="true" style="display: none;" id="criarConta" class="modal hide fade" title="Espero que ainda goste de verde... kkk">
	<!-- Cabeçario do Modal -->
	<div class="modal-header alert alert-block alert-success">
		<h2 style="text-align:center;">Feliz 9 meses de Missão!</h2>
	</div>
	<!-- Corpo do Modal -->
		<div class="row-fluid">
			<div class="span12" >
					<img class="logoicon" width="100%" src="img/sud.jpg" alt="imagem" title="Pressione F11" />
			</div>
	</div><!-- Fim do corpo do Modal -->
	<div class="modal-footer">
		<p><i>"Escolha seu amor e ame sua escolha..."<br />
		Ass.: <a href="https://www.facebook.com/MickHill.org" target="_blank">Mick Hill</a>.</i></p>
	</div>
</div><!-- Fim do Modal -->

<!-- Modal 2-->
<div aria-hidden="true" style="display: none;" id="gosto" class="modal hide fade" title="Reponder a: vipmick@hotmail.com">
	<!-- Cabeçario do Modal -->
	<div class="modal-header">
		<button class="close" data-dismiss="modal">×</button>
		<h2 style="text-align:center;">Gostou?</h2>
	</div>
	<!-- Corpo do Modal -->
	<div class="modal-body">
		<div class="row-fluid">
			<div class="span8 offset2" >
				<h4 style="text-align:center;">Aguardo uma resposta...</h4>

			</div>
		</div>
	</div><!-- Fim do corpo do Modal -->
	<div class="modal-footer">
		<p><i>Ass.: <a href="https://www.facebook.com/MickHill.org" target="_blank">Mick Hill</a>.</i></p>
	</div>
</div><!-- Fim do Modal -->


<!-- Modal 3-->
<div aria-hidden="true" style="display: none;" id="meuAmor" class="modal hide fade">
    <div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h2 title="LINDA!!!">O que acha dessa moça?</h2>
    </div>
    <div class="">
        <div class="row-fluid">
            <div class="span6 offset3">
				<div class="logowrapper">
					<img class="logoicon" width="100%" src="img/priscila.jpg" alt="Priscila Lima" title="Priscila Lima" />
				</div>
            </div>
        </div>
    </div>
    <div class="modal-footer"  >
        <p title="De eu, Mick Hill."><i>Ela é minha escolha...</i></p>
    </div>
</div><!-- Fim do Modal -->




</div>



<?php include_once("includes/html-rodape.php"); ?><!-- Fim html -->