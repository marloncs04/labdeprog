<?php

    if(isset($_GET['idVagaUp']))
    {
        require_once 'conectar.php';
        require_once 'classes/Vaga_class.php';  

        $e = new Vaga_class();

        $id_up = addslashes($_GET['idVagaUp']);
        $res = $e->buscarIndividual($id_up);

        //echo "deu certo";
    
    }

?>

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
                        <a href ="./index.html">Início</a>
                    </li>
                    <li>
                        <a href ="./sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href ="./search.php">Vagas</a>
                    </li>
                    <li>
                        <a href ="./cadastro.php">Anuncie Agora!</a>
                    </li>
                </ul>
            </div>
         </div>
    </main>
  
    <div class="col-100">
        
        <div class="Cadastro">
            <br><br><br>    
            <form action="<?php if(isset($res)){ echo "editar.php?idVagaUp=".$id_up;}else{echo "cadastrar.php";}?>" method="POST" enctype="multipart/form-data"> 
                <h3 id="h_cor"><?php if(isset($res)){ echo "Atualizar Vaga";}else{echo "Cadastre sua Vaga!";}?></h3>
                <br>
                <input require class="input_caixa" type="text" name="titulo" required placeholder="Titulo da vaga"
                value="<?php if(isset($res)){ echo $res['titulo'];}?>">
                <br><br>
                <input  class="input_caixa" type="number" step="0.01" min="0" name="valor" placeholder="Valor" required 
                value="<?php if(isset($res)){ echo $res['preco'];}?>">
                <br><br>
                <textarea  class="textao" type="text" name="descricao" placeholder="Descrição da Vaga" id="descricao" required
                ><?php if(isset($res)){ echo $res['descricao'];}?></textarea>
                <br><br>
                <input class="bt" type="file" placeholder="Arquivo" name="foto" required></input><br><br>

                <input type="submit" class="btn_in" id="cadastrar" value="<?php if(isset($res)){ echo "Atualizar";}else{echo "Cadastrar";}?>"></input>
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

