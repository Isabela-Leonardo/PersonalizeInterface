<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENUS</title>

    <?php
       include "compara.inc";
    ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">


</head>
<body>

    <div class="container-fluid">
                <div class="row area" >
                    <div class="col-sm-12 bg-light">
                    <?php

                        if (ISSET($_COOKIE["corperso"]))
                            echo "<img src='img/".$_COOKIE['corperso'].".jpg' class='img-fluid'>";
                     
                        else
                            echo "<img src='img/azul.jpg' class='img-fluid'>";
                    ?>
                    
                    </div>
                </div>
                <br>

               <div class="row area">
                    <div class="col-sm-12 bg-light">
                        <h6><p align="right"> Personalize sua interface 
                        <a href="cookie.php?id=azul"> <img src=img/btnazul.png border=no WIDTH=30 HEIGTH=30> </a> &nbsp;&nbsp;
                        <a href="cookie.php?id=verde"> <img src=img/btnverde.png  border=no WIDTH=30 HEIGTH=30> </a>&nbsp;&nbsp;
                        <a href="cookie.php?id=vermelho"><img src=img/btnvermelho.jpg  border=no WIDTH=30 HEIGTH=30></a>
                    </p></h6>
                 
                    </div>
                        
                </div>
            </p>
         

                            
                <nav class="navbar navbar-expand-lg navbar-dark azul">
                    <a class="navbar-brand" href="#">MINHA MARCA</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                                 

                    <div class="collapse navbar-collapse" id="menu">
                    
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="produtos.html">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.html">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
      

        <br>



        <br>
        <div class="row area" >
            <div class="col-sm-12 bg-light">
                <h3>SOBRE NÓS</h3>
                <br>
                <br>
                

                xxxxxx <br> 
                xxxxxx <br> 
                xxxxxx <br>
                xxxxxx


            </div>
        </div>

        <br>
        <div class="row rodape">
            <div class="col-sm-12 azul  text-light">
                <h4>Rodape</h4>
            </div>
        </div>

    </div>

    <script src="javascript/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
</body>
</html>