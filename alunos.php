<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
</head>
<body>
    Alunos</p>

    <?php 
    
    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'alunos'

    $sql = "SELECT id,nome,email,telefone,responsavel FROM alunos";
    // echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    while ($aluno = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$aluno[id]</td>";
        echo "<td>$aluno[nome]</td>";
        echo "<td>$aluno[email]</td>";
        echo "<td>$aluno[telefone]</td>";
        echo "<td>$aluno[responsavel]</td>";
        //echo "<td><a href='editar.php?id=$aluno[id]'> Editar </a></td>";
        //echo "<td><a href='excluir.php?id=$aluno[id]'> Excluir </a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fecha a conexão com o banco
    mysqli_close($conexao);

    ?>
    <p><a href="cadastro_alunos.php">Incluir novo aluno</a>
    <p><a href="index.php">Volta para a página princial</a>

</body>
</html>