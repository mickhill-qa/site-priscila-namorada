<!-- Estrutura html 5 -->
<?php include_once("includes/html-topo.php"); ?>
	<!-- Barra topo -->
	<?php include_once("includes/barra-topo.php"); ?><!-- Fim barra topo -->

	<!-- Aviso! -->
<div class="row-fluid">

	<div class="span6 offset3" title="Mensagem para o meu amor... :-)">
		<div class="alert alert-block alert-error fade in" style="text-align:center;">
			<video width="570" controls autoplay>
  				<source src="<?php echo INICIO_SITE; ?>/videos/fofo.mp4" type="video/mp4">
  				Your browser does not support the video tag.
			</video>
			<!-- <embed src="videos/fofo.mp4" width="320" height="240"></embed>  -->
		</div>
	</div>





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
