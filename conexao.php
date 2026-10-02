<?php
// Configurações do banco de dados local
$host = "localhost";
$banco = "depositobebidas"; // Coloque o nome exato do seu banco
$usuario = "root";          // Usuário padrão do phpMyAdmin
$senha = "";                // Senha padrão do phpMyAdmin (em branco)

try {
    // Cria a conexão com o banco de dados
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    
    // Ativa o modo de erros para ajudar a encontrar problemas
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Descomente a linha abaixo para testar se deu certo:
    // echo "Conectado com sucesso ao banco de dados!";
} catch (PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
}
?>
