<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Pagina para deletar</h1>
    <form action="" method="post">
        <label for="id">ID:</label>
        <input type="number" name="id" id="id">
        <input type="subit" value="Apagar">
</form>
    <?php 
    require_once 'connect_postgres.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM alunos WHERE id = :id";

    $stmt=$conexao->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    echo "Registro $id deletado.";
    } else{
    echo "Insira o ID para apagar<br>";
}
    ?>
    <a href="select.php"> Consultar DB</a>
</body>
</html>