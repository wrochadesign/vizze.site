<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3025ED">
    <title><?= SITE_NAME ?> — <?= SITE_TAGLINE ?></title>
    <meta name="description" content="<?= SITE_DESCRIPTION ?>">
    <link rel="canonical" href="<?= SITE_CANONICAL ?>">

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_CANONICAL ?>">
    <meta property="og:title" content="<?= SITE_NAME ?>">
    <meta property="og:description" content="<?= SITE_DESCRIPTION ?>">
    <meta property="og:image" content="<?= SITE_CANONICAL ?>/assets/svg/vizze-logo-indigo.svg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= SITE_NAME ?>">
    <meta name="twitter:description" content="<?= SITE_DESCRIPTION ?>">

    <!-- Google Fonts oficiais do Manual Vizze (Plus Jakarta Sans 600-800, Inter 400-700, Newsreader 400) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400;1,6..72,500&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (configurado com os tokens exatos do Manual v2.0) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              vizze: {
                indigo: '#3025ED',
                indigoHover: '#251BC5',
                ink: '#121426',
                surface: '#FFFEFB',
                canvas: '#F8F7F4',
                coral: '#FF806B',
                mint: '#BFEBDD',
                lavender: '#E9E5FF',
                sand: '#F7F1E6',
                teal: '#176451',
                error: '#B4233C',
                warning: '#805400',
                divider: '#D9D7D1'
              }
            },
            fontFamily: {
              heading: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
              body: ['"Inter"', 'system-ui', 'sans-serif'],
              editorial: ['"Newsreader"', 'Georgia', 'serif']
            }
          }
        }
      }
    </script>

    <!-- CSS customizado oficial Vizze v2.0 (Link com cache-busting + Inline garantido contra falhas de rota/cache) -->
    <link rel="stylesheet" href="<?= assetUrl('assets/css/tokens.css') ?>">
    <link rel="stylesheet" href="<?= assetUrl('assets/css/style.css') ?>">
    <style id="vizze-inline-system">
    <?php
    $inlineCssPath = dirname(__DIR__) . '/assets/css/style.css';
    if (is_file($inlineCssPath)) {
        echo file_get_contents($inlineCssPath);
    }
    ?>
    </style>

    <!-- Favicon Oficial (vizze-icon.svg conforme Manual v2.0) -->
    <link rel="icon" type="image/svg+xml" href="<?= assetUrl('assets/svg/vizze-icon.svg') ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "name": "Vizze Local Services OS",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "Web, Android, iOS, Smart TV",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "BRL",
            "lowPrice": "59.00",
            "highPrice": "229.00"
          },
          "description": "<?= SITE_DESCRIPTION ?>"
        },
        {
          "@type": "Organization",
          "name": "Vizze",
          "url": "<?= SITE_CANONICAL ?>",
          "logo": "<?= SITE_CANONICAL ?>/assets/svg/vizze-logo-indigo.svg",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+55-11-99412-8800",
            "contactType": "customer service"
          }
        }
      ]
    }
    </script>
</head>
<body class="bg-vizze-canvas text-vizze-ink font-body antialiased selection:bg-vizze-lavender selection:text-vizze-indigo relative min-h-screen overflow-x-clip">

<!-- Ambient Glow Top -->
<div class="glow-backdrop" aria-hidden="true"></div>

