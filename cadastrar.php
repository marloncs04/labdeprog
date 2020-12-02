<?php
    //header("Location: index.html");

    if(isset($_POST['titulo']) && !empty($_POST['titulo']) && ($_POST['descricao']) && !empty($_POST['descricao']) && ($_POST['valor']) && !empty($_POST['valor']) && 
    ($_POST['foto']) && !empty($_POST['foto'])){

        require 'conectar.php';
        require 'classes/Vaga_class.php';

        $u = new Vaga_class();

        $titulo = addslashes($_POST['titulo']);
        $valor = addslashes($_POST['valor']);
        $descricao = addslashes($_POST['descricao']);
        $foto = array();


        if($u->cadastrarVaga($titulo, $descricao, $valor, $foto = array()) == true){
            if(isset($_FILES['foto'])){
                for($i=0; $i < count($_FILES['foto']['name']); $i++){
                    $nome_arquivo = md5($_FILES['foto']['name']['$i'].rand(1,999)).'jpg';
                    move_uploaded_file($_FILES['foto']['tmp_name'][$i], './imagensVagas/'.$nome_arquivo);

                    array_push($foto, $nome_arquivo);
                }
            }
            if(isset($_SESSION['cadastro'])){
                header("Location: index.html");
                }else{
                    header("location: cadastro.php");
                }
            }
    }
        

        /*if(!empty($titulo) && !empty($descricao) && !empty($valor))
        {
            require 'classes/Vaga_class.php';
            $p = new Vaga_class('localhost','temvagaai','root', '');
            $p->cadastrarVaga($titulo, $descricao, $preco, $foto);
            ?>
                <script type="text/javascript">
                    alert('Vaga cadastrada com sucesso!');
                </script>
            <?php
            
        }else{
            ?>
            <script type="text/javascript">
                alert('Preencha todos os campos!');
            </script>
            <?php
        }*/




?>