<?php include('header.php'); ?>

<div class="insert-nota" id="main">
		<div class="title-content-default">
		<h1>inserir nota</h1>
		<span class="desc">Phasellus venenatis nibh sed risus pellentesque ut commodo erat pharetra, nunc et malesuada consequat, neque sapien posuere dui, quis fringilla.</span>
	</div>
	
<div class="step step1">
	<span class="number">1</span>
	<h2>Escolha o tipo de nota</h2>
	<select name="nota" id="nota">
		<option selected="selected" value="bovespa">Bovespa</option>
		<option value="bmf">bmf</option>
	</select>

</div>


<div class="step setp2">
	<span class="number">2</span>
	<h2>Preencha os campos abaixo</h2>
</div>	

<div class="fieldset-search">
	

	<div class="content-search corretora-search">
	<label for="corrteora">Corretora</label> <br/>
	<select style="width:135px;" name="corretora" id="corretora">
		<option value="target">target</option>
		<option value="unifil">unifil</option>
	</select>
</div> 

	<div class="content-search nota-search">
		<label for="n-nota">Número da nota</label><br/>
		<input style="width:180px;" type="text" placeholder="Numero da nota"/>
	</div>
	
	<div class="content-search pregao-search">
		<label for="d-pregao">Data pregão</label><br/>
		<input style="width:100px;" type="text" id="d-pregao" name="d-pregao" placeholder="Data do Pregão">
	</div>

	<div class="content-search cliente-search">
		<label for="c-cliente">Código do cliente</label><br/>
		<input style="width:65px;" type="text" placeholder="código do cliente">
	</div>
	
	<div class="content-search acessor-search">
		<label for="aceesor">Acessor</label><br/>
		<input style="width:66px;" type="text" id="aceesor" name="aceesor" placeholder="acessor">
	</div>
</div>			


<table border="0" width="960"class="notaT1 com-hover-input">
	           <col style="width: 7%;"/>
        <col style="width: 10%;"/>
        <col style="width: 10%;"/>
        <col style="width: 10%"/>
        <col style="width: 10%"/>
        <col style="width: 10%"/>
        <col style="width: 10%"/>
        <col style="width: 10%"/>
<thead>
	<th><span>C/V</span> </th>
	<th><span>Tipo de mercado</span> </th>
	<th><span>Prazo</span> </th>
	<th><span>Especificação do título</span> </th>
	<th><span>Observação</span> </th>
	<th><span>Quantidade</span> </th>
	<th><span>Preço/Ajuste</span></th>
	<th></th>
</thead>

<tbody>
	<tr>
		<td>
			<select name="" id="">
				<option value="1">tipo 1</option>
				<option value="2">tipo 2</option>
			</select>

		</td>
		<td><select name="" id="">
				<option value="1">corretota 1</option>
				<option value="2">corretora 2</option>
			</select></td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td class="btn-table"><button class="add  big-mais">+</button><button class="less  big-menos ">-</button></td>
	</tr>
	<tr>
		<td><select name="" id="">
				<option value="1">tipo 1</option>
				<option value="2">tipo 2</option>
			</select></td>
		<td><select name="" id="">
				<option value="1">corretora 1</option>
				<option value="2">corretora 2</option>
			</select></td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td><input type="text"/> </td>
		<td class="btn-table"><button class="add  big-mais">+</button><button class="less  big-menos ">-</button></td>
	</tr>
	<tr>
		<td><select name="" id="">
				<option value="1">tipo 1</option>
				<option value="2">tipo 2</option>
			</select></td>
		<td><select name="" id="">
				<option value="1">corretora 1</option>
				<option value="2">corretora 2</option>
			</select></td>
        <td><input type="text"/> </td>
        <td><input type="text"/> </td>
        <td><input type="text"/> </td>
        <td><input type="text"/> </td>
        <td><input type="text"/> </td>
		<td class="btn-table"><button class="add  big-mais">+</button><button class="less  big-menos ">-</button></td>
	</tr>

