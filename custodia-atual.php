<?php include('header.php'); ?>
	<div id="main" class="custodia-atual">
				<div class="title-content-default">
		<h1>Custódia Atual</h1>
		<span class="desc">Nos dados iniciais você irá inserir blabla bla blablablablabla bla bla bla bla bla bla.</span>
	</div>	

	<p class="text-apresentcao">Utilize o filtro abaixo para verificar sua carteira em um determinado dia. Isso ajuda você a ter um maior controle de suas operações em datas passadas.<br /> 
Caso você queira apenas saber o que esta em aberto em sua carteira selecione apenas o tipo de negocio desejado.</p>


	<div class="search-negocios">
		<div class="select-negocio">
		<label for="TipoNegocio">tipo de negócio</label>
		<select name="tipoNegocio" id="TipoNegocio">
			<option value="Tipo1">Tipo 1</option>
			<option value="Tipo2">Tipo 2</option>
			<option value="Tipo3">Tipo 3</option>

		</select>
		</div>
		<div class="box-database">
			<label for="DataBase">Data Base</label>
			<input type="text" name="dataBase" id="DataBase" />
		</div>
		<button class="big-buscar">buscar</button>
	</div>

	<div class="result-pesquisa">
		<span>
			ATIVOS CUSTODIADOS BOVESPA EM 15/08/2012

			<a href="#" class="bt-pdf"></a>
		</span>

		<p>MERCADO: VISTA</p>

	</div>

	<table width="930" cellspacing="0" class="adc-notas-pendentes data-table">
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<col style=""/>
		<thead>
			<th>Corretora</th>
			<th>Data Estoque</th>
			<th>Data do Vencimento</th>
			<th>C/V</th>
			<th>Ativo</th>
			<th>Quatidade</th>
			<th>Preço Médio</th>
			<th>Total com taxas</th>
		</thead>

		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
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
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

		</tbody>

	</table>

	</div>

<?php include('footer.php'); ?>