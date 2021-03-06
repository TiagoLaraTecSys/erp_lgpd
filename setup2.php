<?php
	session_start();
	require_once '../../apiConnection/api.class.php';
	$dados = array();
	$da = $_SESSION['dadospessoais'];
	for ($i=0; $i<count($_SESSION['dadospessoais']);$i++){
		$dados[$i] = array('dado'=>$da[$i]);
	}
	$url = 'https://inpaktaservice.herokuapp.com/casodeuso';

	
	$newCasoDeUso = array(	'nome' => utf8_decode($_SESSION['title']), 
							'descricao' => utf8_decode($_SESSION['description']),
							'dadosPessoais' => $dados,
							'lifecycles' => ($_SESSION['ciclos']),
							'useConsent' => utf8_encode($_SESSION['consentiment']));
	
	$return = Api::ApiPOST($url, json_encode($newCasoDeUso), str_replace(':',' ', $_SESSION['authToken']));
	echo json_encode($newCasoDeUso);

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

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Bem vindo à InPakta</h5>
					<p id="description"class="card-text">Se é a sua primeira vez, recomendamos seguir
														 com atenção o processo de configuração abaixo
					</p><br>
					<a href="title.html" 
						role="button"
						class="btn btn-primary btn-lg btn-block disabled" 
						style="margin-bottom: 5%">Passo 1: criar casos de uso de dados</a>	
					<a href="fontes.html" 
						role="button"
						class="btn btn-primary btn-lg btn-block" 
						style="margin-bottom: 5%">Passo 2: adicionar fontes de dados</a>	
					<a href="#" 
						role="button"
						class="btn btn-primary btn-lg btn-block disabled" 
						style="margin-bottom: 5%">Passo 3: customizar Centro de Privacidade</a>

					<div class="card-text-center"
						<br><br>
					<div id="description" class="card-text" style=margin-bottom: 5%">Ou se preferir, você pode pular essa etapa e retornar no futuro
					</div>
						<a 	href="#" 
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC; margin-top: 2%">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">Pular</span></a>
					</div>
					<br><br>
				</iv>
		</div>
	</form>
</body>
</html>