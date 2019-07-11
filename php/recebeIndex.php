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
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $sexo = $_POST['radio'];

    if (!$conexao) {
        die(" Falha na Conexão bro! " . mysqli_connect_error());
    }

    $sql = ("INSERT INTO funcionario (nome, email, estado, dia, mes, ano, sexo) VALUES ('$nome', '$email', '$estado', '$dia', '$mes', '$ano', '$sexo')");

    if (mysqli_query($conexao, $sql)) {
        echo " Cadastro efetuado com Sucesso!!! ";
    } else {
        echo " Erro: " . $sql . "</br>" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
    ?>
</body>

</html>