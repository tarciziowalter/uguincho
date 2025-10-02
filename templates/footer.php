<footer class="bg-dark py-5">
    <div class="container">
        <div class="row mb-4 align-items-start">
            
            <div class="col-md-6 col-lg-8">
                <div class="mb-5">
                    <img src="./assets/img/logo.png" alt="<?= SITE_NAME; ?>">
                </div>
                
                <div class="mb-3">
                    <a href="<?= SOCIAL_INSTAGRAM; ?>" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="<?= SOCIAL_FACEBOOK; ?>" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="<?= SOCIAL_LINKEDIN; ?>" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="<?= SOCIAL_YOUTUBE; ?>" class="text-white me-3"><i class="bi bi-youtube"></i></a>
                </div>
                
                <div class="mb-0">
                    <a href="<?= LINK_APP_STORE; ?>"><img src="./assets/img/appstore-2.png" alt="App Store" class="me-2"></a>
                    <a href="<?= LINK_PLAY_STORE; ?>"><img src="./assets/img/playstore-2.png" alt="Google Play"></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 text-end">
                <p class="small text-white">
                    <?= SITE_EMAIL; ?><br><?= SITE_PHONE; ?>
                </p>
            </div>
        </div>
        
        <div class="d-flex justify-content-between flex-column flex-md-row pt-3 copy-and-links mb-2">
            
            <p class="small mb-2 mb-md-0 text-red">&copy; <?= date('Y'); ?> <?= SITE_NAME; ?></p>
            
            <p class="small mb-0">
                <a href="./termos-de-uso" class="text-white text-decoration-none me-3">Termos de uso</a> | <a href="./politicas-de-privacidade" class="text-white text-decoration-none">Políticas de Privacidade</a>
            </p>
        </div>
    </div>
</footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  </body>

  </html>