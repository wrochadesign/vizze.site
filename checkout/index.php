<?php
require_once dirname(__DIR__) . '/includes/config.php';

$selectedPlanKey = isset($_GET['plan']) && in_array($_GET['plan'], ['solo_mei', 'starter', 'pro', 'enterprise'])
    ? $_GET['plan']
    : 'pro';

$plans = getSaaSPlans();
$currentPlan = $plans[$selectedPlanKey];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinar <?= htmlspecialchars($currentPlan['name']) ?> · Vizze</title>
    <link rel="icon" type="image/svg+xml" href="/assets/svg/vizze-simbolo-indigo.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
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
                divider: '#E6E3DC'
              }
            },
            fontFamily: {
              heading: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
              body: ['"Inter"', 'system-ui', 'sans-serif']
            }
          }
        }
      }
    </script>
</head>
<body class="bg-vizze-canvas text-vizze-ink font-body min-h-screen py-10 px-4 sm:px-6 lg:px-8">

<div class="max-w-4xl mx-auto">
  <!-- Top Brand Header -->
  <div class="flex items-center justify-between mb-8 pb-4 border-b border-vizze-divider">
    <a href="/" class="flex items-center gap-2">
      <img src="/assets/svg/vizze-logo-indigo.svg" alt="Vizze" class="h-7 w-auto">
    </a>
    <a href="/#planos" class="text-xs font-semibold text-[#626778] hover:text-vizze-indigo">
      ← Trocar de plano
    </a>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    
    <!-- Formulário de Cadastro & Ativação (7 Colunas) -->
    <div class="lg:col-span-7 bg-white p-6 sm:p-8 rounded-3xl border border-vizze-divider shadow-lg space-y-6">
      <div>
        <span class="text-[10px] font-bold uppercase tracking-widest text-vizze-indigo bg-vizze-indigo/10 px-2.5 py-0.5 rounded-full">
          ETAPA ÚNICA · ACESSO IMEDIATO
        </span>
        <h1 class="text-2xl font-extrabold text-vizze-ink font-heading mt-2">
          Crie sua conta e ative sua unidade
        </h1>
        <p class="text-xs text-[#626778] mt-1">
          Você terá 14 dias de teste sem cobrança imediata no seu cartão.
        </p>
      </div>

      <form id="onboarding-form" class="space-y-4">
        <input type="hidden" id="form-plan" value="<?= htmlspecialchars($currentPlan['id']) ?>">

        <div>
          <label class="block text-xs font-bold text-vizze-ink mb-1">Nome do Estabelecimento ou Cadeira Solo</label>
          <input type="text" id="business-name" required placeholder="Ex: Barbearia Dom Rocha ou Studio Lucas" class="w-full px-4 py-3 rounded-xl border border-vizze-divider bg-[#FFFEFC] text-sm focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-transparent">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-vizze-ink mb-1">Seu Nome Completo</label>
            <input type="text" id="user-name" required placeholder="Seu nome" class="w-full px-4 py-3 rounded-xl border border-vizze-divider bg-[#FFFEFC] text-sm focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-transparent">
          </div>
          <div>
            <label class="block text-xs font-bold text-vizze-ink mb-1">WhatsApp / Telefone</label>
            <input type="tel" id="user-phone" required placeholder="(11) 99999-0000" class="w-full px-4 py-3 rounded-xl border border-vizze-divider bg-[#FFFEFC] text-sm focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-transparent">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-vizze-ink mb-1">E-mail de Acesso (Login)</label>
          <input type="email" id="user-email" required placeholder="seuemail@exemplo.com" class="w-full px-4 py-3 rounded-xl border border-vizze-divider bg-[#FFFEFC] text-sm focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-transparent">
        </div>

        <div>
          <label class="block text-xs font-bold text-vizze-ink mb-1">Criar Senha de Acesso</label>
          <input type="password" id="user-password" required minlength="6" placeholder="Mínimo 6 dígitos" class="w-full px-4 py-3 rounded-xl border border-vizze-divider bg-[#FFFEFC] text-sm focus:outline-none focus:ring-2 focus:ring-vizze-indigo focus:border-transparent">
        </div>

        <!-- Checkbox de Consentimento LGPD Obrigatório -->
        <div class="flex items-start gap-2.5 pt-2">
          <input type="checkbox" id="lgpd-consent" required class="mt-1 w-4 h-4 rounded text-vizze-indigo focus:ring-vizze-indigo border-vizze-divider">
          <label for="lgpd-consent" class="text-[11px] text-[#626778] leading-snug">
            Concordo com os <a href="/#termos" class="underline text-vizze-indigo">Termos de Uso</a> e autorizo o tratamento dos dados conforme a <a href="/#lgpd" class="underline text-vizze-indigo">Política de Privacidade (LGPD)</a>.
          </label>
        </div>

        <div id="feedback-msg" class="hidden text-xs p-3 rounded-xl"></div>

        <button type="submit" id="submit-btn" class="w-full bg-vizze-indigo hover:bg-vizze-indigoHover text-white font-bold py-4 px-6 rounded-xl text-sm shadow-lg hover:shadow-indigo-500/25 transition-all flex items-center justify-center gap-2">
          <span>Ativar <?= htmlspecialchars($currentPlan['name']) ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
        </button>
      </form>
    </div>

    <!-- Resumo do Pedido / Plano Escolhido (5 Colunas) -->
    <div class="lg:col-span-5 bg-[#FFFEFC] p-6 rounded-3xl border border-vizze-indigo/30 shadow-md space-y-5">
      <div class="flex justify-between items-start">
        <div>
          <span class="text-[10px] font-bold uppercase tracking-wider text-vizze-indigo bg-vizze-indigo/10 px-2.5 py-0.5 rounded-full">
            PLANO SELECIONADO
          </span>
          <h3 class="text-lg font-bold text-vizze-ink mt-2"><?= htmlspecialchars($currentPlan['name']) ?></h3>
        </div>
        <div class="text-right">
          <div class="text-2xl font-black text-vizze-ink font-heading">R$ <?= $currentPlan['monthly_price'] ?></div>
          <small class="text-[11px] text-[#707585]">por mês</small>
        </div>
      </div>

      <p class="text-xs text-[#626778] leading-relaxed">
        <?= htmlspecialchars($currentPlan['headline']) ?>
      </p>

      <div class="pt-4 border-t border-vizze-divider space-y-2">
        <span class="text-[11px] font-bold uppercase tracking-wider text-vizze-ink block">O que está incluso:</span>
        <ul class="space-y-1.5 text-xs text-[#444857]">
          <?php foreach ($currentPlan['features'] as $f): ?>
            <li class="flex items-center gap-2">
              <span class="text-vizze-indigo font-bold">✓</span>
              <span><?= htmlspecialchars($f) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="pt-4 border-t border-vizze-divider text-xs text-[#737080] space-y-1">
        <div class="flex justify-between">
          <span>Período de teste</span>
          <strong class="text-[#176451]">14 dias grátis</strong>
        </div>
        <div class="flex justify-between">
          <span>Cancelamento</span>
          <strong>A qualquer momento</strong>
        </div>
        <div class="flex justify-between font-bold text-vizze-ink pt-2 border-t border-dashed border-vizze-divider text-sm">
          <span>Total hoje</span>
          <span class="text-[#176451]">R$ 0,00</span>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
