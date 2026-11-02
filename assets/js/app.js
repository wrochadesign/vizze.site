/**
 * Vizze Public Site - Interactive Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Showcase Interface Tabs
  const tabs = document.querySelectorAll('.showcase-tab');
  const panels = document.querySelectorAll('.showcase-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetId = tab.dataset.target;
      
      // Update Tab Styles
      tabs.forEach(t => {
        t.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
        t.classList.add('text-[#626778]');
      });
      tab.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
      tab.classList.remove('text-[#626778]');

      // Show Selected Panel
      panels.forEach(p => p.classList.add('hidden'));
      const targetPanel = document.getElementById(targetId);
      if (targetPanel) {
        targetPanel.classList.remove('hidden');
      }
    });
  });

  // 2. Pricing Toggle (Mensal / Anual)
  const monthlyBtn = document.getElementById('billing-monthly-btn');
  const annualBtn = document.getElementById('billing-annual-btn');
  const priceDisplays = document.querySelectorAll('.plan-price-display');
  const notes = document.querySelectorAll('.plan-billing-note');

  let isAnnual = false;

  function updatePricing() {
    if (isAnnual) {
      monthlyBtn.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
      monthlyBtn.classList.add('text-[#626778]');
      annualBtn.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
      annualBtn.classList.remove('text-[#626778]');

      priceDisplays.forEach(el => {
        el.textContent = el.dataset.annual;
      });
      notes.forEach(el => {
        el.textContent = 'Cobrança anual com 20% de desconto';
      });
    } else {
      annualBtn.classList.remove('bg-white', 'text-vizze-indigo', 'shadow-sm');
      annualBtn.classList.add('text-[#626778]');
      monthlyBtn.classList.add('bg-white', 'text-vizze-indigo', 'shadow-sm');
      monthlyBtn.classList.remove('text-[#626778]');

      priceDisplays.forEach(el => {
        el.textContent = el.dataset.monthly;
      });
      notes.forEach(el => {
        el.textContent = 'Cobrança mensal no cartão ou PIX';
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

  // 3. ROI Simulator Logic
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

  function calculateROI() {
    if (!inputChairs || !inputTicket || !inputClients || !inputNoShow) return;

    const chairs = Number(inputChairs.value);
    const ticket = Number(inputTicket.value);
    const clientsPerDay = Number(inputClients.value);
    const noShowRate = Number(inputNoShow.value) / 100;

    // Labels
    labelChairs.textContent = `${chairs} ${chairs === 1 ? 'cadeira' : 'cadeiras'}`;
    labelTicket.textContent = `R$ ${ticket.toFixed(2).replace('.', ',')}`;
    labelClients.textContent = `${clientsPerDay} clientes`;
    labelNoShow.textContent = `${inputNoShow.value}% de faltas`;

    // 24 dias úteis no mês
    const totalPotentialMonthlyRevenue = chairs * clientsPerDay * 24 * ticket;
    const monthlyLost = totalPotentialMonthlyRevenue * noShowRate;
    
    // Vizze recupera ~80% das faltas e horários vagos com Stories 24h + WhatsApp
    const monthlyRecovered = monthlyLost * 0.8;

    // ROI baseado no plano Pro (R$ 149/mês)
    const costVizzePro = 149;
    const roiMultiplier = Math.max(1, Math.round(monthlyRecovered / costVizzePro));

    statLoss.textContent = `- R$ ${monthlyLost.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} /mês`;
    statRecovery.innerHTML = `+ R$ ${monthlyRecovered.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })} <span class="text-sm font-normal text-white/70">/mês</span>`;
    statRoi.textContent = `${roiMultiplier}x`;
  }

  [inputChairs, inputTicket, inputClients, inputNoShow].forEach(el => {
    if (el) el.addEventListener('input', calculateROI);
  });

  calculateROI();
});
