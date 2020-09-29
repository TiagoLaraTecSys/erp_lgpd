<?php
	session_start();
	$organization = $_SESSION['organization'];

	if(isset($_GET["save"]) && $_GET["save"] == 'revisao'){
		$_SESSION['revision'] = $_POST['options'];
		echo '<script>window.location.href="setup1.php"</script>';
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

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;" method="POST" action="?save=revisao">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Revisão de Pedidos de Privacidade</h5>
					<p id="description"class="card-text">Seus clientes poderão fazer solicitações de download
														 ou exclusão de dados e alterações de consentimento.
					</p><br>
					<div id="description" class="card-text">Você pode escolher entre:
					</div>
					
					<div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
						<label class="btn btn-secondary active">
						<input type="radio" name="options" id="option1" value=false autocomplete="off" checked> Fazer revisões manualmente
						</label>
						<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" value=true autocomplete="off"> Deixar a InPakta automatizar
						</label>
					</div>
					<div class="card-text-center">
						<br><br>

						<button 
							type="submit"
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">CONTINUAR</span></button>
					</div>
					<br><br>

	
				</iv>
		</div>
	</form>
</body>
</html>