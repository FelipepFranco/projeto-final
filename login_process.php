<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

// Verifica se a autenticação é válida
if (isset($data['authenticated']) && $data['authenticated'] === true) {
    $_SESSION['authenticated'] = true;
    http_response_code(200);
} else {
    http_response_code(400);
}
?>
