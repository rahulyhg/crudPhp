<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    /*para ocutar mensagem de WARNING error_reporting(0); */

    include_once('conexao.php');    //INCLUINDO A CONEXÃO

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $dataNascimento = $_POST['dataNascimento']; 
    $sexo = $_POST['sexo']; 
    

    echo "$nome </br> "; 
    echo "$email </br> ";
    echo "$estado </br> ";
    echo "$dataNascimento </br> ";
    echo "$sexo </br> ";

	

    if (!$conexao) {
        die(" Falha na Conexão bro! " . mysqli_connect_error());
    }

    $sql = ("INSERT INTO cliente (nome, email, dataNascimento, estado, sexo) VALUES ('$nome', '$email', '$dataNascimento', '$estado', '$sexo' )");

    if (mysqli_query($conexao, $sql)) {
        echo " Cadastro efetuado com Sucesso!!! ";
    } else {
        echo " Erro: " . $sql . "</br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
    ?>
</body>

</html>