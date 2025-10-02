<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= CSS_URL . '/style.css'; ?>">
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000,
                once: true,
            });
        });
    </script>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="./">
                <img src="./assets/img/logo.png" alt="<?= SITE_NAME; ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mb-2 mb-lg-0 mt-2 m-3">
                    <li class="nav-item"><a class="nav-link" href="./">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="./quem-somos">Quem somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="./para-motoristas">Para motoristas</a></li>
                    <li class="nav-item"><a class="nav-link" href="./para-guincheiros">Para guincheiros</a></li>
                    <li class="nav-item"><a class="nav-link" href="./para-empresas">Para empresas e frotas</a></li>
                </ul>
                <div class="ms-auto">
                    <a href="#" class="btn btn-light ms-lg-3">Baixe agora</a>
                </div>                
            </div>
        </div>
    </nav>

    <!-- Espaço para compensar navbar fixa -->
    <div style="margin-top: 55px;"></div>