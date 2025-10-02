<?php include __DIR__ . '/../templates/header.php'; ?>

<!-- Hero Section -->
<section class="py-5">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
        <div class="col-md-6">
            <h1 class="fw-bold">Resgate rápido e seguro para o seu veículo, a qualquer hora.</h1>
            <p>
                Conectamos motoristas e guincheiros em poucos cliques. Mais agilidade,
                transparência e confiança na hora em que você mais precisa.
            </p>
            <div class="d-flex gap-2">
                <a href="<?= LINK_APP_STORE; ?>"><img src="./assets/img/appstore.png" alt="App Store"></a>
                <a href="<?= LINK_PLAY_STORE; ?>"><img src="./assets/img/playstore.png" alt="Google Play"></a>
            </div>
        </div>
        <div class="col-md-5 text-center mt-4 mt-md-0" data-aos="fade-left" data-aos-delay="300">
            <img src="./assets/img/hero-mockup.png" class="img-fluid" alt="Mockup App">
        </div>
    </div>
</section>

<!-- Como funciona -->
<section class="como-funciona py-5 text-center">
    <div class="container">
        <h1 class="fw-bold mb-4">Como funciona</h1>
        <p class="mb-5">Descubra como é simples acionar um guincho de forma rápida e segura, exatamente quando você precisar.</p>
        
        <div class="row g-4 text-start">
            
            <div class="col-md-4">
                <div class="rounded h-100 d-flex flex-column justify-content-between">
                    <div class="rounded-circle text-center bg-dark text-white d-inline-flex align-items-center justify-content-center fw-bold fs-5 mb-4" style="width: 30px; height: 30px;">1</div>
                    
                    <div class="d-flex align-items-start">
                        <div class="me-3 flex-grow-1">
                            <h5 class="fw-bold">Peça um guincho pelo app</h5>
                            <p class="mb-0">Informe localização e tipo de serviço.</p>
                        </div>
                        <img src="./assets/img/funciona1.png" class="img-fluid" alt="Peça guincho pelo app" style="max-height: 150px; width: auto;">
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="rounded h-100 d-flex flex-column justify-content-between">
                    <div class="rounded-circle text-center bg-dark text-white d-inline-flex align-items-center justify-content-center fw-bold fs-5 mb-4" style="width: 30px; height: 30px;">2</div>
                    
                    <div class="d-flex align-items-start">
                        <div class="me-3 flex-grow-1">
                            <h5 class="fw-bold">Acompanhe em tempo real</h5>
                            <p class="mb-0">Veja o deslocamento do guincheiro até você.</p>
                        </div>
                        <img src="./assets/img/funciona2.png" class="img-fluid" alt="Acompanhe em tempo real" style="max-height: 150px; width: auto;">
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="rounded h-100 d-flex flex-column justify-content-between">
                    <div class="rounded-circle text-center bg-dark text-white d-inline-flex align-items-center justify-content-center fw-bold fs-5 mb-4" style="width: 30px; height: 30px;">3</div>
                    
                    <div class="d-flex align-items-start">
                        <div class="me-3 flex-grow-1">
                            <h5 class="fw-bold">Pague com segurança</h5>
                            <p class="mb-0">Preço transparente, direto no aplicativo.</p>
                        </div>
                        <img src="./assets/img/funciona3.png" class="img-fluid" alt="Pague com segurança" style="max-height: 150px; width: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experiência de confiança -->
<section class="experiencia py-5 bg-dark text-white">
    <div class="container d-flex flex-wrap align-items-center">
        <div class="col-md-5">
            <img src="./assets/img/confianca.png" class="img-fluid rounded" alt="Confiança">
        </div>
        <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
            <h1 class="fw-bold mb-3">Muito além de um guincho, uma experiência de confiança</h1>
            <p class="mb-3">
                Conectamos motoristas, guincheiros e empresas em uma plataforma única,
                que garante praticidade, confiança e eficiência em qualquer situação na estrada.
            </p>
            <a href="./quem-somos" class="btn btn-light">Conheça nossa história</a>
        </div>
    </div>
