<?php //conecta com o banco de Dados
$host = "192.168.10.35";
$dbname = "escola";
$user = "escola";
$pass = "escola";

try {
    $conexao = new PDO(
    "pgsql:host=$host;dbname=$dbname",
    $user,
    $pass
    );
    return $conexao;
} catch(PDOException $e){
    echo "Erro: ". $e->getMessage();
}
?>