<?php include('header.php'); ?>
	<div class="notas-pendentes" id="main">
		<div class="title-content-default">
			<h1>notas pendentes</h1>
			<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>
		</div>	

	<p class="text-apresentcao">As notas importadas, que ainda não foram inseridas no sistema estão listadas abaixo. Clique no botão ao final da linha para visualizá-la. Verifique se os dados foram importados <br/>
	corretamente, caso seja necessário efetue a correção e salve a nota. * Os dados importados, podem conter erros por isso a necessidade da verificação.</p>


	<div class="search-notas">
		<div class="select-corretagem">
		<label for="tipoCorretagem">tipo de corretagem</label>
		<select name="tipoCorretagem" id="TipoCorretagem">
			<option value="bmf">bmf</option>
			<option value="bovespa">bovespa</option>
			<option value="pregao">pregao</option>

		</select>
		</div>
		<button class="big-buscar bt-buscar">buscar</button>
	</div>

	<table width="930" cellspacing="0" class="adc-notas-pendentes data-table data-hover">
			<col style="width: 20%;"/>
		<col style="width: 20%;"/>
		<col style="width: 20%"/>
		<col style="width: 20%"/>
		<col style="width: 20%"/>
		<thead>
			<th>Corretora</th>
			<th>Nº da nota</th>
			<th>Data do pregão</th>
			<th class="penultima">Tipo da nota</th>
			<th></th>
		</thead>

		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search bt-lupa">O</button>  
					<button class="delete bt-excluir">-</button>
					<button class="bt-checked"></button>
				</td>
			</tr>

						<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search bt-lupa">O</button>  
					<button class="delete bt-excluir">-</button>
					<button class="bt-checked"></button>
				</td>
			</tr>

						<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search bt-lupa">O</button>  
					<button class="delete bt-excluir">-</button>
					<button class="bt-checked"></button>
				</td>
			</tr>

		</tbody>

	</table>

	<button type="button" class="bt-salvar" />

	</div>

<?php include('footer.php'); ?>