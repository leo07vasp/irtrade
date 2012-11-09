<?php include("header.php"); ?>

<script type="text/javascript">
	
	
	

	
	
</script>
<div id="main">
	

	<div class="title-content-default">
		<h1>dados iniciais</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>

	</div>

<div class="main-content">

<div class="tabs dados-iniciais-content">	

	<ul class="links">
		<li class="active"><a href="#corretoras">associar corretoras</a> </li>
		<li><a href="#custodia">custódia inicial</a> </li>
		<li><a href="#valores">Valores acumolados</a> </li>
	</ul>

	<div class="conteudos">
		
		<div id="corretoras">
			<p class="tab-description">
				Para facilitar a inserção de novas notas, você deve associar as corretoras com as quais você opera na bolsa de valores. 
				Você poderá adicionar ou excluir as corretoras associadas a qualquer momento, de acordo com a sua necessidade.
			</p>
<div class="cont-dados-iniciais">
		<select class="start-select dados-start" multiple="multiple">
  			<option value="volvo">Volvo</option>
  			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
  			<option value="audi">Audi</option>
		</select>
<div class="butons-control-select">
<button class="go">Go</button>
<button class="back">back</button>
</div>

<select class="end-select dados-start" multiple="multiple">
  
</select>



</div>
<button class="salvar">salvar</button>

		</div>

		<div id="custodia">
			<p class="tab-description">
			Para que o sistema possa calcular corretamente as suas operações a partir desta data, você deve, caso esteja posicionado no mercado financeiro, 
			incluir a carteira atual através dos campos abaixo. Se você possuir ações de mais de uma empresa, clique no botão "+" à direita para abrir novos campos. </p>
<div class="insert-table">
			<table class="custodia" cellspacing="0" cellpadding="0" width="860">
				<thead>
							<th>Corretora</th>
					<th>Data</th>
					<th>C/V</th>
					<th>Tipo de Mercado</th>
					<th>Prazo</th>
					<th>Titulo</th>
					<th>Quantidade</th>
					<th>Preço/Ajuste</th>
					<th></th>
				</thead>

				<tbody>
					<tr>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td><input type="text" /></td>
						<td class="btn-table"><button class="insert-btn">inserir</button> </td>
					</tr>
				</tbody>

			</table>
</div>

<hr class="blue-sep"/>


			<table class="custodias" cellspacing="0" cellpadding="0" width="860">
				<thead>
			<th><span>Corretora</span> </th>
					<th><span>Data</span> </th>
					<th><span>C/V</span> </th>
					<th><span>Tipo de Mercado</span> </th>
					<th><span>Prazo</span> </th>
					<th><span>Titulo</span> </th>
					<th><span>Quantidade</span> </th>
					<th><span>Preço/Ajuste</span> </th>
					<th></th>
				</thead>

				<tbody>
					<!--tr>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td class="btn-table"><button class="remove-btn">inserir</button> </td>
					</tr>

					<tr>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td class="btn-table"><button class="remove-btn">inserir</button> </td>
					</tr>

					<tr>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td><input disabled type="text" /></td>
						<td class="btn-table"><button class="remove-btn">inserir</button> </td>
					</tr-->
				</tbody>

			</table>

<button class="salvar">salvar</button>

		</div>

		<div id="valores">
			<p class="tab-description">
				Os campos dos valores acumulados deverão ser preenchidos corretamente para que o sistema possa efetuar o cálculo correto. Importante: se você não possuir os valores acumulados em 
				operações anteriores, entre em contato conosco que auxiliaremos na obtenção dos mesmos, pois somente assim você poderá compensar prejuízos anteriores em futuras operações
			</p>


<p class="input-value-valores">

	<input type="checkbox"/ id="valorNao">
	<label for="valorNao">Não possuo valores acumulados</label>
	<br/>
	<br/>
	<input type="checkbox"/ id="valorSim">
	<label for="valorSim">Possuo valores acumulados mas não sei informar.</label>
</p>	


<table class="valores" cellspacing="0" cellpadding="0" width="860">
<thead>
	<th>Ano</th>
	<th>Prejuízo Acumulado a Compensar (Comum)</th>
	<th>Prejuízo Acumulado a Compensar (Daytrade)</th>
	<th>IRRF Daytrade Ano Fiscal</th>
	<th>IR na fonte (Lei nº 11.033/2004) não utilizado anteriormente</th>
	<th>IR na fonte (Lei nº 11.033/2004) do mês atual</th>
	<th>Prejuízos em fundo Imobiliarios</th>
	<th></th>

</thead>

<tbody>
	<tr>
		<td><input  style="width:50px;" type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input  style="width:55px;" type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td class="btn-table"><button class="insert-btn">insert</button> </td>
		

	</tr>

</tbody>

</table>

<hr class="blue-sep"/>

<table class="valores2" cellspacing="0" cellpadding="0" width="860">
<thead>
	<th><span>Ano</span> </th>
	<th><span>Prejuízo Acumulado a Compensar (Comum)</span></th>
	<th><span>Prejuízo Acumulado a Compensar (Daytrade)</span></th>
	<th><span>IRRF Daytrade Ano Fiscal</span> </th>
	<th><span>IR na fonte (Lei nº 11.033/2004) não utilizado anteriormente</span> </th>
	<th><span>IR na fonte (Lei nº 11.033/2004) do mês atual</span> </th>
	<th><span>Prejuízos em fundo Imobiliarios</span> </th>
	<th></th>

</thead>

<tbody>
	<!--tr>
		<td><input disabled  style="width:50px;" type="text"/> </td>
		<td><input disabled type="text"/> </td>
		<td><input disabled type="text"/> </td>
		<td><input disabled  style="width:55px;" type="text"/> </td>
		<td><input disabled type="text"/> </td>
		<td><input disabled type="text"/> </td>
		<td><input disabled type="text"/> </td>
		<td class="btn-table"><button class="remove-btn">insert</button> </td>
		

	</tr-->

</tbody>

</table>



		</div>


	</div>

</div>
	
</div>
</div>	
<?php include("footer.php"); ?>