</section>

<!-- Por que escolher -->
<section class="porque-escolher py-5">
    <div class="container">
        <h2 class="fw-bold mb-5 text-center">Por que escolher o UGUINCHO?</h2>
        <div class="row g-4">
            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="./assets/img/motoristas.png" class="card-img-top" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Para motoristas</h5>
                        <p class="card-text mb-auto">Tenha tranquilidade em qualquer estrada, com atendimento rápido, profissionais avaliados e preço transparente.</p>
                        <a href="./para-motoristas" class="btn btn-dark w-100 mt-3">Clique e conheça</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="./assets/img/guincheiros.png" class="card-img-top" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Para guincheiros</h5>
                        <p class="card-text mb-auto">Aumente sua renda recebendo mais chamados, controle seus ganhos em tempo real e escolha quando trabalhar.</p>
                        <a href="./para-guincheiros" class="btn btn-dark w-100 mt-3">Clique e conheça</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card h-100">
                    <img src="./assets/img/empresas.png" class="card-img-top" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Para empresas e frotas</h5>
                        <p class="card-text mb-auto">Reduza custos e tempo de inatividade, centralize a gestão dos chamados e tenha relatórios completos para otimizar operações.</p>
                        <a href="./para-empresas" class="btn btn-dark w-100 mt-3">Clique e conheça</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contato -->
<section class="suporte py-5">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-md-6">
                <?php 
                session_start();
                if (isset($_SESSION['message'])): 
                    $alertClass = ($_SESSION['status'] === 'success') ? 'alert-success' : 'alert-danger';
                ?>
                    <div class="alert <?= $alertClass ?> mt-3" role="alert">
                        <?= $_SESSION['message'] ?>
                    </div>
                <?php 
                    unset($_SESSION['message']);
                    unset($_SESSION['status']);
                endif; 
                ?>
                <h3 class="fw-bold">Contato e suporte</h3>
                <p>Precisa de ajuda ou tem alguma dúvida? Envie sua mensagem, responderemos o mais rápido possível.</p>
                <p class="fw-bold">Ou, se preferir:</p>
                <p>Envie um e-mail <br> <strong>suporte@uguincho.com</strong></p>
                <p>Fale com o nosso suporte <br> <strong>0800-000-0000</strong></p>
            </div>
            
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <form method="POST" action="./process_contact.php">
                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control shadow-none" placeholder="Nome *" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control shadow-none" placeholder="Email *" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="telefone" class="form-control shadow-none" placeholder="Telefone">
                            </div>
                            <div class="mb-3">
                                <textarea name="mensagem" class="form-control shadow-none" rows="4" placeholder="Mensagem *" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Enviar mensagem</button>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</section>

<!-- QR Codes -->
<section class="qrcodes py-5">
    <div class="container">
        <h3 class="fw-bold mb-4">UGUINCHO na palma da sua mão</h3>
        <div class="row justify-content-center g-4">
            <div class="col-md-6">
                <div class="border rounded p-4 h-100 d-flex align-items-center">
                    <img src="./assets/img/qrcode.png" class="img-fluid me-3" alt="QR Motoristas" style="max-width: 120px;">
                    
                    <div>
                        <p class="mb-1"><strong>Baixe o app para motoristas</strong></p>
                        <small class="text-muted">Escaneie para fazer o download</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-4 h-100 d-flex align-items-center">
                    <img src="./assets/img/qrcode.png" class="img-fluid me-3" alt="QR Parceiros" style="max-width: 120px;">
                    
                    <div>
                        <p class="mb-1"><strong>Seja um parceiro UGUINCHO</strong></p>
                        <small class="text-muted">Escaneie o QR Code, baixe o app e cadastre-se</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>