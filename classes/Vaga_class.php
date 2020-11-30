 <?php

    class Vaga_class{
        private $conn;

        public function _conexao($servername, $dbname, $username, $password){

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Criando conexão com o banco do projeto
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Erro!";
        }catch(PDOException $e){
            echo "Conexão falha: " . $e->getMessage();
            exit;
            }
        }

        public function cadastrarVaga($titulo, $descricao, $preco, $foto = array()){
            //inserindo na tabela de vagas
            $sql = $this->conn->prepare("INSERT INTO tb_vagas (titulo, descricao, valor) VALUES (:t, :d, :v)");
            $sql->bindValue(':t', $titulo); 
            $sql->bindValue(':d', $descricao); 
            $sql->bindValue(':v', $valor); 
            $sql->execute();

            //inserindo na tabela de imagens, que está ligada no banco por chave estrangeira na vaga inserida
            if(count($foto) > 0){
                $sql = $this->conn->prepare("INSERT INTO tb_imagens (nome_imagem, fk_id_vaga) VALUES (:n, :fk)");
                $sql->bindValue(':n', $nome_imagem);
                $sql->bindValue(':fk', $idVaga);
                $sql->execute();
            }
           

        }

        public function buscarVaga(){


        }

        public function deletarVaga(){

        }

        public function editarVaga(){


        }
    }
    

?>