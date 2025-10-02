<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

session_start();

require __DIR__ . '/../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: " . BASE_URL); 
    exit;
}

$data = [
    'nome' => filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
    'telefone' => filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    'mensagem' => filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
];

if (empty($data['nome']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || empty($data['mensagem'])) {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Por favor, preencha todos os campos obrigatórios (Nome, E-mail, Mensagem) corretamente.';
    header("Location: " . BASE_URL); 
    exit;
}

try {
    $success = sendContactEmail($data);
    
    if ($success) {
        $_SESSION['status'] = 'success';
        $_SESSION['message'] = 'Sua mensagem foi enviada com sucesso! Responderemos o mais breve possível.';
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.';
    }
} catch (Exception $e) {
    error_log("Erro fatal no processamento do formulário: " . $e->getMessage());
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Ocorreu um erro interno. Por favor, tente novamente.';
}

header("Location: " . BASE_URL); 
exit;
