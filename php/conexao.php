<html>

<head>
    <meta charset="utf-8">
    <title>CRUD using PHP and MYSQL</title>
</head>

<body>

    <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "1234";
    $nomeBanco = "cadastro";

    // Criando a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $nomeBanco);

    // Checando a conexão
    if ($conexao->connect_error) 
        echo "Falha na conexão: (".$conexao->connect_errno.") ".$conexao->connect_error;
    
    
    ?>

</body>

</html>