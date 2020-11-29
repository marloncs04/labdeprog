 <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "temvagaai";

    class Vaga_class{
        global $conn;

        public function _conexao($servername, $dbname, $username, $password){

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Criando conexão com o banco do projeto
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Erro";
        }catch(PDOException $e){
            echo "Conexão falha: " . $e->getMessage();
            exit;
            }
        }

        public function cadastrarVaga($titulo, $descricao, $preco, $foto = array()){

        }

        public function buscarVaga(){


        }

        public function deletarVaga(){

        }

        public function editarVaga(){


        }
    }
    

?>