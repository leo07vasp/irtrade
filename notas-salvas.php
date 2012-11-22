<?php include ('header.php'); ?>

<div id="main" class="notas-salvas">
		<div class="title-content-default">
		<h1>notas salvas</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>
	</div>

	<p>Insira os dados das notas de corretagem que deseja pesquisar. Você pode optar por preencher quantos campos desejar.<br />
Estarão disponíveis para busca apenas notas de corretagem processadas no sistema.</p>

	<div class="form-box">
		<label>
			<span>Número da nota de corretagem</span>
			<input type="text" name="numeroCorretagem" id="NumeroCorretagem" class="f-right" />
			<br style="clear:both;" />
		</label>
		<label>
			<span>Data específica</span>
			<input type="text" name="dataEspecifica" id="DataEspecifica" class="f-right" />
			<br style="clear:both;" />
		</label>
		<label>
			<span>Período</span>
			<input type="text" name="periodo" id="Periodo" class="f-left" style="width:55px;" />
			<span>a</span>
			<input type="text" name="periodo2" id="Periodo2" class="f-left" style="width:55px; margin-left:13px;" />
			<br style="clear:both;" />
		</label>
		<label>
			<span>Tipo de Nota<br /> de corretagem</span>
			<select name="tipoNota" id="TipoNota">
				<option value="tipo1">Tipo 1</option>
				<option value="tipo2">Tipo 2</option>
				<option value="tipo3">Tipo 3</option>
				<option value="tipo4">Tipo 4</option>
				<option value="tipo5">Tipo 5</option>
			</select>
			<br style="clear:both;" />
		</label>

		<label>
			<span>Corretora</span>
			<select name="corretora" id="Corretora">
				<option value="corretora1">Corretora 1</option>
				<option value="corretora2">Corretora 2</option>
				<option value="corretora3">Corretora 3</option>
				<option value="corretora4">Corretora 4</option>
				<option value="corretora5">Corretora 5</option>
			</select>
			<br style="clear:both;" />
		</label>

		<button class="big-buscar">buscar</button>
	</div>

	<table width="730" cellspacing="0" class="search-notas-salvas data-table data-zebrada data-hover">
			<col style="width: 20%;"/>
		<col style="width: 15%;"/>
		<col style="width: 15%"/>
		<col style="width: 15%"/>
		<col style="width: 5%"/>
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
					<button class="search">O</button>  
					<button class="delete">-</button>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search">O</button>  
					<button class="delete">-</button>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search">O</button>  
					<button class="delete">-</button>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="search">O</button>  
					<button class="delete">-</button>
				</td>
			</tr>

		</tbody>

	</table>

</div>


<?php include ('footer.php'); ?>