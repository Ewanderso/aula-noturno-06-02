<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    Cadastro</p>

    <?php 
    
    // Recebe os dados do formulário 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $responsavel = $_POST["responsavel"];
    
    echo "Nome $nome - e-mail $email - telefone $telefone  responsavel $responsavel<p>" ;

     //Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Inclui na tabela 'alunos'

    $sql = "INSERT INTO alunos (nome, email, telefone, responsavel) VALUES ('$nome','$email','$telefone','$responsavel')";
    echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Dados inseridos com sucesso";
    } else {
        echo "<p>Erro ao inserir dados";
    }
    
    // Fecha a conexão com o banco
    mysqli_close($conexao);
    ?>
    
    <p><a href="index.php">Volta para a página princial</a>
</body>
</html>