const form = document.getElementById('onboarding-form');
const feedback = document.getElementById('feedback-msg');
const submitBtn = document.getElementById('submit-btn');

form.addEventListener('submit', async (e) => {
  e.preventDefault();
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span>Criando sua unidade...</span>';
  feedback.className = 'hidden';

  const payload = {
    name: document.getElementById('user-name').value.trim(),
    email: document.getElementById('user-email').value.trim(),
    phone: document.getElementById('user-phone').value.trim(),
    password: document.getElementById('user-password').value,
    role: 'owner',
    business_name: document.getElementById('business-name').value.trim(),
    saas_plan_id: document.getElementById('form-plan').value
  };

  try {
    const res = await fetch('<?= API_BASE_URL ?>/auth/register', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const data = await res.json();

    if (!res.ok || !data.success) {
      feedback.className = 'text-xs p-3 rounded-xl bg-red-100 text-red-800 block';
      feedback.innerText = data.message || 'Erro ao criar conta. Verifique os dados e tente novamente.';
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span>Tentar Novamente</span>';
      return;
    }

    feedback.className = 'text-xs p-3 rounded-xl bg-green-100 text-green-800 block';
    feedback.innerText = 'Conta criada com sucesso! Redirecionando para o seu Vizze Pro...';

    // Salva token e redireciona para o Pro App
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
    }, 1500);

  } catch (err) {
    feedback.className = 'text-xs p-3 rounded-xl bg-red-100 text-red-800 block';
    feedback.innerText = 'Não foi possível conectar ao servidor. Tente novamente.';
    submitBtn.disabled = false;
    submitBtn.innerHTML = '<span>Tentar Novamente</span>';
  }
});
</script>

</body>
</html>
