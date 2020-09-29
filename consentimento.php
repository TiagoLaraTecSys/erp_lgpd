<?php
	session_start();
	
	if(isset($_GET["save"]) && $_GET["save"] == 'consent'){
		$_SESSION['consentiment'] = $_POST['options'];
		echo '<script>window.location.href="setup2.php"</script>';
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
		#inputTitle{
			height: 50px;
			width: 355px;
			background-color: #d1d1d1;
			opacity: 1;
			padding: 5px 5px 5px 5px;
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
</header>
<body id="myBody"style="background-color: #2BC6FC">

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;" method="POST" action="?save=consent">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Consentimento</h5>
					<p id="description"class="card-text">Se o tratamento desses dados é necessário para a execução da prestação de serviço ou cumprimento do contrato não há necessidade do consentimento.
														 O tratamento para outras finalidades depende do consentimento do titular, por exemplo para o uso de email para fins de marketing.
					</p><br>
					<div id="description" class="card-text">Esse Caso de Uso requer Consentimento?
					</div>
					
					<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
						<label class="btn btn-secondary active">
						<input type="radio" name="options" id="option1" value="false" autocomplete="off" checked> Não
						</label>
						<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" value="true" autocomplete="off"> Sim
						</label>
					</div>
					<div class="card-text-center"
						<br><br>
						<a href="ciclodevida.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button  
							type="submit"
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">FINALIZAR</span></button>
					</div>
					<br><br>

						<img src="assets/progressbar/level5.png" width="80%" height="100%" alt="level1">	
				</iv>
		</div>
	</form>
</body>
</html>