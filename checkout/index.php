<?php
require_once dirname(__DIR__) . '/includes/config.php';

$selectedPlanKey = isset($_GET['plan']) && in_array($_GET['plan'], ['solo_mei', 'starter', 'pro', 'enterprise'], true)
    ? $_GET['plan']
    : 'pro';

$billingCycle = (isset($_GET['billing']) && $_GET['billing'] === 'annual') ? 'annual' : 'monthly';

$plans = getSaaSPlans();
$currentPlan = $plans[$selectedPlanKey];
$activePrice = $billingCycle === 'annual' ? $currentPlan['annual_price'] : $currentPlan['monthly_price'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3025ED">
    <title>Assinar <?= htmlspecialchars($currentPlan['name']) ?> · Vizze Local Services OS</title>
    <link rel="icon" type="image/svg+xml" href="<?= assetUrl('assets/svg/vizze-icon.svg') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:ital,opsz,wght@0,6..72,400;1,6..72,400&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
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
</head>
<body class="bg-vizze-canvas text-vizze-ink font-body min-h-screen py-8 sm:py-12 px-4 sm:px-6 lg:px-8 relative overflow-x-clip">

<div class="max-w-5xl mx-auto relative z-10">
  <!-- Top Brand Header -->
  <header class="flex items-center justify-between mb-8 pb-5 border-b border-vizze-divider">
    <a href="<?= siteUrl() ?>" class="inline-flex items-center py-1 pr-3" aria-label="Voltar para a página inicial da Vizze">
      <img src="<?= assetUrl('assets/svg/vizze-logo-indigo.svg') ?>" alt="Vizze" class="h-7 sm:h-8 w-auto" style="height:30px;width:auto;">
    </a>
    <a href="<?= siteUrl('#planos') ?>" class="vz-btn vz-btn-neutral vz-btn-compact">
      <?= vizzeIcon('arrow-left', 16) ?>
      <span>Voltar aos planos</span>
    </a>
  </header>

  <!-- Seletor Rápido de Plano no Topo do Checkout -->
  <div class="mb-7 flex flex-wrap items-center justify-between gap-3 bg-vizze-surface p-3 rounded-2xl border border-vizze-divider">
    <span class="text-xs font-semibold text-[#555A6C] pl-2">Trocar plano rapidamente:</span>
    <div class="flex flex-wrap gap-1.5">
      <?php foreach ($plans as $k => $pl): ?>
        <a
          href="<?= siteUrl('checkout/?plan=' . $k . ($billingCycle === 'annual' ? '&billing=annual' : '')) ?>"
          class="px-3 py-1.5 rounded-lg text-xs font-semibold transition-all <?= $k === $selectedPlanKey ? 'bg-vizze-indigo text-white shadow-xs' : 'bg-vizze-canvas text-[#555A6C] hover:text-vizze-ink border border-vizze-divider' ?>"
        >
          <?= htmlspecialchars($pl['name']) ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    
    <!-- Formulário de Cadastro & Ativação (7 Colunas) -->
    <div class="lg:col-span-7 bg-vizze-surface p-6 sm:p-8 rounded-2xl border border-vizze-divider shadow-md space-y-6">
      <div>
        <div class="eyebrow-tag mb-2">
          <span class="eyebrow-num">ETAPA ÚNICA</span>
          <span>Ativação Instantânea</span>
        </div>
        <h1 class="text-2xl sm:text-3xl font-bold text-vizze-ink font-heading leading-tight">
          Crie sua conta e configure sua unidade.
        </h1>
        <p class="text-xs sm:text-sm text-[#555A6C] mt-1.5">
          Você terá <strong>14 dias de teste gratuito</strong> sem nenhuma cobrança hoje.
        </p>
      </div>

      <form id="onboarding-form" class="space-y-4" novalidate>
        <input type="hidden" id="form-plan" value="<?= htmlspecialchars($currentPlan['id']) ?>">
        <input type="hidden" id="form-billing" value="<?= htmlspecialchars($billingCycle) ?>">

        <div>
          <label for="business-name" class="block text-xs sm:text-sm font-semibold text-vizze-ink mb-1.5">Nome do Estabelecimento ou Cadeira Solo</label>
          <input type="text" id="business-name" required placeholder="Ex: Barbearia Dom Rocha ou Studio Camila" class="w-full min-h-[48px] px-3.5 py-2.5 rounded-[10px] border border-[#85899A] bg-white text-sm text-vizze-ink focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-vizze-indigo transition-all">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label for="user-name" class="block text-xs sm:text-sm font-semibold text-vizze-ink mb-1.5">Seu Nome Completo</label>
            <input type="text" id="user-name" required placeholder="Seu nome e sobrenome" class="w-full min-h-[48px] px-3.5 py-2.5 rounded-[10px] border border-[#85899A] bg-white text-sm text-vizze-ink focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-vizze-indigo transition-all">
          </div>
          <div>
            <label for="user-phone" class="block text-xs sm:text-sm font-semibold text-vizze-ink mb-1.5">WhatsApp com DDD</label>
            <input type="tel" id="user-phone" required placeholder="(11) 99999-0000" class="w-full min-h-[48px] px-3.5 py-2.5 rounded-[10px] border border-[#85899A] bg-white text-sm text-vizze-ink focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-vizze-indigo transition-all">
          </div>
        </div>

        <div>
          <label for="user-email" class="block text-xs sm:text-sm font-semibold text-vizze-ink mb-1.5">E-mail de Acesso (Login no Vizze Pro)</label>
          <input type="email" id="user-email" required placeholder="voce@seuemail.com.br" class="w-full min-h-[48px] px-3.5 py-2.5 rounded-[10px] border border-[#85899A] bg-white text-sm text-vizze-ink focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-vizze-indigo transition-all">
        </div>

        <div>
          <label for="user-password" class="block text-xs sm:text-sm font-semibold text-vizze-ink mb-1.5">Criar Senha de Acesso</label>
          <input type="password" id="user-password" required minlength="6" placeholder="Mínimo de 6 caracteres" class="w-full min-h-[48px] px-3.5 py-2.5 rounded-[10px] border border-[#85899A] bg-white text-sm text-vizze-ink focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-vizze-indigo transition-all">
        </div>

        <!-- Checkbox de Consentimento LGPD Obrigatório -->
        <div class="flex items-start gap-2.5 pt-2">
          <input type="checkbox" id="lgpd-consent" required class="mt-1 w-4 h-4 rounded text-vizze-indigo focus:ring-vizze-indigo border-[#85899A]">
          <label for="lgpd-consent" class="text-xs text-[#555A6C] leading-snug">
            Concordo com os <a href="<?= siteUrl('#faq') ?>" class="underline text-vizze-indigo font-semibold">Termos de Uso</a> e autorizo o tratamento dos dados cadastrais conforme a <a href="<?= siteUrl('#faq') ?>" class="underline text-vizze-indigo font-semibold">Política de Privacidade (LGPD)</a>.
          </label>
        </div>

        <div id="feedback-msg" class="hidden text-xs p-3.5 rounded-xl font-medium" role="status"></div>

        <div class="pt-2">
          <button type="submit" id="submit-btn" class="vz-btn vz-btn-primary w-full text-base !min-h-[52px]">
            <span>Ativar <?= htmlspecialchars($currentPlan['name']) ?> Grátis</span>
            <span class="button-icon" aria-hidden="true">
              <?= vizzeIcon('arrow-right', 18) ?>
            </span>
          </button>
        </div>
      </form>
    </div>

    <!-- Resumo do Pedido / Plano Escolhido (5 Colunas) -->
    <aside class="lg:col-span-5 bg-vizze-surface p-6 sm:p-7 rounded-2xl border-2 border-vizze-indigo/30 shadow-md space-y-5">
      <div class="flex justify-between items-start gap-4">
        <div class="min-w-0">
          <span class="inline-block text-[10px] font-bold uppercase tracking-wider text-vizze-indigo bg-vizze-lavender px-2.5 py-0.5 rounded-md">
            Plano Selecionado
          </span>
          <h2 class="text-xl font-bold text-vizze-ink font-heading mt-2 leading-snug"><?= htmlspecialchars($currentPlan['name']) ?></h2>
          <p class="text-xs text-vizze-indigo font-semibold mt-0.5"><?= htmlspecialchars($currentPlan['subtitle']) ?></p>
        </div>
        <div class="text-right shrink-0 tabular-nums">
          <div class="text-2xl font-bold text-vizze-ink font-heading whitespace-nowrap">R$ <?= $activePrice ?></div>
          <small class="text-[11px] text-[#626778] block whitespace-nowrap">por mês <?= $billingCycle === 'annual' ? '(anual)' : '' ?></small>
        </div>
      </div>

      <p class="text-xs text-[#555A6C] leading-relaxed">
        <?= htmlspecialchars($currentPlan['headline']) ?>
      </p>

      <div class="pt-4 border-t border-vizze-divider space-y-2.5">
        <span class="text-[11px] font-bold uppercase tracking-wider text-vizze-ink block">Recursos inclusos no plano:</span>
        <ul class="space-y-2 text-xs text-[#3F4454]">
          <?php foreach ($currentPlan['features'] as $f): ?>
            <li class="flex items-start gap-2">
              <span class="text-vizze-teal shrink-0 mt-0.5 inline-flex"><?= vizzeIcon('check', 16) ?></span>
              <span><?= htmlspecialchars($f) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="pt-4 border-t border-vizze-divider text-xs text-[#555A6C] space-y-2 tabular-nums">
        <div class="flex justify-between">
          <span>Período de teste inicial</span>
          <strong class="text-vizze-teal font-bold">14 dias grátis</strong>
        </div>
        <div class="flex justify-between">
          <span>Fidelidade / Multa</span>
          <strong class="text-vizze-ink font-semibold">Nenhuma</strong>
        </div>
        <div class="flex justify-between font-bold text-vizze-ink pt-3 border-t border-dashed border-vizze-divider text-sm">
          <span>Total a pagar hoje</span>
          <span class="text-vizze-teal font-bold text-base">R$ 0,00</span>
        </div>
      </div>

      <div class="p-3.5 rounded-xl bg-vizze-mint/60 border border-[#9FD8C5] text-xs text-vizze-teal flex items-center gap-2.5">
        <span class="shrink-0 inline-flex"><?= vizzeIcon('lock-keyhole', 16) ?></span>
        <span>Ambiente seguro SSL 256-bit · Dados protegidos pela LGPD</span>
      </div>
    </aside>

  </div>
</div>

<script>
const form = document.getElementById('onboarding-form');
const feedback = document.getElementById('feedback-msg');
const submitBtn = document.getElementById('submit-btn');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const businessName = document.getElementById('business-name').value.trim();
  const userName = document.getElementById('user-name').value.trim();
  const userPhone = document.getElementById('user-phone').value.trim();
  const userEmail = document.getElementById('user-email').value.trim();
  const userPassword = document.getElementById('user-password').value;
  const lgpdConsent = document.getElementById('lgpd-consent').checked;

  if (!businessName || !userName || !userPhone || !userEmail || userPassword.length < 6 || !lgpdConsent) {
    feedback.className = 'text-xs p-3.5 rounded-xl bg-[#FFF0F2] text-[#B4233C] border border-[#F5C2C7] block font-medium';
    feedback.innerText = 'Preencha todos os campos corretamente (senha mínima de 6 caracteres) e aceite os termos LGPD.';
    return;
  }

  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span>Configurando sua unidade...</span>';
  feedback.className = 'hidden';

  const payload = {
    name: userName,
    email: userEmail,
    phone: userPhone,
    password: userPassword,
    role: 'owner',
    business_name: businessName,
    saas_plan_id: document.getElementById('form-plan').value,
    billing_cycle: document.getElementById('form-billing').value
  };

  try {
    const res = await fetch('<?= API_BASE_URL ?>/auth/register', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const data = await res.json();

    if (!res.ok || !data.success) {
      feedback.className = 'text-xs p-3.5 rounded-xl bg-[#FFF0F2] text-[#B4233C] border border-[#F5C2C7] block font-medium';
      feedback.innerText = data.message || 'Não foi possível concluir o cadastro. Verifique os dados informados.';
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span>Tentar Novamente</span>';
      return;
    }

    feedback.className = 'text-xs p-3.5 rounded-xl bg-[#BFEBDD] text-[#176451] border border-[#93CDBB] block font-semibold';
    feedback.innerText = '✓ Unidade criada com sucesso! Redirecionando para o seu painel Vizze Pro...';

    if (data.data?.access_token) {
      localStorage.setItem('vizze_auth_session', JSON.stringify({
        access_token: data.data.access_token,
        user: data.data.user,
        active_role: 'owner',
        active_venue_id: data.data.user?.venue_id || 1
      }));
    }

    setTimeout(() => {
      window.location.href = '<?= URL_PRO_APP ?>';
    }, 1400);

  } catch (err) {
    feedback.className = 'text-xs p-3.5 rounded-xl bg-[#FFF0F2] text-[#B4233C] border border-[#F5C2C7] block font-medium';
    feedback.innerText = 'Erro de conexão com o servidor. Confira sua internet e tente novamente.';
    submitBtn.disabled = false;
    submitBtn.innerHTML = '<span>Tentar Novamente</span>';
  }
});
</script>

</body>
</html>
