<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Cadastro Aluno</title>
</head>
<body>
    <?php include __DIR__. '/../includes/header.php'; ?>
    <br>
    <form action="" method="post">
        <label for="id">  ID:  </label>
        <input type="number" name="id" id="id"><br><br>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma"><br><br>
        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br><br>
        <label for="ativo">Ativo </label>
        <input type="radio" name="ativo" id="ativo" value="true">
        <label for="sim">sim </label>
        <input type="radio" name="ativo" id="ativo" value="false">
        <label for="nao">não</label><br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Cadastrar">
    </form>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    var_dump($_POST);
    cadastrar($conexao, $_POST['nome'],$_POST['nasc'],$_POST['turma'],$_POST['ativo']);
    }
    include __DIR__. '/../includes/footer.php';
    ?>
    
</body>
</html>
