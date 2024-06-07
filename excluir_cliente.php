<?php
include_once("config.php");

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM cadastro WHERE id = $id";
    if($conexao->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
