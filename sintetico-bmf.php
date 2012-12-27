<?php include('header.php'); ?>
	<div class="sintetico-bmf" id="main">
		<div class="title-content-default">
			<h1>Sintético BMF</h1>
			<span class="desc">Nos dados iniciais você irá inserir blabla bla blablablablabla bla bla bla bla bla bla.</span>
		</div>	

		<p class="text-apresentcao">Utilize o filtro abaixo para verificar sua carteira em um determinado dia. Isso ajuda você a ter um maior controle de suas operações em datas passadas.<br />
Caso você queira apenas saber o que esta em aberto em sua carteira selecione apenas o tipo de negocio desejado.</p>


		<div class="search-data">
			<div class="select-data">
			<label for="tipoData">Data Base</label>
			<select name="TipoData" id="tipoData">
				<option value="selecione">Selecione</option>
				<option value="data1">Data 1</option>
				<option value="data2">Data 2</option>
				<option value="data3">Data 3</option>
				<option value="data4">Data 4</option>
			</select>
			</div>
			<button class="big-buscar bt-buscar">buscar</button>
		</div>

		<div class="bmf-container">
			<div class="tabs sintetico-bmf-content">	

				<ul class="links">
					<li class="active"><a href="#info">Info</a> </li>
					<li><a href="#jan">jan</a> </li>
					<li><a href="#fev">fev</a> </li>
					<li><a href="#fev">fev</a> </li>
					<li><a href="#mar">mar</a> </li>
					<li><a href="#abr">abr</a> </li>
					<li><a href="#mai">mai</a> </li>
					<li><a href="#jun">jun</a> </li>
					<li><a href="#jul">jul</a> </li>
					<li><a href="#ago">ago</a> </li>
					<li><a href="#set">set</a> </li>
					<li><a href="#out">out</a> </li>
					<li><a href="#nov">nov</a> </li>
					<li><a href="#dez">dez</a> </li>
				</ul>

				<div class="conteudos">

					<div id="info">

						<div class="result-bmf">
							<p class="mercado">Mercado Futuro - Outros</p>
							
							<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
							  <thead >
							    <th scope="col">Corretora</th>
							    <th scope="col">Liquidação</th>
							    <th scope="col">Mercadoria</th>
							    <th scope="col">Vencimento</th>
							    <th scope="col">Qtde Contratos</th>
							    <th scope="col">Valor Bruto</th>
							    <th scope="col">Operações Comuns</th>
							    <th scope="col">Day-Trade</th>
							  </thead>
							  <tbody>
								  <tr>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								  </tr>
								  <tr>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								  </tr>
								  <tr>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								  </tr>
								  <tr>
								    <td colspan="6" class="t-right">Totais</td>
								    <td>&nbsp;</td>
								    <td>&nbsp;</td>
								  </tr>
								</tbody>
							</table>
						</div>


				</div>

			</div>
			</div>

			<br style="clear:both;" />
		</div>

	</div>

<?php include('footer.php'); ?>