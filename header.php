<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>IR TRADE</title>
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="css/estilo.css"/>
</head>

	<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery('ul.menu > li').live({
		mouseenter:function(){
			jQuery(this).find('ul.subs').show();
		},
		mouseleave: function(){
			jQuery(this).find('ul.subs').hide();
		}

	});
});

</script>

<div id="header">

<h1 class="logo"><a href="#"><img src="css/img/logo.png" alt="irtrade" title="irtrade"></a><span>irtrade</span> </h1>
<a class="link-start" href="/inicio.php">inicial</a>
<div class="links-help">
	<a class="ajuda-link" href="#">ajuda</a>
	<a href="#">sair</a>
</div>
<ul class="menu">
	

	<li class="manutencao">
	<a href="#">manutenção</a>
		<ul class="subs">
			<li><a href="/dados-iniciais.php">Dados Iniciais</a> </li>
			<li><a href="/envio.php">Transferir Arquivos</a> </li>
			<li><a href="/nota.php">Inserir Nota</a> </li>
			<li><a href="/notas-pendentes.php">Notas Pendentes</a> </li>
			<li><a href="/eventos.php">Eventos Coorporativos</a> </li>
			<li><a href="">Notas Salvas</a> </li>
			<li><a href="">Manutençåo de Carteira</a> </li>
		</ul>	
	</li>
	


	<li class="relatoriosC"><a href="#">relatorios contabéis</a>
			<ul class="subs">
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>

			</ul>	
	</li>




	<li class="relatoriosD"><a href="#">relátorios de declaração</a>
		<ul class="subs">
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
		</ul>	
	</li>
	



	<li class="minhaC"><a href="#">minha conta</a>
		<ul class="subs">
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
			<li><a href="">teste</a> </li>
		</ul>	
	</li>
	   


	   <li class="links"><a href="#">links uteis</a>
			<ul class="subs">
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>
				<li><a href="">teste</a> </li>
			</ul>	
		</li>
</ul>

</div>


</html>
