<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
     $status = 'error';
    $message = 'Ocorreu um erro ao processar';
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

$data = [
    'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
    'telefone' => filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'mensagem' => filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
];

if (empty($data['nome']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || empty($data['mensagem'])) {
    $status = 'error';
    $message = 'Por favor, preencha todos os campos obrigatórios (Nome, E-mail, Mensagem) corretamente.';
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

try {
    $success = sendContactEmail($data);
    
    if ($success) {
        $status = 'success';
        $message = 'Sua mensagem foi enviada com sucesso! Responderemos o mais breve possível.';
    } else {
        $status = 'error';
        $message = 'Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.';
    }
} catch (Exception $e) {
    error_log("Erro fatal no processamento do formulário: " . $e->getMessage());
    $status = 'error';
    $message = 'Ocorreu um erro interno. Por favor, tente novamente.';
}

echo json_encode(['status' => $status, 'message' => $message]);
exit;