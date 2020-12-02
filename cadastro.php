
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <title>Anuncie Sua Vaga!</title>
</head>
<body>
    <header class= "menu-principal">
        <main>
            <div class= "header-1">
                <div class= "logo">
                    <a href ="http://localhost/labdeprog/"> 
                        <img src= "imagens/logotemvagaai.png"> 
                    </a>
                </div>
                    <div class= "redes-sociais">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/">
                                    <img src="imagens/face_i2.png">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <img src="imagens/inta_icone.png">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <img src="imagens/twiter_icone.png">
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href ="http://localhost/labdeprog/">Início</a>
                    </li>
                    <li>
                        <a href ="sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href ="cadastro.php">Anuncie uma vaga!</a>
                    </li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisa" type="text"/>
                <button placeholder="idBusca" type="submit">Buscar</button> 
            </div>
        </div>
    </main>
  
    <div class="col-100">
        
        <div class="Cadastro">
            <br><br><br><br>
            <form action="cadastrar.php" method="POST" > 
                <h3 id="h_cor">Cadastro De Vaga</h3>
                <input require class="input_caixa" type="text" name="titulo" placeholder="Titulo da vaga">
                <br><br>
                <input  class="input_caixa" type="number"  name="valor" placeholder="Valor" >
                <br><br>
                <textarea  class="textao" type="text" name="descricao" placeholder="Descrição da Vaga" id="descricao"></textarea>
                <br><br>
                <input class="bt" type="file" placeholder="Arquivo" name="foto" multiple ></input><br><br>

                <button class="btn_in" id="cadastrar" >Cadastrar</button>
                <br>
            </form>
        </div>
        

    </div>


</footer>
<div class="col-100 footer">
    <div class="content">

        <p>
            Conforto e comodidade para todos os gostos voce só encontra aqui.
        </p>
    </div>
</div>
<div class="col-100 footer-2">
    <div class="content">

        <p>
            Copyright 2020.
        </p>
    </div>
</div>

    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>



</html>

