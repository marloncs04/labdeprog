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

        public function buscarVaga(){
            global $conn;
            $result = array();
            $sql = "SELECT * FROM tb_vagas ORDER BY titulo";
            $sql = $conn->prepare($sql);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;

        }

        public function deletarVaga($id){
            global $conn;

            $sql = "DELETE FROM tb_vagas WHERE idVaga = '$id'";
            $sql = $conn->prepare($sql);
            $sql->bindValue("idVaga", $id); 
            $sql->execute();
        }

        public function editarVaga(){


        }
    }
    

?>