<?php	
	session_start();
	ini_set('display_errors', 1);
	if(isset($_GET["save"]) && $_GET["save"] == 'casodeuso'){
		$_SESSION['title'] = $_POST['inputTitle'];
		echo '<script>window.location.href="descricao.php"</script>';
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

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;" method="POST" action="?save=casodeuso">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Crie o seu Caso de Uso</h5>
					<br>
					<div class="card-text-center"
						id=description>Insira um nome descritivo para o seu Caso de Uso de Dados em que sua empresa utiliza dados pessoais.</div>
						<br>
					
					<div class="card-text-center">
						<input 	id="inputTitle" 
								name="inputTitle" 
								type="text" 
								class="col-8"
								placeholder="Exemplo: Email Marketing">
					</div>
					<div>
						<br><br>
						<a href="setup1.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button
							type="submit" 	
							class="btn btn-outline-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">PRÓXIMO</span></button>
					
					<br><br>

						<img src="assets/progressbar/level1.png" width="80%" height="100%" alt="level1">	
					</div>
				</iv>
		</div>
	</form>
</body>
</html>