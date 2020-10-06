<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Tiago Ribeiro">
        <meta name="desciption" content="Centro de privacidade para gestão dos seus consentimentos para com os serviços desta empresa">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
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
    <div id="headerer">
        <img src="<?php echo $_SESSION['org']->icone?>" width="70px" height="40px">
    </div>
        <div id="bck_principal">
            <h1>GESTÃO DE CONSENTIMENTOS</h1>
            <br>
            <div class="bck_secundario">
                <h5>Para cada atividade abaixo, precisamos do seu consentimento para usar seus dados nos processo.
                    Você pode consentir ou não para cada atividade individualmente usando os botões Sim/Não à direita.
                </h5>

                <div class="main-table">
                    <div class="header-table">
                        <p>Atividade processada </p>
                        <p>Você autoriza?</p>
                    </div>
                    <div class="body-table">
                        <div class="body-header-table">
                            <h4>TESTE</h4>
                            <div class="body-table-information">Mais informações
                                <i class="fas fa-caret-down"></i>
                            </div>

                            <div class="body-table-consent">
                                <button>Sim</button>
                                <button>Não</button>
                            </div>
                        </div>
                        <div id="infos" class="expanded-info">
                            <h1>SURPRISE MOTHAFOCA</h1>
                        </div>
                    </div>
                    <div class="body-table">
                        <div class="body-header-table">
                            <h4>TESTE</h4>
                            <div class="body-table-information">Mais informações
                                <i class="fas fa-caret-down"></i>
                            </div>

                            <div class="body-table-consent">
                                <button>Sim</button>
                                <button>Não</button>
                            </div>
                        </div>
                        <div id="infos" class="expanded-info">
                            <h1>SURPRISE MOTHAFOCA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div id="footerer">
        Distribuido por
        <img style="margin-left:15px"src="IconLetter.png" width="120" height="35">
    </div>
    <script>
        $('.body-table').click(function(){
            $(this).children('.expanded-info').toggleClass('activated');
        })
    </script>
</html>
