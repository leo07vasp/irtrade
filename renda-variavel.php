<?php include ('header.php'); ?>

<div id="main" class="renda-variavel">
		<div class="title-content-default">
		<h1>renda variável (comuns / daytrade)</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien dui.</span>
	</div>

	<div class="search-data">
		<div class="select-data">
		<label for="tipoData">Ano Base</label>
		<select name="TipoData" id="tipoData">
			<option value="selecione">Selecione</option>
			<option value="ano1">Ano 1</option>
			<option value="ano2">Ano 2</option>
			<option value="ano3">Ano 3</option>
			<option value="ano4">Ano 4</option>
		</select>
		</div>
		<button class="big-buscar">buscar</button>
	</div>

	<br style="clear:both;" />

	<div class="renda-container">
		<div class="tabs renda-variavel-content">	
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
					
					<p class="mercado">Tipo de Mercado/Ativo - JANEIRO</p>
					<div class="table-wrapper">
						<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
						  <thead >
						    <th scope="col" width="70%" class="a-left padding-fix"><a href="#" class="bt-menos"></a>Mercado à Vista</th>
						    <th scope="col" width="15%">Operações Comuns</th>
						    <th scope="col" width="15%">Day-Trade</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">Mercado à Vista - ações</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado à Vista - ouro</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado à Vista - ouro at. fin. fora bolsa</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>
					</div>

					<div class="table-wrapper">
						<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
						  <thead >
						    <th scope="col" width="70%" class="a-left padding-fix"><a href="#" class="bt-menos"></a>Mercado Opções</th>
						    <th scope="col" width="15%">Operações Comuns</th>
						    <th scope="col" width="15%">Day-Trade</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">Mercado opções - ações</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado opções - ouro</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado opções - fora de bolsa</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado opções - outros</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>
					</div>

					<div class="table-wrapper">
						<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
						  <thead >
						    <th scope="col" width="70%" class="a-left padding-fix"><a href="#" class="bt-menos"></a>Mercado Futuro</th>
						    <th scope="col" width="15%">Operações Comuns</th>
						    <th scope="col" width="15%">Day-Trade</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">Mercado futuro - dólar dos EUA</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado futuro - índices</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado futuro - juros</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado futuro - outros</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>
					</div>

					<div class="table-wrapper">
						<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
						  <thead >
						    <th scope="col" width="70%" class="a-left padding-fix"><a href="#" class="bt-menos"></a>Mercado a Termo</th>
						    <th scope="col" width="15%">Operações Comuns</th>
						    <th scope="col" width="15%">Day-Trade</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">Mercado termo - ações/ouro</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Mercado termo - outros</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>
					</div>

					<div class="table-wrapper">
						<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover">
						  <thead >
						    <th scope="col" width="70%" class="a-left padding-fix"><a href="#" class="bt-menos"></a>Resultados</th>
						    <th scope="col" width="15%">Operações Comuns</th>
						    <th scope="col" width="15%">Day-Trade</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">RESULTADO LÍQUIDO DO MÊS</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Resultado negativo até o mês anterior</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">BASE DE CÁLCULO DO IMPOSTO</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Prejuízo a compensar</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Alíquota do imposto</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IMPOSTO DEVIDO</td>
							    <td>R$ 0.000,00</td>
							    <td>R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>
					</div>

					<table width="100%" cellspacing="0" class="data-table data-zebrada data-hover" style="margin-top:10px;">
						  <thead >
						    <th scope="col" colspan="2" class="a-left">Consolidação do mês</th>
						  </thead>
						  <tbody>
							  <tr>
							    <td class="a-left">Total do imposto devido</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte de Day-Trade no Mês</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte de Day-Trade nos meses anteriores</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte de Day-Trade a compensar</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte (Lei nº 11.033/2004) no mês</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte (Lei nº 11.033/2004) nos meses anteriores</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">IR fonte (Lei nº 11.033/2004) meses a compensar</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							  <tr>
							    <td class="a-left">Imposto a pagar</td>
							    <td width="15%">R$ 0.000,00</td>
							  </tr>
							</tbody>
						</table>

					
				</div>

				<div id="jan">
					<p class="mercado">Mercado Futuro 2</p>
				
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

			<br style="clear:both;" />
		</div>
	</div>

</div>
<?php include ('footer.php'); ?>