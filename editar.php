<?php
    //header("Location: index.html");

    if(isset($_GET['idVagaUp']) && !empty($_GET['idVagaUp']) && ($_POST['titulo']) && !empty($_POST['titulo']) && ($_POST['descricao']) && !empty($_POST['descricao']) && ($_POST['valor']) && !empty($_POST['valor']) && 
    ($_FILES['foto']) && !empty($_FILES['foto'])){

        require 'conectar.php';
        require 'classes/Vaga_class.php';

        $u = new Vaga_class();

        $id = addslashes($_GET['idVagaUp']);
        $titulo = addslashes($_POST['titulo']);
        $valor = addslashes($_POST['valor']);
        $descricao = addslashes($_POST['descricao']);
        $foto = array();
     

        if($u->editarVaga($id, $titulo, $descricao, $valor) == true){
            if(isset($_FILES['foto'])){
                $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
                $nome_arquivo = md5($_FILES['foto']['name'].rand(1,999)).$ext;
                move_uploaded_file($_FILES['foto']['tmp_name'], 'imagensVagas/'.$nome_arquivo);
                
                // chama funcao de editar imagem
                $u->editarVagaImagem($nome_arquivo);
            }
            if(isset($_SESSION['editar'])){
                header("Location: search.php");
                }else{
                    header("location: search.php");
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