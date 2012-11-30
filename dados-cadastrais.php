<?php include('header.php') ?>

<div id="main" class="dados-cadastrais">
		<div class="title-content-default">
			<h1>Dados Cadastrais</h1>
			<span class="desc">Quando necessario, modifique ou atualize seus dados nesta pagina</span>
		</div>	
	

	<form action="#" id="dados-cadastrais">
		<fieldset class="fieldset">

			<legend>Dados Pessoais</legend>


			<label>
				<span>Nome</span>
				<input type="text" name="nome" value="Teste Sistema" />
			</label>

			<label>
				<span>Apelido</span>
				<input type="text" name="apelido" value="Teste" />
			</label>

			<label>
				<span>CPF</span>
				<input type="text" name="cpf" value="01216242903" />
			</label>

			<label>
				<span>Data de nascimentos</span>
				<input type="text" name="nascimento" value="1/3/1973" />
			</label>
			

		</fieldset>

		<fieldset class="fieldset">

			<legend>Endereço Residencial</legend>

			<label>
				<input type="text" name="rua" value="Avenida São João" style="width:270px" />
			</label>

			<label class="label-sizefix">
				<span>N°</span>
				<input type="text" name="numero" value="53" />
			</label>

			<label class="label-sizefix2">
				<span>Complemento</span>
				<input type="text" name="complemento" value="Sobreloja" />
			</label>

			<label class="label-sizefix">
				<span>Bairro</span>
				<input type="text" name="bairro" value="Centro" />
			</label>

			<label class="label-sizefix2">
				<span>CEP</span>
				<input type="text" name="cep" value="86010520" />
			</label>

			<br style="clear:both;" />

			<label>
				<span>Cidade</span>
				<input type="text" name="cidade" value="Londrina/PR" />
			</label>

		</fieldset>

		<fieldset class="fieldset">

			<legend>Endereço Comercial</legend>

			<label>
				<input type="text" name="rua" value="Avenida São João" style="width:270px" />
			</label>

			<label class="label-sizefix">
				<span>N°</span>
				<input type="text" name="numero" value="53" />
			</label>

			<label class="label-sizefix2">
				<span>Complemento</span>
				<input type="text" name="complemento" value="Sobreloja" />
			</label>

			<label class="label-sizefix">
				<span>Bairro</span>
				<input type="text" name="bairro" value="Centro" />
			</label>

			<label class="label-sizefix2">
				<span>CEP</span>
				<input type="text" name="cep" value="86010520" />
			</label>

			<br style="clear:both;" />

			<label>
				<span>Cidade</span>
				<input type="text" name="cidade" value="Londrina/PR" />
			</label>

		</fieldset>

		<fieldset class="fieldset">

			<legend>Telefones</legend>

			<label>
				<span>Residencial</span>
				<input type="text" name="residencial" value="(43)3333-3333" />
			</label>

			<label>
				<span>Comercial</span>
				<input type="text" name="comercial" value="(43)3333-3333" />
			</label>

			<label>
				<span>Celular</span>
				<input type="text" name="celular" value="(43)9999-9999" />
			</label>

		</fieldset>

		<fieldset class="fieldset">

			<legend>Endereço Eletrônico</legend>

			<label>
				<span>Email</span>
				<input type="text" name="email" value="testesistema@irtrade.com.br" />
			</label>

			<label>
				<span>Twitter</span>
				<input type="text" name="twitter" value="@irtrade" />
			</label>

			<label>
				<span>Skype</span>
				<input type="text" name="skype" value="ir.trade" />
			</label>

			<label>
				<span>MSN (Live Messenger)</span>
				<input type="text" name="msn" value="auiwhdiu@hotmail.com" />
			</label>

		</fieldset>

		<fieldset class="fieldset">

			<legend>Endereço para Correspondência</legend>

			<label>
				<span class="checked"></span> Residencial
			</label>

			<input type="submit" class="bt-alterar" />

		</fieldset>

	</form>

</div>


<?php include('footer.php') ?>