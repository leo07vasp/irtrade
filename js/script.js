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
});


jQuery('.butons-control-select .back').live('click', function(){
	var selected2 = jQuery('.end-select.dados-start option:selected');
	jQuery('.end-select.dados-start option:selected').remove();
	jQuery('.start-select.dados-start').append(selected2);
});


jQuery('.custodia tr .insert-btn').live('click', function(){
	jQuery('.custodias').show();
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	jQuery('.custodias tbody').append(tr);
});

jQuery('.custodias tr .remove-btn').live('click', function(){
	jQuery(this).closest('tr').remove();
	if(jQuery('.custodias tbody tr').length <= 0){
		jQuery('.custodias').hide();
	}
});

jQuery('.valores tr .insert-btn').live('click', function(){
	jQuery('.valores2').show();
	var tr = jQuery(this).closest('tr').clone();
	jQuery(this).find('input').val('');
	jQuery(tr).find('.insert-btn').removeClass('insert-btn').addClass('remove-btn');
	jQuery(tr).find('input').prop('disabled', true);
	jQuery('.valores2 tbody').append(tr);
});

jQuery('.valores2 tr .remove-btn').live('click', function(){
	jQuery(this).closest('tr').remove();
		if(jQuery('.valores2 tbody tr').length <= 0){
	jQuery('.valores2').hide();
	}
});


jQuery('#valorNao').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorSim').prop('disabled',true);
	}else{
		jQuery('#valorSim').prop('disabled',false);
	}
});

jQuery('#valorSim').live('change',function(){
	if(jQuery(this).is(':checked')){
		jQuery('#valorNao').prop('disabled',true);
	}else{
		jQuery('#valorNao').prop('disabled',false);
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
})


});
