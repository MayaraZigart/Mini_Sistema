<?php 
require_once __DIR__. '/../database/connect.php';

function cadastrar($conexao, $nome, $nasc, $turma, $ativo)
{
    $sql ="INSERT INTO alunos( nome,nasc,turma,ativo) VALUES(:nome, :nasc, :turma, :ativo)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":nasc",$nasc);
    $stmt->bindParam(":turma",$turma);
    $stmt->bindParam(":ativo",$ativo);
    $stmt->execute();
    echo "Aluno Cadastrado com sucesso!";
}
function relatorio($conexao){
    
$sql = "SELECT * FROM alunos";

//stmt = statement refere-se a um objeto PDOStatement no contexto.
$stmt = $conexao->prepare($sql);
$stmt -> execute();

$alunos = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($alunos as $aluno){  
    echo "<hr>;";
    echo "ID; {$aluno['id']}<br>";
    echo "Nome: {$aluno['nome']}<br>";
    echo "Nascimento: {$aluno['nasc']}<br>";
    echo "Turma: {$aluno['turma']}<br>";
    echo "Ativo: {$aluno['ativo']}<br>";
}
}

function excluir($conexao, $id){
$sql = "DELETE FROM alunos WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "registro $id deletado.";


}

function consultar($conexao, $id){

$sql = "SELECT nome, nasc, turma, ativo FROM alunos WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$aluno =$stmt->fetch(PDO::FETCH_ASSOC);

echo " Aluno: {$aluno['nome']}<br> Turma: {$aluno['turma']}<br> nascimento: {$aluno['nasc']}<br> Ativo: {$aluno['ativo']}";


}

function atualizar($conexao, $id, $nome, $nasc, $turma, $ativo){


$sql = "UPDATE alunos SET nome = :nome , turma = :turma , nasc = :nascimento , ativo = :ativo WHERE id = :id";


$stmt = $conexao->prepare($sql);
$stmt->bindparam(":nome", $nome);
$stmt->bindParam(":id",$id);
$stmt->bindparam(":turma",$turma);
$stmt->bindParam(":nascimento",$nasc);
$stmt->bindparam(":ativo",$ativo);
$stmt->execute();

}


function cadastrar_user($conexao, $email, $senha)
{
    $sql ="INSERT INTO usuarios(email, senha) VALUES(:email, :senha)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":senha",$senha);
    $stmt->execute();
    echo "usuario Cadastrado com sucesso!";
}












function consultar_user($conexao, $email)
{

$sql = "SELECT id, email, senha FROM usuarios WHERE email = :email";
try{
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":email", $email);
$stmt->execute();

$usuario =$stmt->fetch(PDO::FETCH_ASSOC);

return $usuario;
} catch (PDOException $e){
    echo $e->getMessage();
}

}
?>