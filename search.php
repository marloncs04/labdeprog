<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <title>Tem VAGA ai?!</title>
</head>
<style>
    tr:nth-child(even) {
              background-color: #dddddd;
            }
    </style>
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
            <div class="busca">
                <input placeholder="Pesquisa" type="text"/>
                <button placeholder="idBusca" type="submit">Buscar</button> 
            </div>
        </div>
    </main>
  
    <div class="col-100">
        <div class="content texto-destaque">
            <h1>
                <strong>Vagas disponíveis</strong>
            </h1>
            <p>
                Exibindo todas as vagas disponíveis..
            </p> 
                <!--<div class="col-3 bloco">
                    <div class= "zoom">
                        <img src="./imagens/img1.jpg">
                        <h3>
                            <b>Titulo da imagem</b>
                        </h3>
                        <p>
                            descricao da img descricao da img descricao da img
                            descricao da img descricao da img descricao da img

                        </p>
                    </div>
                </div>
                <div class="col-3 bloco">
                    <div class= "zoom">
                        <img src="./imagens/quarto2.jpg">
                        <h3>
                            <b>Titulo da imagem</b>
                        </h3>
                        <p>
                            descricao da img descricao da img descricao da img
                            descricao da img descricao da img descricao da img

                        </p>
                    </div>
                </div>
                <div class="col-3 bloco">
                    <div class= "zoom">
                        <img src="./imagens/quarto3.jpg">
                        <h3>
                            <b>Titulo da imagem</b>
                        </h3>
                        <p>
                            descricao da img descricao da img descricao da img
                            descricao da img descricao da img descricao da img

                        </p>
                    </div>
                </div>
                <div class="col-3 bloco">
                    <div class= "zoom">
                        <img src="./imagens/quarto5.jpg">
                        <h3>
                            <b>Titulo da imagem</b>
                        </h3>
                        <p>
                            descricao da img descricao da img descricao da img
                            descricao da img descricao da img descricao da img

                        </p>
                    </div>
                </div>
                <div class="col-3 bloco">
                    <div class= "zoom">
                        <img src="./imagens/quarto4.jpg">
                        <h3>
                            <b>Titulo da imagem</b>
                        </h3>
                        <p>
                            descricao da img descricao da img descricao da img
                            descricao da img descricao da img descricao da img

                        </p>
                    </div>
                </div>
-->                
                <table class="tabela-vagas">
                    <tr>
                        <td>VAGA</td> 
                        <td>DESCRIÇÃO</td> 
                        <td>PREÇO</td> 
                        <td>DATA DE CADASTRO</td> 
                        <td></td> 

                <?php
                    require 'conectar.php';
                    require 'classes/Vaga_class.php';
            
                    $p = new Vaga_class();
                    $dados = $p->buscarVaga();
                    if(count($dados) > 0){
                        for ($i=0; $i < count($dados); $i++){
                            echo "<tr>";
                            foreach ($dados[$i] as $k => $v){
                                if($k != "idVaga"){
                                    echo "<td>".$v."</td>";
                                }
                            }
                            ?>
                                <td>
                                    <a href=""> Editar </a>  
                                    <a href="http://localhost/labdeprog/search.php?idVaga=<?php echo $dados[$i]['idVaga']; ?>"> Deletar </a>
                                </td> 
                                <br>
                            <?php
                            echo "</tr>";
                        }
                    }else{
                        echo "Não há nenhum cadastro de vagas!";
                    }

                ?>
                </table>
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

    
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>



</html>

<?php
    //echo "não está dando certo";
    
    if(isset($_GET['idVaga']))
    {
        require_once 'conectar.php';
        require_once 'classes/Vaga_class.php';  

        $d = new Vaga_class();

        $id = addslashes($_GET['idVaga']);
        $d->deletarVaga($id);
        //echo "deu certo";
    
    }

?>