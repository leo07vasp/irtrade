<?php include("header.php"); ?>

<div class="envio" id="main">
	<div class="title-content-default">
		<h1>transferir aqrquivos</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>
	</div>

	<div id="envio">
		<div class="selectArquivo">
		<label for="tipo">Tipo de arquivo</label>
		<br/>
		<select name="tipo" id="tipo">
			<option value="1">teste 1</option>
			<option value="2">teste 2</option>
			<option value="3">teste 3</option>
			<option value="4">teste 4</option>
			<option value="5">teste 5</option>
		</select>
		</div>

		<div class="selectCorretora">
		<label for="corretoraArq">Corretora do arquivo</label>
		<br/>
		<select name="correroraArq" id="corretoraArq">
			<option value="3">teste 3</option>
			<option value="4">teste 4</option>
			<option value="5">teste 5</option>
			<option value="6">teste 6</option>

		</select>
		</div>
		
		<div class="search-content">
			<div>
			  <input type="text" disabled id="arquivoinput" name="arquivo" value="Nenhum arquivo selecionado" readonly="readonly" />
			  <button onclick="jQuery('.filechoose').trigger('click')" class="selecionar">selecionar</button>
		      <input class="no-display filechoose" type="file" name="arquivo" onchange="jQuery('#arquivoinput').val($(this).val())" />
		        </div>
			</div>

			<button class="enviar">enviar</button>	
				<div class="progress-contaier">
			<div class="progressbar"><div class="percorrido"></div> </div>
			<span>45% Concluido</span>
			</div>

		</div>

	</div>

</div>

<?php include("footer.php"); ?>