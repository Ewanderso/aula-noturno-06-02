<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livros</title>
</head>
<body>
    Livros</p>

    <?php 
    
    // Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Consultar dados na tabela 'alunos'

    $sql = "SELECT id,titulo,autor,edicao,ano,editora,situacao FROM livros";
    echo $sql;

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<table>";
    while ($livros = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>$livros[id]</td>";
        echo "<td>$livros[titulo]</td>";
        echo "<td>$livros[autor]</td>";
        echo "<td>$livros[edicao]</td>";
        echo "<td>$livros[ano]</td>";
        echo "<td>$livros[editora]</td>";
        echo "<td>$livros[situacao]</td>";
        //echo "<td><a href='editar_livro.php?id=$livros[id]'> Editar </a></td>";
        //echo "<td><a href='excluir_livro.php?id=$livros[id]'> Excluir </a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fecha a conexão com o banco
    mysqli_close($conexao);

    ?>
    <p><a href="cadastro_livros.php">Incluir novo livro</a>
    <p><a href="index.php">Volta para a página princial</a>

</body>
</html>