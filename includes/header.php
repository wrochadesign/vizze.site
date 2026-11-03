<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!-- Google Fonts oficiais do Manual Vizze -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400;1,6..72,500&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (configurado com tokens do manual) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              vizze: {
                indigo: '#3025ED',
                indigoHover: '#251CB8',
                ink: '#121426',
                surface: '#FFFEFB',
                canvas: '#F8F7F4',
                coral: '#FF806B',
                mint: '#BFEBDD',
                lavender: '#E9E5FF',
                sand: '#F7F1E6',
                teal: '#176451',
                divider: '#E6E3DC'
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

    <!-- CSS customizado oficial Vizze v1.8 -->
    <link rel="stylesheet" href="/assets/css/tokens.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Favicon Oficial -->
    <link rel="icon" type="image/svg+xml" href="/assets/svg/vizze-simbolo-indigo.svg">

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
<body class="bg-vizze-canvas text-vizze-ink font-body antialiased selection:bg-vizze-lavender selection:text-vizze-indigo relative min-h-screen">

<!-- Ambient Glow Top -->
<div class="glow-backdrop" aria-hidden="true"></div>

<!-- Top Announcement Ribbon -->
<div class="bg-vizze-ink text-white text-xs py-2 px-4 text-center border-b border-white/10 relative z-20 flex items-center justify-center gap-2">
  <span class="inline-block w-2 h-2 rounded-full bg-vizze-coral animate-pulse"></span>
  <span class="text-white/90"><strong>Lançamento:</strong> Smart TV & Totem de Auto Check-in agora disponíveis no Plano Pro.</span>
  <a href="#planos" class="underline hover:text-vizze-coral font-semibold ml-1.5 transition-colors">Conhecer planos →</a>
</div>

<!-- Header Navigation -->
<header class="sticky top-0 z-50 bg-vizze-surface/85 backdrop-blur-md border-b border-vizze-divider transition-all">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    <!-- Brand Logo -->
    <a href="/" class="flex items-center gap-3.5 group">
      <img src="/assets/svg/vizze-logo-indigo.svg" alt="Vizze" class="h-7 w-auto transition-transform group-hover:scale-105">
      <span class="hidden sm:inline-block text-[10px] font-bold tracking-widest text-[#514994] border-l border-vizze-divider pl-3 uppercase">OS PARA SERVIÇOS</span>
    </a>

    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-[#4B5162]">
      <a href="#como-funciona" class="hover:text-vizze-indigo transition-colors">Como funciona</a>
      <a href="#simulador" class="hover:text-vizze-indigo transition-colors">Calculadora de Lucro</a>
      <a href="#planos" class="hover:text-vizze-indigo transition-colors font-semibold text-vizze-indigo">Planos & Preços</a>
      <a href="#casos" class="hover:text-vizze-indigo transition-colors">Resultados</a>
      <a href="#faq" class="hover:text-vizze-indigo transition-colors">Dúvidas</a>
    </nav>

    <!-- Action Buttons com estilo oficial do Manual -->
    <div class="flex items-center gap-3">
      <a href="<?= URL_PRO_APP ?>" class="vz-btn vz-btn-ghost vz-btn-compact hidden sm:inline-flex">
        Entrar no Pro
      </a>
      <a href="#planos" class="vz-btn vz-btn-primary vz-btn-compact shadow-sm">
        <span>Assinar Plano</span>
        <span class="button-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="m9 18 6-6-6-6"/></svg>
        </span>
      </a>
    </div>
  </div>
</header>
