 <?php

    class Vaga_class{

        public function cadastrarVaga($titulo, $descricao, $valor, $foto){
            global $conn;
            //inserindo na tabela de vagas
            $sql = "INSERT INTO tb_vagas (titulo, descricao, preco) VALUES ( ?, ?, ?)";
            $sql = $conn->prepare($sql);
            $sql->bindValue("titulo", $titulo); 
            $sql->bindValue("descricao", $descricao); 
            $sql->bindValue("preco", $valor); 
            $sql->execute(array($titulo, $descricao, $valor));

           
            //inserindo na tabela de imagens, que está ligada no banco por chave estrangeira na vaga inserida
            if(count($foto) > 0){
                $sql = "INSERT INTO tb_imagens (nome_imagem, fk_id_vaga) VALUES ('$nome_imagem', '$idVaga')";
                $sql = $conn->prepare($sql);
                $sql->bindValue("nome_imagem", $nome_imagem);
                $sql->bindValue("fk_id_vaga", $idVaga);
                $sql->execute();
            }
            $_SESSION['cadastro'] = true;
            
            if($_SESSION['cadastro'] == true) {
                return true;
            }else{
                return false;
            }
        }

        public function buscarVaga($busca){
            global $conn;
            global $result;

            $sql = "SELECT * FROM tb_vagas WHERE titulo LIKE :busca";
            $sql = $conn->prepare($sql);
            $sql->bindValue("titulo", $titulo);
            $sql->execute();

            if($sql->rowCount() > 0){
                $result = true;
                header('Location: search.html');
            }else{
                $result = false;
            }

        }

        public function deletarVaga(){

        }

        public function editarVaga(){


        }
    }
    

?>