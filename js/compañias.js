$(document).ready(function()
{

	$('.compa').mouseover(function()
	{
		$("#logo_comp").remove(); 
		$("#logo_comp2").remove(); 
		compañia = $(this).attr('id');

		$("#galeria").append('<img src="img/COMPAÑIAS/'+ compañia + '.jpg" id="logo_comp" style="width: 149px; height: 149px; border: 1px solid red;"></img>');
		$('.compa').mouseout(function()
		{
			$("#logo_comp").remove(); 
		});
	});

	$('.compa').click(function()
	{	
		$("#web_compañia").remove();
		$("#logo_comp").remove();
		$("#logo_comp2").remove(); 
		compañia = $(this).attr('id');
		compañia_url = $(this).attr('title');
		$("#galeria").append('<img src="img/COMPAÑIAS/'+ compañia + '.jpg" id="logo_comp2" style="width: 149px; height: 149px; border: 1px solid red;"></img>');
		$("#compañias").append('<iframe src="'+ compañia_url + '" id="web_compañia" title="'+compañia_url+'" style="width: auto; max-width:100%; border: 1px solid red; margin-top: 300px; margin-right: 20%;"></iframe>');
	});

});
