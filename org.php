<?php
	session_start();
	if (isset($_GET["save"]) && $_GET["save"] == 'org'){
		$_SESSION['organization'] = $_POST['organization'];
		echo '<script>window.location.href="revisao.php"</script>';
	}
	ini_set('display_errors', 1);
	require_once '../../apiConnection/api.class.php';
	$token = $_SESSION['authToken'];
	$token = str_replace(':', ' ', $token);
	$url = 'https://inpaktaservice.herokuapp.com/cliente/infos';
	$arrayObject = json_decode(Api::ApiConnectGET($url,$token));
	$_SESSION['user'] = $arrayObject;
	$nomeUser = $arrayObject->nome.' '.$arrayObject->sobNome;

	if(!empty($arrayObject->organizacao)){
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
		#name{
			font-size: 16px;
			font-family: VisbyCF-Medium;
			color:white;
		}
		input{
			font-size: 18px;
			line-height: inherit;
			font-family: VisbyCF-Medium;
			box-sizing: border-box;
		}
	</style>
</header>
<body id="myBody"style="background-color: #2BC6FC">
		<div id="name" class="text-center" >
				Bem vindo! <?php echo $nomeUser?>
		</div>
	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;" method="POST" action="?save=org">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Qual é o nome da sua organização?</h5>
					<br>
					<div class="card-text-center"
						id=description>Este é o nome que aparecerá no Centro de Privacidade da sua companhia.</div>
						<br>
					
					<div class="card-text-center">
						<input 	id="inputTitle" 
								name="organization" 
								type="text" 
								class="col-8"
								>
					</div>
					<div>
						<br><br>
						<button
							type="submit" 	 
							class="btn btn-outline-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">CONFIRMAR</span></button>
					
					<br><br>

				
					</div>
				</iv>
		</div>
	</form>
</body>
</html>