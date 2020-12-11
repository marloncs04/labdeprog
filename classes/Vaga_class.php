 <?php

    class Vaga_class{

        private $id;

        public function cadastrarVaga($titulo, $descricao, $valor){
            global $conn;
            //inserindo na tabela de vagas
            $sql = "INSERT INTO tb_vagas (titulo, descricao, preco) VALUES ( ?, ?, ?)";
            $sql = $conn->prepare($sql);
            $sql->bindValue("titulo", $titulo); 
            $sql->bindValue("descricao", $descricao); 
            $sql->bindValue("preco", $valor); 
            $sql->execute(array($titulo, $descricao, $valor));

            $this->id = $conn->lastInsertId(); 

            $_SESSION['cadastro'] = true;
            
            if($_SESSION['cadastro'] == true) {
                return true;
            }else{
                return false;
            }
        }

        public function cadastrarVagaImagem($nome_imagem) {
            global $conn;
            $idVaga = $this->id;
            //inserindo na tabela de imagens, que está ligada no banco por chave estrangeira na vaga inserida
            $sql = "INSERT INTO tb_imagens (nome_imagem, fk_id_vaga) VALUES (?, ?)";
            $sql = $conn->prepare($sql);
            $sql->bindValue("nome_imagem", $nome_imagem);
            $sql->bindValue("fk_id_vaga", $idVaga);
            $sql->execute(array($nome_imagem, $idVaga));

            $this->id = null;
        }

        public function buscarVaga(){
            global $conn;
            $result = array();
            $sql = "SELECT tb_vagas.*, tb_imagens.nome_imagem FROM tb_vagas, tb_imagens WHERE tb_vagas.idVaga = tb_imagens.fk_id_vaga ORDER BY titulo";
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

        public function buscar($titulo){
            global $conn;
            $result = array();
            $sql = "SELECT tb_vagas.*, tb_imagens.nome_imagem FROM tb_vagas, tb_imagens  WHERE tb_vagas.idVaga = tb_imagens.fk_id_vaga AND titulo LIKE '%$titulo%'";
            $sql = $conn->prepare($sql);
            $sql->bindValue("titulo", $titulo);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;


        }
        public function buscarIndividual($id) {
            global $conn;
			$sql = "SELECT * FROM tb_vagas  WHERE idVaga = '$id'";
			$sql = $conn->prepare($sql);
            $sql->execute();
			return $sql->fetch(PDO::FETCH_ASSOC);
        }
        
        public function editarVaga($id, $titulo, $descricao, $valor){
           
            global $conn;
            //inserindo na tabela de vagas
            $sql = "UPDATE tb_vagas SET titulo='$titulo', descricao='$descricao' , preco='$valor' WHERE idVaga = '$id'";
            $sql = $conn->prepare($sql);
            $sql->bindValue("titulo", $titulo); 
            $sql->bindValue("descricao", $descricao); 
            $sql->bindValue("preco", $valor); 
            $sql->execute(array($titulo, $descricao, $valor));

           
            $this->id = $id;

            $_SESSION['editar'] = true;
            
            if($_SESSION['editar'] == true) {
                return true;
            }else{
                return false;
            }
        }

        public function editarVagaImagem($nome_imagem) {
            global $conn;
            $idVaga = $this->id;
            //inserindo na tabela de imagens, que está ligada no banco por chave estrangeira na vaga inserida
            $sql = "UPDATE tb_imagens SET nome_imagem='$nome_imagem' where fk_id_vaga='$idVaga'";
            $sql = $conn->prepare($sql);
            $sql->bindValue("nome_imagem", $nome_imagem);
            $sql->bindValue("fk_id_vaga", $idVaga);
            $sql->execute(array($nome_imagem, $idVaga));

            $this->id = null;
        }

    }
    

?>