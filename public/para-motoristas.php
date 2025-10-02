<?php include __DIR__ . '/../templates/header.php'; ?>

<section class="hero-motorista d-flex align-items-center" style="background: url('./assets/img/banner-motorista.jpg') no-repeat center center; background-size: cover; min-height: 400px; position: relative;">
    <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);"></div>
    
    <div class="container py-5" style="position: relative; z-index: 10;">
        <h1 class="text-white fw-bold display-4">Para motoristas</h1>
    </div>
</section>

<section class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="fw-bold mb-4">Mais tranquilidade na estrada, na palma da sua mão.</h2>
            <p>
                Com o UGUINCHO, você tem mais tranquilidade em qualquer trajeto. Nosso aplicativo conecta você a guincheiros de confiança em poucos cliques, garantindo rapidez no atendimento, segurança por meio de profissionais avaliados e transparência no preço. Sem surpresas na hora de pagar!
            </p>
        </div>
    </div>
</section>

<section class="py-5 text-white hero-motorista d-flex align-items-center" style="background: url('./assets/img/banner-o-que-dizem.jpg') no-repeat center center; background-size: cover; min-height: 400px; position: relative;">
    <div class="hero-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6);"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <h3 class="text-center fw-bold mb-5 text-white">O que dizem nossos usuários</h3>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-transparent border-white text-white h-100 p-3 shadow-lg" style="border-radius: 12px;">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            ★★★★★
                        </div>
                        <p class="card-text small">
                            "Meu carro quebrou no meio da estrada à noite e eu não sabia a quem recorrer. Em menos de 10 minutos, consegui solicitar um guincho pelo UGUINCHO e acompanhar tudo em tempo real. Foi rápido, seguro e com preço justo. Recomendo sem pensar duas vezes!"
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-3 border-top pt-3">
                        <img src="./assets/img/user-1.png" alt="Júlia Mendes" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                        <div>
                            <p class="fw-bold mb-0 small">Júlia Mendes</p>
                            <span class="small">Motorista avaliada</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-transparent border-white text-white h-100 p-3 shadow-lg" style="border-radius: 12px;">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            ★★★★★
                        </div>
                        <p class="card-text small">
                            "Achei incrível poder acompanhar o guincho em tempo real, como em apps de transporte. Isso me deu confiança e controle da situação."
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-3 border-top pt-3">
                        <img src="./assets/img/user-2.png" alt="Eduardo Castro" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                        <div>
                            <p class="fw-bold mb-0 small">Eduardo Castro</p>
                            <span class="small">Motorista avaliado</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-transparent border-white text-white h-100 p-3 shadow-lg" style="border-radius: 12px;">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            ★★★★★
                        </div>
                        <p class="card-text small">
                            "Antes eu ficava insegura em rodar sozinha à noite. Agora, sei que posso contar com o UGUINCHO em qualquer emergência."
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-3 border-top pt-3">
                        <img src="./assets/img/user-3.png" alt="Marcela Lopes" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                        <div>
                            <p class="fw-bold mb-0 small">Marcela Lopes</p>
                            <span class="small">Motorista avaliada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <h3 class="fw-bold mb-4">Perguntas frequentes</h3>
    
    <div class="accordion accordion-flush" id="accordionFAQ">
        
        <div class="accordion-item bg-transparent ps-0">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fw-bold bg-transparent shadow-none w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding-left: 0;">
                    Quanto custa chamar um guincho pelo aplicativo?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                <div class="accordion-body small text-muted bg-transparent p-0 ps-0">
                    O custo é variável e calculado em tempo real. No UGUINCHO, você informa sua localização, o tipo de atendimento solicitado (guincho simples, guincho plataforma ou transporte especial), o local de destino, e o aplicativo calcula o preço transparente e exibe diretamente na sua tela de confirmação de chamada, garantindo segurança e previsibilidade para o motorista.
                </div>
            </div>
        </div>
        
        <div class="accordion-item bg-transparent ps-0">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold bg-transparent shadow-none w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="padding-left: 0;">
                    Como funciona o pagamento?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                <div class="accordion-body small text-muted bg-transparent p-0 ps-0">
                    O pagamento é realizado de forma segura e direta pelo aplicativo. Aceitamos as principais bandeiras de cartão de crédito e débito, além de PIX, dependendo da região e do guincheiro. A transparência no preço é total.
                </div>
            </div>
        </div>
        
        <div class="accordion-item bg-transparent ps-0">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold bg-transparent shadow-none w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="padding-left: 0;">
                    O atendimento é 24h?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                <div class="accordion-body small text-muted bg-transparent p-0 ps-0">
                    Sim! O UGUINCHO está disponível 24 horas por dia, 7 dias por semana, para atender você em qualquer emergência, a qualquer momento e em qualquer lugar do Brasil.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">            
            <div class="col-md-6">
                <h3 class="fw-bold mb-4 mb-md-0">Baixe agora o UGUINCHO e dirija com a segurança de ter ajuda sempre à mão:</h3>
            </div>             
            <div class="col-md-6 d-flex justify-content-end">                
                <div class="card border-0" style="border-radius: 12px;">
                    <div class="card-body d-flex align-items-center">                        
                        <img src="./assets/img/qrcode.png" alt="QR Code para download" class="img-fluid me-3" style="max-width: 120px;">                        
                        <p class="fw-bold">Escaneie para fazer o download!</p>                        
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../templates/footer.php'; ?>