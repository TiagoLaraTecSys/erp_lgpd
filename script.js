$(document).ready(function()
{
	document.getElementById("picColor").value = '#2BC6FC';
	$("form :input").attr("autocomplete", "off"); $('input[type="text"], select').val('');
	$(document).on('click','.color_data', function(e){
		var selecionado = e.target.style.backgroundColor;
		document.getElementById("myBody").style.backgroundColor = selecionado;
		
		document.getElementById("picColor").value = String(selecionado);
		alert(selecionado + '\n' + document.getElementById("picColor").value);
	});
	$(document).on('change','#picColor', function(){
		var selecionado = this.value;
		document.getElementById("myBody").style.backgroundColor = selecionado;
		document.getElementById("picColor").value = selecionado;
		alert(selecionado + '\n' + document.getElementById("picColor").value);
	});

	$(document).on('click','#subDominio',function(){
		var mask = document.getElementById('basic-addon3');
		mask.style.visibility = 'visible'; 
	})	
});		

$(".select2").select2();