<?php 
    if(isset($_POST['busca']) && !empty($_POST['busca']))
    {
        require 'conectar.php';
        require 'classes/Vaga_class.php';

        $b = new Vaga_class();

        $titulo = addslashes($_POST['busca']);

        $b->buscar($titulo);

       
    }


?>