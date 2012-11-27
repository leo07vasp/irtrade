jQuery(document).ready(function($) {

jQuery('.tabs ul.links li a').live('click', function(){
	var mostrar = jQuery(this).attr('href');
	jQuery('.tabs ul.links li').removeClass('active');
	jQuery(this).parent().addClass('active');
	jQuery('.conteudos > div').hide();
	jQuery(mostrar).show();
	return false;
});


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

jQuery('.valores tr .insert-btn').live('click', function(){
	jQuery('.valores2').show();
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	jQuery('.valores2 tbody').append(tr);
	return false;

});

jQuery('.valores2 tr .remove-btn').live('click', function(){
	jQuery(this).closest('tr').remove();
		if(jQuery('.valores2 tbody tr').length <= 0){
	jQuery('.valores2').hide();
	}
	return false;
});


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

jQuery('select#nota').live('change', function(){
	if(jQuery(this).find('option:selected').val() == 'bovespa'){
		jQuery('table.nota-bmf').hide();
		jQuery('table.nota-bovespa').show();
	}else{
		jQuery('table.nota-bovespa').hide();
		jQuery('table.nota-bmf').show();
	}
});


jQuery('table.com-hover-input td input').live({
	focusout: function(){
		jQuery(this).parent().css('background','#FFF');
	},
	focus: function(){
		jQuery(this).parent().css('background','#F9F9F9');
	}
});


var trNota = '<tr><td>	<select id="" name="">		<option value="1">tipo 1</option>	<option value="2">tipo 2</option>	</select></td><td><select id="" name=""><option value="1">corretota 1</option>	<option value="2">corretora 2</option>	</select></td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td><td><input type="text"> </td>	<td class="btn-table"><button class="add">+</button><button class="less">-</button></td></tr>';

jQuery('.notaT1 .btn-table .add').live('click', function(){
	jQuery(this).closest('tr').after(trNota);
});

jQuery('.notaT1 .btn-table .less').live('click', function(){
	jQuery(this).closest('tr').remove();
});

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


});