</tbody>

</table>


         
          <table width="930"	 class="nota-bovespa data-table">
			<col style="width: 30%;"/>
		<col style="width: 1%;"/>
		<col style="width: 20%"/>
		<col style="width: 1%"/>
		<col style="width: 1%"/>
                    <thead>
                        <tr>
                            <th colspan="2">
                                Resumo dos negócios
                            </th>
                            <th colspan="2">
                                Resumo financeiro
                            </th>
                            <th colspan="1" class="sigla">
                                D/C
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="separador">
                            <td>
                                Debêntures
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td colspan="3" class="titulo">
                                CBLC
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vendas à vista
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                                Valor líquido das operações
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                C
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Compras à vista
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                                Taxa de liquidação
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Opções - compras
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                                Taxa de registro
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Opções - vendas
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="total">
                                Total CBLC
                            </td>
                            <td id="TotalCBLC" class="total valor">
                                <input type="text" value="R$00,00"/> 
                            </td>
                            <td class="total sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Operações à termo
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td colspan="3" class="titulo">
                                Bovespa/Soma
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Valor das oper. c/ títulos públ. (v. nom)
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                                Taxa de termo/opções
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Valor das operações
                            </td>
                            <td class="valor separador-v inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                                Taxa A.N.A.
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td class="separador-v">
                            </td>
                            <td>
                                Emolumentos
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td class="separador-v">
                            </td>
                            <td class="total">
                                Total Bovespa/Soma
                            </td>
                            <td id="TotalSomaBovespa" class="total valor">
                                <input type="text" value="R$00,00"/> 
                            </td>
                            <td class="total sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="titulo separador-v">
                                Especificações diversas
                            </td>
                            <td colspan="3" class="titulo">
                                Corretagem/Despesas
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="6" class="separador-v inputs">
                                <div class="content-last-tr">
                                <label>
                                    <span>IRRF Day-Trade Base :</span>
                                </label>
                                <input type="text" value="R$00,00"/> 
                                </div>
                                <div class="content-last-tr">
                                <label>
                                    <span>Projeção :</span>
                                </label>
                               <input type="text" value="R$00,00"/> 
                               </div>
                            </td>
                            <td>
                                Corretagem
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ISS (São Paulo)
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td class="inputs">
                                I.R.R.F. s/ operações base 
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Outras
                            </td>
                            <td class="valor inputs">
                               <input type="text" value="R$00,00"/> 
                            </td>
                            <td class="sigla">
                                D
                            </td>
                        </tr>
                        <tr>
                            <td class="total">
                                Total corretagem despesas
                            </td>
                            <td id="TotalCorretagem" class="total valor">
                               <input type="text" value="R$00,00"/> 
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Líquido
                            </td>
                            <td class="valor inputs"><input type="text" value="R$00,00"/> 
                            </td>
                            <td class="total sigla">
                                C
                            </td>
                        </tr>
                    </tbody>
                </table>

