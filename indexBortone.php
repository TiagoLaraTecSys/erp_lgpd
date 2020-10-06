<?php
session_start();
require_once '../../apiConnection/api.class.php';
    ini_set('display_errors',1);
    //Resgata a url de quem está acessando
    $subDomain = $_SERVER['HTTP_HOST'];

    //Se ele estiver tentando acessar pelo inpakta exibe erro
    if ($subDomain == 'inpakta.com.br'){
        echo '404 NOT FOUND';
    }
    $result = json_decode(Api::ApiGETorganization('https://'.$subDomain));
        $_SESSION['org'] = $result;
    if (empty($_SESSION['org'])){
        $result = json_decode(Api::ApiGETorganization('https://'.$subDomain));
        $_SESSION['org'] = $result;
    }

     if(isset($_GET['valid']) && ($_SESSION['codeToValidate'] == $_POST['validationCode'])){
        Api::ApiValidateCode($_POST['validationCode']);
        echo '<script> $("#validateModal").hide();</script>';
        echo '<scritp>window.location.href="consentimento.php"</script>';
     }
    //echo print_r($_SESSION['org']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Tiago Ribeiro">
        <meta name="desciption" content="Centro de privacidade para gestão dos seus consentimentos para com os serviços desta empresa">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <title>Centro de privacidade: <?php echo $subDomain?></title>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="/estilos.css" media="screen"> 
        <script>
            function valida_form(x)
            {
            
            var atpos=x.indexOf("@");
            var dotpos=x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+3 || dotpos+2>=x.length)
            {
                return false;
            }
                return true;
            }
            $(document).ready(function(){

                $('#selectOpcoes li').click(function(){
                    console.log(this.value);
                    document.getElementById('invisibleInput').value = this.value;
                })
                $(document).on('keyup','#emailInput', function(){
                    if (valida_form(this.value)){
                        document.getElementById('mybutton').disabled = false;
                        document.getElementById('mybutton').style.opacity = 1;
                        
                    }   else{
                        document.getElementById('mybutton').style.opacity = 0.7;
                        document.getElementById('mybutton').disabled = true;
                    }
                });
            });
        </script>
<style>
 body {
   --main-color: <?php echo $_SESSION['org']->cor?>;
 }
</style>
    </head>
    <body>
            <div id="bck_principal">
                <div class="bck_secundario">
                    <img src="<?php echo $_SESSION['org']->icone?>" width="25%" height="25%">
                    <br>
                    <section class="bck_secundario">
                      <p id="title" style="color: '#a9a9a9'" class="card-title" >Central de Serviços</p>
                      <!--<p id="title" style="color: '#12ddc7c'" class="card-title" ><?php echo strtoupper($_SESSION['org']->organizacao)?></p>-->
                      <p id="description" class="card-text">Quando você utiliza os nossos serviços, você está colocando suas informações em nossas mãos.
                      Entendendo essa responsabilidade, nós trabalhamos para proteger os seus dados pessoais e colocar você no controle.</p>
                        <ul id="selectOpcoes">
                        <li value=2 class="opcoes" data-toggle="modal" data-target="#emailModal"> <!- OPÇÃO PARA FAZER DONWLOAD DOS DADOS-->
                            <div class="opcoes_desc">
                                <h5 style="font-family:VisbyCF-Bold">Baixar todos os meus dados</h5>
                                    <p >Aqui você pode requisitar todos os seus dados utilizado por essa "ORGANIZAÇÃO".
                                        A solicitação levará um tempo para ser processada, a "ORGANIZAÇÃO" manterá contato para lhe deixar atualizado.
                                    </p>
                            </div>                            
                            <i class="fas fa-cloud-download-alt fa-3x text-secondary"></i>
                        </li>
                        <li value=1 class="opcoes" data-toggle="modal" data-target="#emailModal">
                            <div class="opcoes_desc">
                                <h5 style="font-family:VisbyCF-Bold">Deletar todos os meus dados</h5>
                                    <p >Aqui você pode pedir para que deletem todos os seus dados utilizado por essa "ORGANIZAÇÃO".
                                        A solicitação levará um tempo para ser processada, a "ORGANIZAÇÃO" manterá contato para lhe deixar atualizado.
                                    </p>
                            </div>    
                            <i class="fas fa-user-times fa-3x text-secondary"></i>
                        </li>
                        <li value=3 class="opcoes" data-toggle="modal" data-target="#emailModal">
                            <div class="opcoes_desc">
                                <h5 style="font-family:VisbyCF-Bold">Gestão dos seus consentimentos</h5>
                                    <p >A "ORGANIZAÇÃO" trabalha com alguns processos que envolvem informações suas para: 
                                        Coletar, transformar dados, armazenar e processar.
                        
                                        Para que por exemplo voê possa receber promoções exclusivas em diversos canais de comunicação.
                                            A solicitação levará um tempo para ser processada, a "ORGANIZAÇÃO" manterá contato para lhe deixar atualizado.
                                    </p>
                            </div>    
                                <i class="fas fa-exchange-alt fa-3x text-secondary"></i>
                        </li>
                        </ul>
                    </section>
                </div>
            </div>
    </body>

    <div id="footerer">
            Distribuido por
            <img style="margin-left:15px"src="IconLetter.png" width="120" height="35">
    </div>
<!--Modais-->

</html>
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal">
  <div style="font-family:VisbyCF-Medium" class="modal-dialog modal-dialog-centered" role="document">
  <form method="POST" action="?email=sent">
    <div class="modal-content">
      <div class="modal-body">
        <p >Informe um endereço de email associado com os dados cadastrados nessa organização.
            Enviaremos para você um codigo de verificação para verificar seu email.
        </p>
        <input  id="emailInput"
                name="emailInput"
                class="form-control"
                placeholder="email"
                type=" email">
        <input id="invisibleInput"
               name="invisibleInput"
               hidden=true                          
        >
      </div>
      
        <button type="submit" class="mybutton" id="mybutton">ENVIAR</button>
      
    </div>
    </form>
  </div>
</div>

<!-aqui é aonde o filho chora e a mãe não ve-->
<div class="modal " id="validateModal" tabindex="-1" role="dialog" aria-labelledby="validateModal">
  <div style="font-family:VisbyCF-Medium" class="modal-validation" role="document">
  <form method="POST" action="?valid=sent">
    <div class="modal-content">
      <div class="modal-body">
        <p >Digite o código que lhe enviamos
        </p>
        <input  id="validationCode"
                name="validationCode"
                class="form-control"
                placeholder="CÓDIGO VAI AQUI"
                type="text"
                />
      </div>
      
        <button type="submit" class=" form-control mybutton" id="mybutton">VALIDAR</button>
      
    </div>
    </form>
  </div>
</div>
<?php
    if(isset($_GET['email']) && $_GET['email'] == 'sent'){

        $url = 'https://inpaktaservice.herokuapp.com/subject';

        $body = array(
            'email'=> $_POST['emailInput'],
            'tipo' => $_POST['invisibleInput'],
            'subDominio' => 'https://'.$subDomain
        );
        $validCode = Api::ApiPOST($url,json_encode($body),null);

        $_SESSION['codeToValidate'] = $validCode['body'];

        echo '<script> $("#validateModal").addClass("overlay");</script>';
     }
?>
