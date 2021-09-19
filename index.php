<?php
   session_start();
   session_unset() and session_destroy();
?>

<!DOCTYPE html>
<html lang ="pt-br">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="styleindexnovo.css"/>
        <title>Home :: Faculdade Mineira</title>
        <meta charset="utf-8"/>
        <meta name="Faculdade Mineira" content="Venha construir o seu futuro com a gente, o primeiro passo é se ingressar. A melhor faculdade do Brasil!"/>
    </head>

    <body>
    
        <div id="wrap">
            <header>
                <nav class="menu">
                    <ul>
                        <li><a href="#">A Faculdade Mineira</a>
                            <ul>
                                <li><a href="integrantes.html">História</a></li>
                                <li><a href="embreve.html">Missão e Valores</a></li>
                                <li><a href="embreve.html">Responsabilidade Social</a></li>
                                <li><a href="embreve.html">Ética e integridade</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Cursos</a>
                            <ul>
                                <li><a href="Table_Bacharelado/Bacharelado.html">Graduação</a></li>
                                <li><a href="Table_Tecnologo/Tecnologo.html">Tecnologo</a></li>
                                <li><a href="Table_POS/Pos.html">Pós-Graduação | MBA</a></li>
                            </ul>
                        </li>
                        <li><a href="Inscricao/login.php">Inscreva-se</a>
                        </li>
                         <li><a href="Login.php">Login</a>
                        </li>
                    </ul>
                </nav>
             </header>
            <div class="Carr"> 
                         
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="PRIMEIRO_BANER.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="SEGUNDO_BANNER.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="TERCEIRO_BANNER_VOCE.png" class="d-block w-100" alt="...">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div> 
                         
            </div>
        </div>
        <div class="spot">
            <a href="https://open.spotify.com/playlist/0d7kEYM40LyLMwjzrSE8uH" target="_blank"><Img Src= "spotify _logo.png" weigth=55 height=65 id="lgo_spt"></a>
        </div>
               
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        </body>
</html>
