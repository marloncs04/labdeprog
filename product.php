<?php 
    if(isset($_POST['busca']) && !empty($_POST['busca']))
    {
        require 'conectar.php';
        require 'classes/Vaga_class.php';

        $b = new Vaga_class();

        $titulo = addslashes($_POST['busca']);

        //$b->buscar($titulo);

        $resultado = $b->buscar($titulo);


        // echo "<prev>";
        // print_r($resultado);
        // echo "<prev>";
    }


?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <title>Tem VAGA ai?!</title>
</head>
<body>
    <header class= "menu-principal">
        <main>
            <div class= "header-1">
                <div class= "logo">
                    <a href ="http://localhost/labdeprog/"> 
                        <img src= "./imagens/logotemvagaai.png"> 
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
                        <a href ="search.php">Vagas</a>
                    </li>
                    <li>
                        <a href ="cadastro.php">Anuncie Agora!</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="busca">
                <form method="POST" action="product.php">
                    <input placeholder="Pesquisa" type="text" name="busca"/>
                    <button placeholder="idBusca" type="submit"  >Buscar</button> 
                </form>
                
            </div>
    </main>
  
    <div class="col-100">
        <?php 
            foreach($resultado as $valor):
            ?>
        <div class="content texto-destaque">
            <h1>
                <strong><?php echo $valor['titulo']; ?></strong>
            </h1> 
                <div class="product">
                <img src="./imagens/quarto3.jpg">
                    <h3>
                        <b>R$ <?php echo $valor['preco']; ?></b>
                    </h3>
                    <p>
                    <?php echo $valor['descricao']; ?>
                    </p>

                    <button placeholder="idReserva" type="submit">Reserve Agora</button>
                </div>

        </div>
        <?php endforeach ?>
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

    
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>



</html>

