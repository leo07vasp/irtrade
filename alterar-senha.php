<?php include('header.php') ?>
<div id="main" class="alterar-senha">
		<div class="title-content-default">
			<h1>Alterar senha</h1>
			<span class="desc">Nos dados iniciais você irá inserir blabla bla blablablablabla bla bla bla bla bla bla.</span>
		</div>	
	
	<div class="container-pass">
		
		<label for="senhaAtual">Senha atual</label><br/>
		<input type="text" name="senhaAtual" id="senhaAtual"/>
		<br style="clear:both">
		<label for="novaSenha">Nova Senha</label><br/>
		<input type="text" name="novaSenha" id="novaSenha"/>
		<br style="clear:both">
		<label for="repeatSenha">Repetir Nova Senha</label><br/>
		<input type="text" name="repeatSenha" id="repeatSenha"/>
		
		
		<button class="salvar">salvar</button>
		
	</div>
	
</div>

<?php include('footer.php') ?>