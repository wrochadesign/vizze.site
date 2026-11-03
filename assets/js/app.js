/**
 * Vizze Public Site - Interactive Logic (v2.0)
 */

document.addEventListener('DOMContentLoaded', () => {
  if (window.__VIZZE_APP_INITIALIZED__) return;
  window.__VIZZE_APP_INITIALIZED__ = true;
  // 1. Mobile Navigation Drawer
  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileDrawer = document.getElementById('mobile-nav-drawer');
  const iconOpen = document.getElementById('mobile-icon-open');
  const iconClose = document.getElementById('mobile-icon-close');

  function closeMobileDrawer() {
    if (!mobileDrawer || !mobileBtn) return;
    mobileDrawer.classList.add('hidden');
    mobileBtn.setAttribute('aria-expanded', 'false');
    if (iconOpen) iconOpen.classList.remove('hidden');
    if (iconClose) iconClose.classList.add('hidden');
  }

  if (mobileBtn && mobileDrawer) {
    mobileBtn.addEventListener('click', () => {
      const isExpanded = mobileBtn.getAttribute('aria-expanded') === 'true';
      if (isExpanded) {
        closeMobileDrawer();
      } else {
        mobileDrawer.classList.remove('hidden');
        mobileBtn.setAttribute('aria-expanded', 'true');
        if (iconOpen) iconOpen.classList.add('hidden');
        if (iconClose) iconClose.classList.remove('hidden');
      }
    });

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
      link.addEventListener('click', closeMobileDrawer);
    });
  }

  // 2. Showcase Interface Tabs + Interactive Jump Buttons
  const tabs = document.querySelectorAll('.showcase-tab');
  const panels = document.querySelectorAll('.showcase-panel');

  function activateShowcaseTab(targetId) {
    tabs.forEach(t => {
      const isMatch = t.dataset.target === targetId;
      t.setAttribute('aria-selected', isMatch ? 'true' : 'false');
      if (isMatch) {
        t.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
        t.classList.remove('text-[#555A6C]');
      } else {
        t.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
        t.classList.add('text-[#555A6C]');
      }
    });

    panels.forEach(p => {
      if (p.id === targetId) {
        p.classList.remove('hidden');
      } else {
        p.classList.add('hidden');
      }
    });
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      activateShowcaseTab(tab.dataset.target);
    });
  });

  // Botões nos cards do Hero que pulam direto para a aba correspondente
  document.querySelectorAll('[data-jump-tab]').forEach(card => {
    card.addEventListener('click', () => {
      activateShowcaseTab(card.dataset.jumpTab);
    });
  });

  // Botão "Chamar na TV" dentro da tela Pro que demonstra a chamada na Smart TV
  const simulateTvBtn = document.getElementById('btn-simulate-tv-call');
  if (simulateTvBtn) {
    simulateTvBtn.addEventListener('click', () => {
      activateShowcaseTab('tab-tv');
    });
  }

  // 3. Pricing Toggle (Mensal / Anual)
  const monthlyBtn = document.getElementById('billing-monthly-btn');
  const annualBtn = document.getElementById('billing-annual-btn');
  const priceDisplays = document.querySelectorAll('.plan-price-display');
  const notes = document.querySelectorAll('.plan-billing-note');
  const checkoutLinks = document.querySelectorAll('.plan-checkout-link');

  let isAnnual = false;

  function updatePricing() {
    if (!monthlyBtn || !annualBtn) return;

    if (isAnnual) {
      monthlyBtn.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
      monthlyBtn.classList.add('text-[#555A6C]');
      annualBtn.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
      annualBtn.classList.remove('text-[#555A6C]');

      priceDisplays.forEach(el => {
        el.textContent = el.dataset.annual;
      });
      notes.forEach(el => {
        el.textContent = 'Ciclo anual com 20% de economia';
      });
      checkoutLinks.forEach(link => {
        const base = link.dataset.baseHref || link.getAttribute('href');
        link.setAttribute('href', `${base}&billing=annual`);
      });
    } else {
      annualBtn.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
      annualBtn.classList.add('text-[#555A6C]');
      monthlyBtn.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
      monthlyBtn.classList.remove('text-[#555A6C]');

      priceDisplays.forEach(el => {
        el.textContent = el.dataset.monthly;
      });
      notes.forEach(el => {
        el.textContent = 'Faturado mensalmente · PIX ou Cartão';
      });
      checkoutLinks.forEach(link => {
        const base = link.dataset.baseHref || link.getAttribute('href');
        link.setAttribute('href', base);
      });
    }
  }

  if (monthlyBtn && annualBtn) {
    monthlyBtn.addEventListener('click', () => {
      isAnnual = false;
      updatePricing();
    });
    annualBtn.addEventListener('click', () => {
      isAnnual = true;
      updatePricing();
    });
  }

  // 4. ROI Simulator Logic + Visual Range Track Progress
  const inputChairs = document.getElementById('input-chairs');
  const inputTicket = document.getElementById('input-ticket');
  const inputClients = document.getElementById('input-clients');
  const inputNoShow = document.getElementById('input-noshow');

  const labelChairs = document.getElementById('label-chairs');
  const labelTicket = document.getElementById('label-ticket');
  const labelClients = document.getElementById('label-clients');
  const labelNoShow = document.getElementById('label-noshow');

  const statLoss = document.getElementById('stat-loss');
  const statRecovery = document.getElementById('stat-recovery');
  const statRoi = document.getElementById('stat-roi');
  const statPlanName = document.getElementById('stat-plan-name');

  function updateSliderProgress(input) {
    if (!input) return;
    const min = Number(input.min) || 0;
    const max = Number(input.max) || 100;
    const val = Number(input.value) || 0;
    const pct = ((val - min) / (max - min)) * 100;
    input.style.setProperty('--range-progress', `${pct}%`);
  }

  function calculateROI() {
    if (!inputChairs || !inputTicket || !inputClients || !inputNoShow) return;

    [inputChairs, inputTicket, inputClients, inputNoShow].forEach(updateSliderProgress);

    const chairs = Number(inputChairs.value);
    const ticket = Number(inputTicket.value);
    const clientsPerDay = Number(inputClients.value);
    const noShowRate = Number(inputNoShow.value) / 100;

    labelChairs.textContent = `${chairs} ${chairs === 1 ? 'cadeira' : 'cadeiras'}`;
    labelTicket.textContent = `R$ ${ticket.toFixed(2).replace('.', ',')}`;
    labelClients.textContent = `${clientsPerDay} clientes`;
    labelNoShow.textContent = `${inputNoShow.value}% de faltas`;

    // 24 dias úteis no mês
    const totalPotentialMonthlyRevenue = chairs * clientsPerDay * 24 * ticket;
    const monthlyLost = totalPotentialMonthlyRevenue * noShowRate;
    const monthlyRecovered = monthlyLost * 0.8;

    // Recomendação inteligente do plano por estrutura
    let planCost = 149;
    let planLabel = 'Vizze Pro · R$ 149/mês';
    if (chairs === 1) {
      planCost = 59;
      planLabel = 'Vizze Solo MEI · R$ 59/mês';
    } else if (chairs === 2) {
      planCost = 99;
      planLabel = 'Vizze Starter · R$ 99/mês';
    } else if (chairs >= 8) {
      planCost = 229;
      planLabel = 'Vizze Enterprise · R$ 229/mês';
    }

    const roiMultiplier = Math.max(2, Math.round(monthlyRecovered / planCost));

    statLoss.textContent = `- R$ ${monthlyLost.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} /mês`;
    statRecovery.innerHTML = `+ R$ ${monthlyRecovered.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} <span class="text-sm font-normal text-white/70">/mês</span>`;
    statRoi.textContent = `${roiMultiplier}x o valor`;
    if (statPlanName) statPlanName.textContent = planLabel;
  }

  [inputChairs, inputTicket, inputClients, inputNoShow].forEach(el => {
    if (el) el.addEventListener('input', calculateROI);
  });

  calculateROI();

  // 5. Legal & LGPD Modal
  const legalModal = document.getElementById('legal-modal');
  const legalTitle = document.getElementById('legal-modal-title');
  const legalBody = document.getElementById('legal-modal-body');
  const legalClose = document.getElementById('legal-modal-close');
  const legalOk = document.getElementById('legal-modal-ok');

  const legalContents = {
    lgpd: {
      title: 'Política de Privacidade & Conformidade LGPD',
      html: `
        <p>Em total conformidade com a <strong>Lei Geral de Proteção de Dados (Lei nº 13.709/2018)</strong>, a Vizze atua como operadora tecnológica dos dados inseridos pelo seu estabelecimento.</p>
        <p><strong>1. Propriedade da Carteira:</strong> Os cadastros de clientes, históricos de serviços e telefones pertencem exclusivamente à sua unidade e nunca são compartilhados com terceiros ou concorrentes.</p>
        <p><strong>2. Finalidade:</strong> Os dados são utilizados unicamente para autenticação, envio de lembretes de agendamento, emissão do Passe Digital e contabilização de pontos VIZ.</p>
        <p><strong>3. Direitos do Titular:</strong> Qualquer usuário pode solicitar a exportação ou exclusão integral de seus dados diretamente no aplicativo ou pelo canal de suporte.</p>
      `
    },
    termos: {
      title: 'Termos de Uso da Plataforma Vizze',
      html: `
        <p><strong>1. Período de Avaliação Gratuita:</strong> Todos os planos contam com 14 dias de teste gratuito, permitindo uso integral das ferramentas contratadas sem cobrança imediata.</p>
        <p><strong>2. Isenção de Fidelidade:</strong> A assinatura é pré-paga (mensal ou anual) e pode ser cancelada a qualquer momento diretamente no painel Vizze Pro, sem multas rescisórias.</p>
        <p><strong>3. Disponibilidade:</strong> A plataforma opera em nuvem com SLA de 99,8% de disponibilidade para os aplicativos Pro, Cliente e Display Smart TV.</p>
      `
    },
    seguranca: {
      title: 'Arquitetura de Segurança & Proteção',
      html: `
        <p><strong>1. Criptografia Ponta a Ponta:</strong> Todas as conexões entre o navegador, a Smart TV e a API REST utilizam HTTPS com TLS 1.3 (SSL 256-bit).</p>
        <p><strong>2. Controle de Acesso (RBAC):</strong> A API valida tokens JWT assinados a cada requisição, garantindo isolamento estrito entre proprietários, recepcionistas, profissionais e clientes.</p>
        <p><strong>3. Credenciais Seguras:</strong> Senhas são armazenadas exclusivamente com hash criptográfico irreversível (bcrypt) e sessões de Smart TV utilizam tokens de pareamento dedicados.</p>
      `
    }
  };

  function closeLegalModal() {
    if (legalModal) legalModal.classList.add('hidden');
  }

  document.querySelectorAll('[data-legal-open]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const key = btn.dataset.legalOpen;
      const content = legalContents[key] || legalContents.lgpd;
      if (legalTitle && legalBody && legalModal) {
        legalTitle.textContent = content.title;
        legalBody.innerHTML = content.html;
        legalModal.classList.remove('hidden');
      }
    });
  });

  if (legalClose) legalClose.addEventListener('click', closeLegalModal);
  if (legalOk) legalOk.addEventListener('click', closeLegalModal);
  if (legalModal) {
    legalModal.addEventListener('click', (e) => {
      if (e.target === legalModal) closeLegalModal();
    });
  }
});
