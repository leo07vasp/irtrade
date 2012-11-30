<?php include('header.php'); ?>

<div id="main" class="eventos">
	
		<div class="title-content-default">
		<h1>eventos coorporativos</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>
	</div>	

	<div class="step step1">
		<span class="number">1</span>
		<h2>Escolha o tipo de nota</h2>
		<select name="notaTipo" id="notaTipo">
			<option value="agrupado">agrupamentos</option>
			<option value="simples">simples</option>
		</select>

	</div>	

	<div class="step setp2">
	<span class="number">2</span>
	<h2>Preencha os campos abaixo</h2>
</div>	

	<div class="busca-eventos">
		<div class="negocios-fieldset">
		<label for="negocios">Negócios até</label>
		<input style="width:80px;" id="negocios" type="text"/>
		</div>

		<div class="nome-fieldset">
		<label for="nome">Nome do ativo</label>
		<input style="width:150px;" id="nome" type="text"/>
		</div>
		
<button class="big-buscar bt-buscar">buscar</button>

	</div>



	<h3>posicao atual</h3>
	<table width="930" cellspacing="0" class="data-table">
				<col style="width: 20%;"/>
		<col style="width: 10%"/>
		<col style="width: 10%"/>
		<col style="width: 10%"/>
		<thead>
			<th>Corretora</th>
			<th>Nº da nota</th>
			<th>Data do pregão</th>
			<th>Tipo da nota</th>
		</thead>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>


	<h3>lançamento a ser aberto</h3>
	<table width="930" cellspacing="0" class="data-table evento-filter">
		<thead>
			<th>Data do Evento</th>
			<th>Corretora</th>
			<th>Compra/Venda</th>
			<th>Ativo</th>
			<th class="penultima">Qtd. de ações a reduzir</th>
			<th></th>
		</thead>

		<tbody>
			<tr>
				
				<td><input type="text"/> </td>
				<td><input type="text"/> </td>
				<td><input type="text"/> </td>
				<td><input type="text"/> </td>
				<td><input type="text"/> </td>
				<td class="btn-table">
					<button class="add big-mais"></button>
				<button class="less big-menos"></button>		
				</td>
			</tr>

		</tbody>

	</table>


<div class="step step3">
	<span class="number">3</span>
	<button class="salvar bt-salvar">salvar</button>
	<div class="message calculando">Aguarde estamos salvando sua nota</div>
</div>

</div>

<?php include('footer.php'); ?>