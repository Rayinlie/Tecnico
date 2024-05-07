<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

    include_once 'filo_class.php';
    include_once 'conexao.class.php';

     function __construct() {
        $this->conexao = new conexao("localhost", "root", "usbw", "sara");
        if($this->conexao->conectar() == false){
            echo "Erro! Conexão não encontrada".mysqli_error();
        }
    }

    ?>

    <form action="" method="get">
        <div>
            <label for="nome_filo">Filo:</label>
            <input type="text" id="nome_filo" name="nome">
        </div>
    </form>
</body>
</html>