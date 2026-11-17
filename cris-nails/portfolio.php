<?php
require_once "db.php";

$categorias = [];
try {
    $categorias = $pdo->query("SELECT * FROM categorias ORDER BY id ASC")->fetchAll();
} catch (Exception $e) {
    $categorias = [];
}

$slugSelecionado = $_GET["categoria"] ?? ($categorias[0]["slug"] ?? "");

$atual = null;
foreach ($categorias as $cat) {
    if ($cat["slug"] === $slugSelecionado) {
        $atual = $cat;
        break;
    }
}
if (!$atual && !empty($categorias)) {
    $atual = $categorias[0];
}

$fotos = [];
if ($atual) {
    $stmtFotos = $pdo->prepare("SELECT * FROM fotos WHERE categoria_id = ? ORDER BY id DESC");
    $stmtFotos->execute([$atual["id"]]);
    $fotos = $stmtFotos->fetchAll();
}

$whatsappEstudio = "5581999660731";
$msgZap = "Olá, Cris Nails! Vi o portfólio de *" . ($atual["titulo"] ?? "Portfólio") . "* no site e gostaria de agendar um horário.";
$linkZap = "https://wa.me/" . $whatsappEstudio . "?text=" . urlencode($msgZap);

$fontsUrl = "https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Great+Vibes&family=Playfair+Display:ital,wght@0,600;1,400&family=Montserrat:wght@300;400;500;600&display=swap";
$caminhoCss = file_exists("assets/styles.css") ? "assets/styles.css" : "styles.css";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($atual["titulo"] ?? "Portfólio") ?> | Cris Nails</title>
    <link rel="stylesheet" href="<?= $fontsUrl ?>">
    <link rel="stylesheet" href="<?= $caminhoCss ?>">
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
                <a href="index.php#sobre">Sobre</a>
                <a href="index.php#servicos">Tabela de Preços</a>
                <a href="index.php#galeria">Vitrine</a>
                <a href="index.php#regras">Políticas</a>
                <a href="index.php#localizacao">Localização</a>
            </nav>
            <a href="<?= $linkZap ?>" target="_blank" class="btn btn-gold btn-nav">Agendar</a>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="portfolio-filtros">
                <?php foreach ($categorias as $cat): ?>
                    <a href="portfolio.php?categoria=<?= htmlspecialchars($cat["slug"]) ?>" class="filtro-pill <?= ($atual && $cat["slug"] === $atual["slug"]) ? "ativo" : "" ?>">
                        <?= htmlspecialchars($cat["titulo"]) ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="section-title">
                <span class="section-badge">Galeria Completa</span>
                <h2><?= htmlspecialchars($atual["titulo"] ?? "Trabalhos") ?></h2>
                <p class="subtitle-script"><?= htmlspecialchars($atual["subtitulo"] ?? "") ?></p>
            </div>

            <div class="gallery-grid">
                <?php if (!empty($fotos)): ?>
                    <?php foreach ($fotos as $foto): ?>
                        <div class="gallery-item gallery-foto-unica">
                            <img src="<?= htmlspecialchars($foto["caminho_imagem"]) ?>" alt="<?= htmlspecialchars($foto["legenda"] ?: ($atual["titulo"] ?? "Trabalho")) ?>">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="text-align:center; width:100%;">Nenhuma foto encontrada para esta categoria.</p>
                <?php endif; ?>
            </div>

            <div class="portfolio-acoes">
                <a href="index.php#galeria" class="btn btn-outline">Voltar para o Site</a>
                <a href="<?= $linkZap ?>" target="_blank" class="btn btn-gold">Agendar Este Estilo</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-content">
            <p style="text-align:center;">&copy; <?= date("Y") ?> Cris Nails - Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>