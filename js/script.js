jQuery(document).ready(function($) {

/*Script para mudança de selects clonados*/
jQuery('select').live('change', function(){
	  jQuery(this).find(':selected').attr('selected', 'selected').siblings().removeAttr('selected');
});


/*Script de tabs dados iniciais*/

       jQuery( ".tabs" ).tabs({
            beforeLoad: function( event, ui ) {
                ui.jqXHR.error(function() {
                    ui.panel.html(
                        "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                        "If this wouldn't be a demo." );
                });
            }
        });


// jQuery('.tabs ul.links li a').live('click', function(){
// 	var mostrar = jQuery(this).attr('href');
// 	jQuery('.tabs ul.links li').removeClass('active');
// 	jQuery(this).parent().addClass('active');
// 	jQuery('.conteudos > div').hide();
// 	jQuery(mostrar).show();
// 	return false;
// });


jQuery('body').on('keydown', 'select, input, textarea', function(e){
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13) {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        }
});


/*Script que controla os selects associar corretoras*/
jQuery('.butons-control-select .go').live('click', function(){
	var selected1 = jQuery('.start-select.dados-start option:selected');
	jQuery('.start-select.dados-start option:selected').remove();
	jQuery('.end-select.dados-start').append(selected1);
	return false;
});


jQuery('.butons-control-select .back').live('click', function(){
	var selected2 = jQuery('.end-select.dados-start option:selected');
	jQuery('.end-select.dados-start option:selected').remove();
	jQuery('.start-select.dados-start').append(selected2);
	return false;
});




/*Script que controla o insert e remove na tabela de custodia dados iniciais*/
jQuery('.custodia tr .insert-btn').live('click', function(){
	jQuery('.custodias').show();
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	jQuery('.custodias tbody').append(tr);
	return false;
});

jQuery('.custodias tr .remove-btn').live('click', function(){
	jQuery(this).closest('tr').remove();
	if(jQuery('.custodias tbody tr').length <= 0){
		jQuery('.custodias').hide();
	}
	return false;

});


/*script que controla o insert e remove fundo imobiliarios*/
jQuery('#fundos-table tr .insert-btn').live('click', function(){
if(jQuery('#valorNao2').prop('disabled') != true && jQuery('#valorSim2').prop('disabled') != true){
	jQuery('#fundos-table').show();
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	jQuery('#fundos-table2 tbody').append(tr);
	jQuery('#fundos-table2').show();
}
	return false;

});


jQuery('#fundos-table2 tr .remove-btn').live('click', function(){
		if(jQuery('#fundos-table2 tbody tr').length != 1){
	jQuery(this).closest('tr').hide();
	}
	return false;
});



/*script que controla o insert e remove na tabela de valores acumulados dados iniciais*/
jQuery('.valores tr .insert-btn').live('click', function(){
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	if(jQuery('#valorNao').prop('disabled') != true && jQuery('#valorSim').prop('disabled') != true){
	jQuery('.valores2 tbody').append(tr);
	jQuery('.valores2').show();
	}

	return false;

});

jQuery('.valores2 tr .remove-btn').live('click', function(){
	jQuery(this).closest('tr').remove();
		if(jQuery('.valores2 tbody tr').length <= 0){
	jQuery('.valores2').hide();
	}
	return false;
});

// script que controla os inputs checked que desabilita a edicao da tabela
jQuery('#valorNao').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorSim').prop('disabled',true);
		jQuery('.valores tr input').prop('disabled', true);
	}else{
		jQuery('#valorSim').prop('disabled',false);
		jQuery('.valores tr input').prop('disabled', false);
	}
});

jQuery('#valorSim').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorNao').prop('disabled',true);
		jQuery('.valores tr input').prop('disabled', true);
	}else{
		jQuery('#valorNao').prop('disabled',false);
		jQuery('.valores tr input').prop('disabled', false);
	}
});



// script que controla os inputs checked que desabilita a edicao da tabela fundos imobiliarios
jQuery('#valorNao2').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorSim2').prop('disabled',true);
		jQuery('#fundos-table tr input').prop('disabled', true);
	}else{
		jQuery('#valorSim2').prop('disabled',false);
		jQuery('#fundos-table tr input').prop('disabled', false);
	}
});

