<?php
require_once 'db.php';

$whatsapp = '5581999660731';
$msg_agendar = 'Olá, gostaria de agendar um horário!';

$linkZap = 'https://wa.me/' . $whatsapp . '?text=' . urlencode($msg_agendar);
$faUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
$fontsUrl = 'https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Great+Vibes&family=Playfair+Display:ital,wght@0,600;1,400&family=Montserrat:wght@300;400;500;600&display=swap';
$mapsUrl = 'https://maps.google.com/maps?q=Rua%20Feira%20de%20Santana,%2017B,%20Jardim%20Napoli%202,%20Itaquaquecetuba%20-%20SP&t=&z=16&ie=UTF8&iwloc=&output=embed';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristianna Lima - Nails Designer | Vitrine Digital</title>
    <link rel="stylesheet" href="<?= $faUrl ?>">
    <link rel="stylesheet" href="<?= $fontsUrl ?>">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <header class="header">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <span class="logo-monogram">CL</span>
                <div class="logo-text">
                    <span class="brand-name">CRISTIANNA LIMA</span>
                    <span class="brand-sub">NAILS DESIGNER</span>
                </div>
            </a>
            <nav class="nav-menu">
                <a href="#sobre">Sobre</a>
                <a href="#servicos">Tabela de Preços</a>
                <a href="#galeria">Vitrine</a>
                <a href="#regras">Políticas</a>
                <a href="#localizacao">Localização</a>
            </nav>
            <a href="<?= $linkZap ?>" target="_blank" class="btn btn-gold btn-nav"><i class="fa-brands fa-whatsapp"></i> Agendar</a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="script-subtitle">Sua beleza, nossa arte.</span>
            <h1>Elegância, Cuidado e Arte em Cada Detalhe</h1>
            <p class="hero-quote">"Beleza também é autocuidado."</p>
            <div class="hero-buttons">
                <a href="#servicos" class="btn btn-gold">Ver Procedimentos</a>
                <a href="#galeria" class="btn btn-outline">Conhecer Trabalhos</a>
                <a href="<?= $linkZap ?>" target="_blank" class="btn btn-gold"><i class="fa-brands fa-whatsapp"></i> Agendar Horário</a>
            </div>
        </div>
    </section>

    <section id="sobre" class="section sobre-section">
        <div class="container sobre-grid">
            <div class="sobre-img-container">
                <img src="assets/img/estudio.jfif" alt="Cristianna Lima" class="sobre-img">
                <div class="gold-frame"></div>
            </div>
            <div class="sobre-text">
                <span class="section-badge">Quem sou eu</span>
                <h2>Cristianna Lima</h2>
                <p class="subtitle-script">Nails Designer & Especialista em Cuidados</p>
                <p>Com experiência e paixão pelo universo estético das unhas, Cristianna Lima oferece um atendimento exclusivo e personalizado para realçar a sua beleza com máxima durabilidade e sofisticação.</p>
                <p>Nosso espaço conta com biossegurança, materiais 100% esterilizados e os melhores produtos do mercado para entregar um resultado impecável e duradouro.</p>
                <ul class="diferenciais-list">
                    <li><i class="fa-solid fa-check-double" style="color:var(--gold-primary);"></i> Atendimento humanizado e personalizado</li>
                    <li><i class="fa-solid fa-check-double" style="color:var(--gold-primary);"></i> Controle rígido de biossegurança</li>
                    <li><i class="fa-solid fa-check-double" style="color:var(--gold-primary);"></i> Produtos de altíssima durabilidade</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="servicos" class="section bg-light">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">Tabela de Valores</span>
                <h2>Nossos Procedimentos</h2>
            </div>
            <div class="tables-grid">
                <div class="price-card">
                    <div class="card-header">
                        <h3>Tabela Mãos & Gel</h3>
                    </div>
                    <ul class="price-list">
                        <li><span class="service-name">Alongamento</span><span class="service-price">R$ 110,00</span></li>
                        <li><span class="service-name">Banho de gel</span><span class="service-price">R$ 85,00</span></li>
                        <li><span class="service-name">Esmaltação em gel</span><span class="service-price">R$ 50,00</span></li>
                        <li><span class="service-name">Blindagem</span><span class="service-price">R$ 70,00</span></li>
                        <li><span class="service-name">Manutenção</span><span class="service-price">R$ 85,00</span></li>
                        <li><span class="service-name">Remoção</span><span class="service-price">R$ 40,00</span></li>
                    </ul>
                </div>
                <div class="price-card">
                    <div class="card-header">
                        <h3>Tabela Pés & Tradicional</h3>
                    </div>
                    <ul class="price-list">
                        <li><span class="service-name">Mão e pé tradicional</span><span class="service-price">R$ 55,00</span></li>
                        <li><span class="service-name">Mão tradicional</span><span class="service-price">R$ 30,00</span></li>
                        <li><span class="service-name">Pé tradicional</span><span class="service-price">R$ 35,00</span></li>
                        <li><span class="service-name">Spa dos pés</span><span class="service-price">R$ 75,00</span></li>
                        <li><span class="service-name">Esmaltação em gel (Pé)</span><span class="service-price">R$ 60,00</span></li>
                        <li><span class="service-name">Esmaltação em gel + Alongamento</span><span class="service-price">R$ 70,00</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    $categoriasVitrine = [];
    try {
        $categoriasVitrine = $pdo->query("SELECT * FROM categorias ORDER BY id ASC")->fetchAll();
    } catch (Exception $e) {
        $categoriasVitrine = [];
    }
    ?>
    <section id="galeria" class="section">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">Portfólio</span>
                <h2>Vitrine de Trabalhos</h2>
            </div>
            <div class="gallery-grid">
                <?php if (!empty($categoriasVitrine)): ?>
                    <?php foreach ($categoriasVitrine as $cat): ?>
                        <a href="portfolio.php?categoria=<?= htmlspecialchars($cat['slug']) ?>" class="gallery-item" style="display: block;">
                            <img src="<?= htmlspecialchars($cat['imagem_capa']) ?>" alt="<?= htmlspecialchars($cat['titulo']) ?>">
                            <div class="gallery-overlay">
                                <span><?= htmlspecialchars($cat['titulo']) ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="text-align:center; width:100%;">Nenhuma categoria cadastrada ou banco de dados desconectado.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="regras" class="section bg-light">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">Informações Importantes</span>
                <h2>Políticas do Estúdio</h2>
            </div>
            <div class="regras-grid">
                <div class="regra-card highlight-card">
                    <h3><i class="fa-solid fa-lock" style="color:var(--gold-primary);"></i> Regra do Sinal (30%)</h3>
                    <p>Para garantia e confirmação do seu horário na agenda, solicitamos um <strong>sinal de 30%</strong> do valor do procedimento no ato do agendamento.</p>
                    <div class="alert-box">
                        <strong>Atenção:</strong> Em caso de cancelamento sem aviso prévio de 24 horas, o valor do sinal não será reembolsado.
                    </div>
                </div>
                <div class="regra-card">
                    <h3><i class="fa-solid fa-clock" style="color:var(--gold-primary);"></i> Tolerância & Atendimento</h3>
                    <p>Tolerância máxima de <strong>20 minutos</strong> de atraso para não comprometer os atendimentos seguintes.</p>
                    <p style="margin-top:10px;">Solicitamos que venha sem acompanhantes para manter o ambiente tranquilo e relaxante para todas as clientes.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="localizacao" class="section">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">Como Chegar</span>
                <h2>Nossa Localização</h2>
            </div>
            <div class="location-card">
                <div class="location-info">
                    <h3>Estúdio Cris Nails</h3>
                    <p><i class="fa-solid fa-location-dot" style="color:var(--gold-primary);"></i> Rua Feira de Santana, 17B, Jardim Napoli 2, Itaquaquecetuba - SP</p>
                    <p><i class="fa-solid fa-phone" style="color:var(--gold-primary);"></i> (81) 99966-0731</p>
                    <a href="<?= $linkZap ?>" target="_blank" class="btn btn-gold"><i class="fa-brands fa-whatsapp"></i> Agendar pelo WhatsApp</a>
                </div>
                <div class="location-map">
                    <iframe src="<?= $mapsUrl ?>" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-content">
            <p>© <?= date('Y') ?> Cris Nails - Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>