<!-- Top Announcement Bar (Contraste verificado pelo Manual: #121426 sobre Coral #FF806B no selo) -->
<div class="bg-vizze-ink text-white text-xs py-2.5 px-4 border-b border-white/10 relative z-30">
  <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-center gap-x-2.5 gap-y-1 text-center">
    <span class="bg-vizze-coral text-vizze-ink font-bold text-[10px] uppercase tracking-wider px-2 py-0.5 rounded">Novidade</span>
    <span class="text-white/90">Recepção com <strong>Smart TV & Totem de Auto Check-in</strong> inclusos no Vizze Pro.</span>
    <a href="#planos" class="text-vizze-mint hover:text-white underline font-semibold transition-colors whitespace-nowrap inline-flex items-center gap-1">
      <span>Ver planos</span>
      <?= vizzeIcon('arrow-right', 14) ?>
    </a>
  </div>
</div>

<!-- Header Navigation -->
<header class="sticky top-0 z-50 bg-vizze-surface/90 backdrop-blur-md border-b border-vizze-divider transition-all">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
    <!-- Brand Logo Oficial com área de proteção livre conforme Manual Seção 03 -->
    <a href="<?= siteUrl() ?>" class="inline-flex items-center py-2 pr-3 focus:outline-none" aria-label="Vizze - Página Inicial">
      <img src="<?= assetUrl('assets/svg/vizze-logo-indigo.svg') ?>" alt="Vizze" class="h-7 sm:h-8 w-auto" style="height:30px;width:auto;">
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-[#4B5162]" aria-label="Navegação Principal">
      <a href="#como-funciona" class="hover:text-vizze-indigo transition-colors py-1">Ecossistema</a>
      <a href="#simulador" class="hover:text-vizze-indigo transition-colors py-1">Simulador de Lucro</a>
      <a href="#planos" class="hover:text-vizze-indigo transition-colors font-semibold text-vizze-indigo py-1">Planos & Preços</a>
      <a href="#casos" class="hover:text-vizze-indigo transition-colors py-1">Resultados</a>
      <a href="#faq" class="hover:text-vizze-indigo transition-colors py-1">Dúvidas</a>
    </nav>

    <!-- Action Buttons com estilo oficial do Manual v1.8 -->
    <div class="flex items-center gap-2.5">
      <a href="<?= URL_PRO_APP ?>" class="vz-btn vz-btn-ghost vz-btn-compact hidden sm:inline-flex">
        <span>Entrar no Pro</span>
      </a>
      <a href="#planos" class="vz-btn vz-btn-primary vz-btn-compact">
        <span class="sm:hidden">Testar Grátis</span>
        <span class="hidden sm:inline">Testar 14 Dias Grátis</span>
        <span class="button-icon" aria-hidden="true">
          <?= vizzeIcon('arrow-right', 18) ?>
        </span>
      </a>
      <!-- Botão Menu Mobile -->
      <button type="button" id="mobile-menu-btn" class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-xl border border-vizze-divider bg-white text-vizze-ink hover:border-vizze-indigo hover:text-vizze-indigo transition-colors" aria-expanded="false" aria-controls="mobile-nav-drawer" aria-label="Abrir menu de navegação">
        <span id="mobile-icon-open" class="inline-flex items-center justify-center">
          <?= vizzeIcon('menu', 20) ?>
        </span>
        <span id="mobile-icon-close" class="hidden items-center justify-center">
          <?= vizzeIcon('x', 20) ?>
        </span>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Drawer -->
  <div id="mobile-nav-drawer" class="hidden lg:hidden bg-vizze-surface border-t border-vizze-divider px-4 pt-3 pb-5 space-y-2 shadow-lg">
    <a href="#como-funciona" class="mobile-nav-link block px-3 py-2.5 rounded-xl text-sm font-semibold text-vizze-ink hover:bg-vizze-lavender hover:text-vizze-indigo">01 · Ecossistema (Pro, TV e Cliente)</a>
    <a href="#simulador" class="mobile-nav-link block px-3 py-2.5 rounded-xl text-sm font-semibold text-vizze-ink hover:bg-vizze-lavender hover:text-vizze-indigo">02 · Simulador de Lucro Real</a>
    <a href="#planos" class="mobile-nav-link block px-3 py-2.5 rounded-xl text-sm font-bold text-vizze-indigo bg-vizze-lavender/60">03 · Planos & Preços</a>
    <a href="#casos" class="mobile-nav-link block px-3 py-2.5 rounded-xl text-sm font-semibold text-vizze-ink hover:bg-vizze-lavender hover:text-vizze-indigo">04 · Resultados e Clientes</a>
    <a href="#faq" class="mobile-nav-link block px-3 py-2.5 rounded-xl text-sm font-semibold text-vizze-ink hover:bg-vizze-lavender hover:text-vizze-indigo">05 · Perguntas Frequentes</a>
    <div class="pt-2 border-t border-vizze-divider flex flex-col gap-2">
      <a href="<?= URL_PRO_APP ?>" class="vz-btn vz-btn-secondary w-full">
        <span>Acessar Painel Vizze Pro</span>
        <span class="button-icon" aria-hidden="true">
          <?= vizzeIcon('external-link', 18) ?>
        </span>
      </a>
    </div>
  </div>
</header>
