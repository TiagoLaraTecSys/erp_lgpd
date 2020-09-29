<?php
	session_start();
	if(isset($_GET["save"]) && $_GET["save"] == 'ciclos'){
		$_SESSION['ciclos'] = $_POST['ciclo'];
		//$dados=$_POST['ciclo'];
		//echo 'Ciclos: ';
		//for($i=0;$i<count($_POST['ciclo']);$i++){
		//	echo $dados[$i];
		//}
		
		echo '<script>window.location.href="consentimento.php"</script>';
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
		#desc{
			height: 150px;
			width: 80%;
			background-color: #d1d1d1;
			opacity: 1;
			padding: 5px 5px 5px 5px;
			border: none;
		}
		textarea:focus{
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
			text-align: justify;
			justify-content: center;
		}
		h6,p{
			text-align: justify;
			justify-content: left;
		}
		input{
			margin-left: 30px;
		}
	</style>

</header>
<body id="myBody"style="background-color: #2BC6FC">

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 5%;" method="POST" action="?save=ciclos">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Ciclo de vida dos dados</h5>
					<span id="description"class="card-text">Selecione os tipos de tratativas pelos quais os dados passam.
					</span><br><br>
				
				
 				<div class="btn-group-primary" data-toggle="buttons">
  					<label class="btn btn-primary col-10" name="Coleta" for="Coleta">  
						  <h6>Coleta</h6>
						  <p>Coletar, arrecadar ou avaliar no seu site ou em plataforma parceira
							  <input type="checkbox" name="ciclo[]" value="1" checked autocomplete="off">
						  </p>			
						  
					</label>
				</div>
				<div class="btn-group-primary" data-toggle="buttons">
  					<label class="btn btn-primary col-10" name="Processamento" for="Processamento" active>
						  <h6>Processamento</h6>
						  <p>Atividades executadas para extrair inormação dos dados             
							<input type="checkbox" name="ciclo[]" value="3" checked autocomplete="off">
						  </p>
   					 
  					</label>
				</div>
				<div class="btn-group-primary" data-toggle="buttons">
  					<label class="btn btn-primary col-10" name="Transferencia" for="Transferencia" active>
						<h6>Transformação</h6>
						<p>Os dados são reutilizados para gerar outras informações, processo de transformação
							<input type="checkbox" name="ciclo[]" value="4" checked autocomplete="off">
						</p>
   					 
  					</label>
				</div>
				<div class="btn-group-primary" data-toggle="buttons">
  					<label class="btn btn-primary col-10" name="Armazenamento" for="Armazenamento" active>
						<h6>Armazenamento</h6>
						<p>Armazenar informações para uso ou consulta posterior
							<input type="checkbox" name="ciclo[]" value="2" checked autocomplete="off">
						</p>
  					</label>
				</div>
			

				<div class="card-text-center"							
						<br><br>
						<a href="dadospessoais.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button
							type="submit"
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">PRÓXIMO</span></button>
				</div>
					<br><br>

						<img src="assets/progressbar/level4.png" width="80%" height="100%" alt="level2" style="margin-bottom: 5%">
					
				</div>
			</div>
		</div>
	</form>
</body>
</html>