<?php
	session_start();
	ini_set('display_errors', 1);

	require_once '../../apiConnection/api.class.php';

	if (isset($_GET["act"]) && $_GET["act"] == 'logar'){
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$user = array('email' => $email, 'senha' => $senha);
	
		$url = 'https://inpaktaservice.herokuapp.com/login';
	
		$return = Api::ApiConnectPOST($url, json_encode($user));
		$arrayData = json_decode($return);
		$_SESSION['authToken'] = str_replace(':', ' ', $arrayData->authToken);

		if (!empty($_SESSION['authToken'])){
			echo '<script>window.location.href="org.php"</script>';
		} else{
			echo '<script>alert("Usuário não cadastrado na nossa base de dados!")</script>';
		}	
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
   			border: 2;
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
		input{
			font-size: 18px;
			line-height: inherit;
			font-family: VisbyCF-Medium;
			box-sizing: border-box;
		}
	</style>
</header>
<body id="myBody"style="background-color: #2BC6FC">

	<form autocomplete="off"  method="POST" action="?act=logar">
		<div class="card text-center" style="margin:0 auto; margin-right:0 auto; margin-top:5%; margin-bottom: 10%; width:800px;min-height: 660px">
			<!--      UgA Uga              -->
				<div style="background-color:rgba(255,255,255,.60);"> 
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Login</h5>
					
					<div class="card-text-center">
						<input 	id="inputTitle" 
								name="email" 
								type="text" 
								class="col-8"
								autocomplete="off"
								placeholder="Usuário">
					</div>
					<br>
					<div class="card-text-center">
						<input id="inputTitle"
								name="senha"
								type="password"
								class="col-8"
								autocomplete="off"
								placeholder="Senha">
						<br><br><br>
					
						<button 	
							type="submit"
							class="btn btn-outline-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">ENTRAR</span></button>
					</div>
<br>
					<a type="button" class="btn btn-link">Não possui uma conta? Cadastre-se</a>
					<br>
				</div>
		</div>
	</form>
</body>
</html>