<table class="data-table nota-bmf" width="930">
	<thead>
		<th><span>Venda disponível</span></th>
		<th><span>Compra disponível</span></th>
		<th><span>Venda Opções</span></th>
		<th><span>Compra Opções</span></th>
		<th><span>Valor dos Negócios</span></th>
	</thead>

	<tbody>
		<tr>
			<td><input type="text"/></td>
			<td><input type="text"/></td>
			<td><input type="text"/></td>
			<td><input type="text"/></td>
			<td><input type="text"/></td>
		</tr>
		<tr>
			<td class="text">IRRF</td>
			<td class="text">IRRF Day Trade(Projeção)</td>
			<td class="text">Taxa Operacional</td>
			<td class="text">Taxa Registro BM&F</td>
			<td class="text">Taxas BM&F (emol+f.gar)</td>
		</tr>
		<tr>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
		</tr>
		<tr>
			<td></td>
			<td class="double-label text">
				<span>Outros</span>
				<span style="margin-right: 60px;">I.S.S</span>
			</td>
			<td class="text">Ajuste de Posição</td>
			<td class="text">Ajuste Day Trade</td>
			<td class="text">Total das Despesas</td>
			
		</tr>
		<tr>
			<td></td>
			<td class="double-input"> 
				<input type="text"/>
				<input type="text"/>
			</td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
		</tr>

		<tr>
			<td class="double-label text">
				<span>Outros</span>
				<span>IRRF Corretagem</span>
			</td>
			<td class="text">Total Conta Investimento</td>
			<td class="text">Total conta Normal</td>
			<td class="text">Total Líquido</td>
			<td class="text">Total Líquido da Nota</td>
		</tr>
		<tr>
			<td class="double-input">
				<input type="text"/>
				<input type="text"/> 
			</td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>
			<td><input type="text"/> </td>

		</tr>

	</tbody>
</table>


<div class="step step3">
	<span class="number">3</span>
	<button class="salvar bt-salvar">salvar</button>
	<div class="message calculando">Aguarde estamos salvando sua nota</div>
</div>
</div>




<div id="manutencao-carteira-d">
    
<h3>Venda(s) para especificar liquidação</h3>


<table class="table-liquidar data-table data-zebrada data-hover" width="720">
            <col style="width: 10%;"/>
        <col style="width: 70%;"/>
        <col style="width: 20%"/>
        
    <thead>
        <th>Data</th>
        <th>Ativo</th>
        <th>Quantidade</th>
    </thead>
    <tbody>
        
        <tr>
            <td></td>
            <td></td>
            <td><input disabled="disabled" type="text" valorStartAttr="400" value="400" class="valor"> </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input disabled="disabled" type="text" valorStartAttr="800" value="800" class="valor"> </td>
        </tr>   


    </tbody>

</table>


<hr style="margin:20px 0;" class="blue-sep"/>

<h3>termo</h3>
<table width="720" class="table-termo data-table data-hover data-zebrada">
            <col style="width: 10%;"/>
        <col style="width: 40%;"/>
        <col style="width: 15%"/>
        <col style="width: 15%"/>
        <col style="width: 10%"/>
    <thead>
        <th>Data</th>
        <th>Ativo</th>
        <th>Vencimento</th>
        <th>Quantidade</th>
        <th>Qtd. Liquidar</th>
    </thead>

    <tbody>
        <tr>    
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"/> </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"/> </td>
        </tr>


    </tbody>

</table>




<h3>vista</h3>
<table width="720" class="table-avista data-table data-hover data-zebrada">
            <col style="width: 10%;"/>
        <col style="width: 40%;"/>
        <col style="width: 15%"/>
        <col style="width: 15%"/>
        <col style="width: 10%"/>
    <thead>
        <th>Data</th>
        <th>Ativo</th>
        <th>Vencimento</th>
        <th>Quantidade</th>
        <th>Qtd. Liquidar</th>
    </thead>

    <tbody>
        <tr>    
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"/> </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"/> </td>
        </tr>

    </tbody>

</table>



<h3>abrir btc</h3>

<table class="table-btc data-table data-zebrada data-hover" width="720">
            <col style="width: 10%;"/>
        <col style="width: 70%;"/>
        <col style="width: 20%"/>
        
    <thead>
        <th>Data</th>
        <th>Ativo</th>
        <th>Quantidade</th>
    </thead>
    <tbody>
        
        <tr>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"> </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="text" class="valor"> </td>
        </tr>   


    </tbody>

</table>

<button class="salvar bt-salvar">salvar</button>
<button class="cancelar bt-cancelar">cancelar</button>

</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
         $( "#manutencao-carteira-d" ).dialog({
            autoOpen: true,
            modal: true,
            title: 'Liquidação termo',
            width: 755
        });
    });
    
</script>


<?php include('footer.php'); ?>