$(document).ready(function(){
	
	$('.form-horizontal-data-admin, .section-title-data-admin').hide();
	$('#btn-hide-data-admin').hide();
	$('#btn-add-data-admin').show();

	$('#btn-add-data-admin').click(function(){
		$('.form-horizontal-data-admin, .section-title-data-admin').show();
		$('#btn-hide-data-admin').show();
		$('#btn-add-data-admin').hide();
	});

	$('#btn-hide-data-admin').click(function(){
		$('.form-horizontal-data-admin, .section-title-data-admin').hide();
		$('#btn-hide-data-admin').hide();
		$('#btn-add-data-admin').show();
	});

	$('#tab-add-admin').click(function(){
		$('#add_admin').show();
	});

	$('#tab-list-admin').click(function(){
		$('#add_admin').hide();
	});

	$('#tab-update-admin').click(function(){
		$('#add_admin').hide();
	});

	$('#btn-add-adm').click(function(){

	});
});