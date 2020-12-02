<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "temvagaai";

    global $conn;
    
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Criando conexão com o banco do projeto
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conectado com Sucesso!";
        }catch(PDOException $e){
            echo "Conexão falha: " . $e->getMessage();
            exit;
        }
   
?>