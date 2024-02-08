<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    Livros</p>

    <?php 
    
    // Recebe os dados do formulário 
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $edicao = $_POST["edicao"];
    $ano = $_POST["ano"];
    $editora = $_POST["editora"];
    $situacao = $_POST["situacao"];
    
    echo "titulo $titulo - autor $autor - edicao $edicao - ano $ano - editora $editora - situacao $situacao <p>" ;

     //Conexão com o banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "escola";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Inclui na tabela 'alunos'

    $sql = "INSERT INTO livros (titulo, autor, edicao, ano, editora, situacao) VALUES ('$titulo','$autor','$edicao','$ano','$editora','$situacao')";
    //echo $sql;

    if(mysqli_query($conexao, $sql)){
        echo "<p>Dados inseridos com sucesso";
    } else {
        echo "<p>Erro ao inserir dados";
    }
    
    // Fecha a conexão com o banco
    mysqli_close($conexao);
    ?>
    
    <p><a href="lista_livros.php">Livros</a>
    <p><a href="index.php">Volta para a página princial</a>
</body>
</html>