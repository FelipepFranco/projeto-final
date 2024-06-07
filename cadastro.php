<?php
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST['nome']);
    $nome_empresa = htmlspecialchars($_POST['nome_empresa']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    


    $inserir = $pdo->prepare("INSERT INTO cadastro SET nome = :nome, nome_empresa = :nome_empresa, telefone = :telefone, email = :email, mensagem = :mensagem");   
       
    $inserir->bindValue(":nome", $nome);
    $inserir->bindValue(":nome_empresa", $nome_empresa);		
    $inserir->bindValue(":telefone", $telefone);
    $inserir->bindValue(":email", $email);
    $inserir->bindValue(":mensagem", $mensagem);
        
        $inserir->execute();
        
        echo "<script>
                alert('Dados enviados com sucesso!');
                window.location.href = 'index.php';
              </script>";
        exit();
        echo "Error: " . $e->getMessage();
} else {
    echo "<script>
                alert('Não foi possivel enviar!');
                window.location.href = 'index.g';
              </script>";
    exit();
}
