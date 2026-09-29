<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
require_once __DIR__. '/../includes/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Consulta Aluno</title>
</head>
    <?php include '../includes/header.php'; ?>
    <h1>Pagina para Consulta</h1>
<form action=""method="post">
    <label for="id">ID:</label>
    <input type="number" name="id" id="id">
    <input type="submit" value="Enviar">
</form>
<body>

<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){
    consultar($conexao,$_POST,['id'],$_POST['nome'],$_POST['turma'],$_POST['nasc'],$_POST['ativo']);
}

"<br>"
?>
<?php require_once __DIR__.'/../includes/footer.php' ?>
</body>
</html>

