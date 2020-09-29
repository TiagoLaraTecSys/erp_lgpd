<?php 
	session_start();
	ini_set('display_errors', 1);
	require_once '../../apiConnection/api.class.php';
	$user = $_SESSION['user'];
	function createDomain(){
		$cpanel = new CPANEL(); // Connect to cPanel - only do this once.
  
// Create a subdomain.
		$addsubdomain = $cpanel->api2(
			'SubDomain', 'addsubdomain',
				array(
				'domain'                => 'subdomain',
				'rootdomain'            => 'example.com',
				'dir'                   => '/public_html/directory_name',
				'disallowdot'           => '1',
    )
);
	}
	if(isset($_GET['save']) && $_GET['save'] == 'subdomain'){

		$updateUser = array('nome' => $user->nome,'sobNome' => $user->sobNome, 'email' => $user->email, 
		'organizacao' => $_SESSION['organization'],
		'automated' =>  boolval($_SESSION['revision']),
		 'subDominio' => 'https://'.$_POST['subDominio'].'.inpakta.com.br',
		 'cor' => $_POST['picColor'],
		 'icone' => null);
		$url = 'https://inpaktaservice.herokuapp.com/cliente/'.$user->id;

		$updated = Api::ApiPUT($url,json_encode($updateUser),$_SESSION['authToken']);
		
		switch ($updated) {
			case '204':
				createDomain();
				break;
			
			case '403':
					echo '<script>alert("Valide seu formato JSON!")</script>';
			break;
		};
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
		#subDominio{
			height: 50px;
			width: 320px;
			background-color: #d1d1d1;
			opacity: 1;
			padding: 5px 5px 5px 10px;
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

	<form style="margin-left: 10%; margin-right: 10%; margin-top:5%; margin-bottom: 10%;" method="POST" action="?save=subdomain">
		<div class="card text-center" style="padding-left: 20%; padding-right: 20%;">
			<!--      UgA Uga              -->
				<div class="card-body">
					<br><br>
					<img src="assets/CompositeLayer@1X.png" alt="logo">
					<br>
					<br>
					<br>
					<h5 id="title" style="color: '#12ddc7c'" class="card-title" >Crie o seu Centro de Privacidade</h5>
					<br>
					<div class="card-text-center"
						id=description>Sua organização terá um site customizado exclusivo para os seus clientes gerenciarem seus dados e consentimentos.<p>Vamos cria-lo!</p></div>
                        <br>
                    <div class="card-text-center"
                        id=description>Passo 1: escolha o seu subdomínio</div>                   
                    <br>
					<div class="card-text-center">
						<div style="display:flex; align-items: center; justify-content: center;" class="input-group mb-3">
							<div class="input-group-prepend">
								<span style=" height: 50px;"class="input-group-text" id="basic-addon3">https://</span>
							</div>
							<input 	
									id="subDominio"
									name="subDominio" 
									type="text" 
									
									placeholder="suaempresa"
									aria-describedby="basic-addon3">
									
							<div class="input-group-prepend">
								<span style=" height: 50px;" class="input-group-text">.inpakta.com.br</span>
							</div>
						</div>
                    </div>
                    <br>
                    <div class="card-text-center" 
                        id=description>Passo 2: escolha a cor do seu site</div>
					<div>
			<br>
			
			<ul id="cores">
				<img value="#ff0000"style="background-color: #ff0000;"src="img/vermelho.png" class="color_data rounded-circle" width="40px">
				<img style="background-color: #ff6600;"src="img/laranja.png" class="color_data rounded-circle" width="40px">
				<img style="background-color: #0000ff;"src="img/azulescuro.png" class="color_data rounded-circle" width="40px">
				<img style="background-color: #2BC6FC;"src="img/azulclaro.png" class="color_data rounded-circle" width="40px">
				<img style="background-color: #66ff66;"src="img/verde.png" class="color_data rounded-circle" width="40px">
				<label for="picColor">
				<img type="color" src="img/roda.png" 
				class="rounded-circle" width="40px">
				</label>
				<input class="rounded-circle" 
				type="color" 
				name="picColor" 
				id="picColor" 
				style="visibility:hidden;">
			</ul>
                    
                    </div>

						<br><br>
						<a href="setup3.html" class="btn btn-outline-primary col-3">VOLTAR</a>
						<button 	
							type="submit"
							class="btn btn-outline-primary col-3" 
							style="background-color: #2BC6FC;">
							<span style="color:aliceblue;font-family: VisbyCF-Bold;">CRIAR</span></button>
					
					<br><br>	
					</div>
				</div>
		</div>
	</form>
	<script src="./script.js">
	</script>
</body>
</html>