$(document).ready(function()
{
	$('.plantas').click(function()
	{	
		$("#plano_planta").remove(); 
		plano_a = $(this).attr('id');
		$("#planta0_1").append('<iframe src="'+ plano_a + '.html" id="plano_planta"  frameBorder="0" style="display: block; margin-left: auto; margin-right: auto; height: 50em;"></iframe>');
	});


});