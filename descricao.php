<?php	
	session_start();
	if(isset($_GET["save"]) && $_GET["save"] == 'descricao'){
		$_SESSION['description'] = $_POST['desc'];
		echo '<script>window.location.href="dadospessoais.php"</script>';
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
		}
	</style>
</header>
<body id="myBody"style="background-color: #2BC6FC">

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%;"method="POST" action="?save=descricao">
		<div class="card text-center" style="padding-left: 25%; padding-right: 25%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Descreva seu caso de uso</h5>
					<p id="description"class="card-text">Insira uma descrição que será colocada no seu Centro de Privacidade.
					</p><br>
					<div class="card-text-center">
						<textarea 	id="desc" 
								name="desc" 
								type="textarea" 
								placeholder="Descrição do seu caso de uso"></textarea>
						<br><br>
						<p>Quando o seu cliente for gerenciar o seu consentimento, ele verá esta descrição</p>
						<br>
						<a href="title.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button
							type="submit"
							class="btn btn-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">PRÓXIMO</span></button>
					</div>
					<br><br>

						<img src="assets/progressbar/level2.png" width="80%" height="100%" alt="level2">
					
				</div>
			
		</div>
	</form>
</body>
</html>