<?php
	session_start();

	if(isset($_GET["save"]) && $_GET["save"] == 'dados'){
		$_SESSION['dadospessoais'] = $_POST['dadospessoais'];
		//$dados=$_POST['dadospessoais'];
		//echo 'Dados: ';
		//for($i=0;$i<count($_POST['dadospessoais']);$i++){
		//	echo $dados[$i];
		//}
		
		echo '<script>window.location.href="ciclodevida.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<header>
	<meta title="Gestão consentimento"></meta>
	
	<meta charset="utf-8"></meta>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
	<script src="./script.js"></script>
	<style>
		@font-face{

			src: url(fonts/VisbyCF-Bold.otf);
			font-family: VisbyCF-Bold;
			font-weight: bold;
		}
		@font-face{
			src:url(fonts/VisbyCF-Medium.otf);
			font-family: VisbyCF-Medium;
			font-weight: bold;
		}
		#search{
			height: 50px;
			width: 80%;
			background-color: rgba(196, 198, 199, 0.788);
			opacity: 1;
			padding: 5px 5px 5px 15px;
			border-radius: 100px;
			border: none;
		}
		#selector{
			height: 500px;
			width: 37%;
			background-color: rgba(196, 198, 199, 0.788);
			opacity: 1;
			padding: 5px 5px 5px 15px;
			border-radius: 10px;
			border: none;
		}
		input:focus{
			box-shadow: 0 0 0 0;
   			border: 0 none;
    		outline: 0;
		}
		#title{
			font-size: 30px;
			font-family: VisbyCF-Bold;
		}
		#description{
			font-size: 16px;
			font-family: VisbyCF-Medium;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".select2").select2();
		})
		
	</script>
</header>
<body id="myBody"style="background-color: #2BC6FC">

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 5%;" method="POST" action="?save=dados">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Categoria de dados pessoais</h5>
					<p id="description" class="card-text">Selecione quais tipos de dados são utilizados nesse Caso de Uso.</p>
					<br>
					<div class="card-text-center">
						<select class="select2" name="dadospessoais[]" id="selector" multiple="multiple" tabindex="-1" style="display: none;" placeholder="BUSCAR">
							
							<optgroup label="Dados Pessoais">
								<option>EMAIL</option>
								<option>NUMERO</option>
							</optgroup>
							<optgroup label="Dados de localização">
								<option>ENDERECO</option>
							</optgroup>
						</select>
						<br>
						<br>
						<a href="descricao.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button
							type="submit" 
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">PRÓXIMO</span></button>
					</div>
					<br><br>

						<img src="assets/progressbar/level3.png" width="80%" height="100%" alt="level3">
					
				</div>
			
		</div>
	</form>
</body>
</html>