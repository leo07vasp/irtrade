<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>IR TRADE</title>
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery-ui-1.9.1.custom.min.js"></script>
	<script src="js/jquery.maskMoney.js"></script>
	<link rel="stylesheet" href="css/ui-trade/jquery-ui-1.9.1.custom.min.css"/>
	<link rel="stylesheet" href="css/estilo.css"/>
</head>

	<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery('ul.menu > li').live({
		mouseenter:function(){
			if(jQuery(this).find('ul.subs li').length){
			jQuery(this).find('ul.subs').show();
			}
		},
		mouseleave: function(){
			jQuery(this).find('ul.subs').hide();
		}

	});
	
	
	jQuery("input.valorFormat").maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
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
			<li><a href="/notas-salvas.php">Notas Salvas</a> </li>
			<li><a href="/manutencao-carteira.php">Manutençåo de Carteira</a> </li>
		</ul>	
	</li>
	


	<li class="relatoriosC"><a href="#">relatorios contabéis</a>
			<ul class="subs">
				<li><a href="/custodia-atual.php">Custódia atual</a> </li>
				<li><a href="/sintetico-bovespa.php">Sintético Bovespa</a> </li>
				<li><a href="/sintetico-bmf.php">Sintético BMF</a> </li>
				<li><a href="/historico-ativo.php">Histórico Ativo</a> </li>

			</ul>	
	</li>




	<li class="relatoriosD"><a href="#">relátorios de declaração</a>
		<ul class="subs">
			<li><a href="/rendimentos-isento.php">Rendimentos Isentos</a> </li>
			<li><a href="/renda-variavel.php">Renda Variável (Comuns | DayTrade)</a> </li>
			<li><a href="/fundos-imobiliarios.php">Fundos Imobiliários</a> </li>
			<li><a href="/irrf.php">IRRF Fonte</a> </li>
			<li><a href="/kit-declaracao.php">Kit Declaração</a> </li>
		</ul>	
	</li>
	



	<li class="minhaC"><a href="#">minha conta</a>
		<ul class="subs">
			<li><a href="/dados-cadastrais.php">Dados Cadastrais</a> </li>
			<li><a href="/meu-contrato.php">Meu Contrato</a> </li>
			<li><a href="/servicos-adicionais.php">Serviços Adicionais</a> </li>
			<li><a href="/pagamentos.php">Pagamentos</a> </li>
			<li><a href="/alterar-senha.php">Alterar Senha</a> </li>
		</ul>	
	</li>
	   


	   <li class="links"><a href="/links-uteis.php">links uteis</a>
			<ul class="subs">
	
			</ul>	
		</li>
</ul>

</div>


<script type="text/javascript">
    jQuery(document).ready(function($) {
         jQuery( "#carregando" ).dialog({
            autoOpen: false,
            modal: true,
            title: 'Aguarde',
            width: 330
        });
         jQuery("#carregando").siblings('div.ui-dialog-titlebar').remove();
    });
//abrindo mensagem ---> jQuery( "#carregando" ).dialog('open');    
//fechando mensagem ---> jQuery( "#carregando" ).dialog('close');    
</script>

<div id="carregando">
	<img src="/loader.gif" alt="carregando"/>
	<p class="text-apresentcao">Aguarde estamos processando sua solicitação</p>
</div>


</html>
