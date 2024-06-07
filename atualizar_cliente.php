<?php
include_once("config.php");

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $nomeEmpresa = $_POST['nome_empresa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Atualize os dados no banco de dados
    $sql = "UPDATE cadastro SET nome='$nome', nome_empresa='$nomeEmpresa', telefone='$telefone', email='$email', mensagem='$mensagem' WHERE id=$id";

    if($conexao->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
