<?php

require __DIR__ . '/../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = '/uguincho';
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

if ($uri === '' || $uri === false) {
    $uri = '/';
}

switch ($uri) {
    case '/':
    case '/home':
        require __DIR__ . '/../public/home.php';
        break;

    case '/quem-somos':
        require __DIR__ . '/../public/quem-somos.php';
        break;

    case '/para-motoristas':
        require __DIR__ . '/../public/para-motoristas.php';
        break;

    case '/para-guincheiros':
        require __DIR__ . '/../public/para-guincheiros.php';
        break;

    case '/para-empresas':
        require __DIR__ . '/../public/para-empresas.php';
        break;

    case '/termos-de-uso':
        require __DIR__ . '/../public/termos-de-uso.php';
        break;

    case '/politicas-de-privacidade':
        require __DIR__ . '/../public/politicas-de-privacidade.php';
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada";
        break;
}