jQuery('#valorSim2').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorNao2').prop('disabled',true);
		jQuery('#fundos-table tr input').prop('disabled', true);
	}else{
		jQuery('#valorNao2').prop('disabled',false);
		jQuery('#fundos-table tr input').prop('disabled', false);
	}
});


// script que controla a mudanca de tabela quando o tipo de nota e alterado 
jQuery('select#nota').live('change', function(){
	if(jQuery(this).find('option:selected').val() == 'bovespa'){
		jQuery('table.nota-bmf').hide();
		jQuery('table.nota-bovespa').show();
	}else{
		jQuery('table.nota-bovespa').hide();
		jQuery('table.nota-bmf').show();
	}
});


/*script pra alterar o bg da td das tabelas com inputs que precisam que fique com aparencia de input text 100%*/

jQuery('table.com-hover-input td input').live({
	focusout: function(){
		jQuery(this).parent().css('background','#FFF');
	},
	focus: function(){
		jQuery(this).parent().css('background','#F9F9F9');
	}
});

// script que adiciona linha na tabela de nota
var trNota = '<tr><td>	<select id="" name="">		<option value="1">tipo 1</option>	<option value="2">tipo 2</option>	</select></td><td><select id="" name=""><option value="1">corretota 1</option>	<option value="2">corretora 2</option>	</select></td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td>	<td class="btn-table"><button class="add big-mais">+</button><button class="less big-menos">-</button></td></tr>';

jQuery('.notaT1 .btn-table .add').live('click', function(){
	jQuery(this).closest('tr').after(trNota);
});

jQuery('.notaT1 .btn-table .less').live('click', function(){
	jQuery(this).closest('tr').remove();
});


// script que controla as contas no liquida termo dialog
jQuery(".table-termo input.valor, .table-avista input.valor, .table-btc input.valor").live({
	blur: function(){
		var indexdeselecao1 = jQuery(this).closest('tr').index();
		valorStartFixed = parseInt(jQuery('.table-liquidar tr:eq('+(indexdeselecao1+1)+') input.valor').val());
	},
	focusout : function(){
		var indexdeselecao = jQuery(this).closest('tr').index();
		var numeroDigitado = parseInt(jQuery(this).val());
		var valorStart = parseInt(jQuery('.table-liquidar tr:eq('+(indexdeselecao+1)+') input.valor').val());
		var valorFinal = (valorStart-numeroDigitado);
		if(valorFinal < 0){
			console.log(' conta impossivel');
		}else if(isNaN(valorFinal)){
			jQuery('.table-liquidar tr:eq('+(indexdeselecao+1)+') input.valor').val(jQuery('.table-liquidar tr:eq('+(indexdeselecao+1)+') input.valor').attr('valorStartAttr'));
		}
		else{
			jQuery('.table-liquidar tr:eq('+(indexdeselecao+1)+') input.valor').val(valorFinal);
		}
	}
});

// script que controla os collapses de botoes em tabelas
	jQuery('.bt-menos').live('click', function(){
		jQuery(this).closest('table').find('tbody tr').fadeOut();
		jQuery(this).removeClass('bt-menos').addClass('bt-mais');
		return false;
	});

	jQuery('.bt-mais').live('click', function(){
		jQuery(this).closest('table').find('tbody tr').fadeIn();
		jQuery(this).removeClass('bt-mais').addClass('bt-menos');
		return false;
	});

	jQuery('.bt-mais-bundle').live('click', function(){
		jQuery('#main.renda-variavel #info .table-wrapper table tbody tr').fadeIn();
		return false;
	});

	jQuery('.bt-menos-bundle').live('click', function(){
		jQuery('#main.renda-variavel #info .table-wrapper table tbody tr').fadeOut();
		return false;
	});


/*adciona e remove linhas no eventos corporativos*/


jQuery('.evento-filter .add').live('click', function(){
	var tr = jQuery(this).closest('tr').clone();
	jQuery(tr).find('input').val('');
	jQuery(this).closest('tr').after(jQuery(tr));
	return false;
});

jQuery('.evento-filter .less').live('click', function(){
	if(jQuery('.evento-filter tbody tr').length != 1){
		jQuery(this).closest('tr').remove();
	}
	return false;
});

});
