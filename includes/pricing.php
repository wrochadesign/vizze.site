<?php
require_once __DIR__ . '/config.php';
$plans = getSaaSPlans();
?>
<!-- TABELA OFICIAL DE PLANOS & PREÇOS (PRICING) -->
<section id="planos" class="py-20 md:py-28 bg-vizze-surface border-b border-vizze-divider relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-vizze-indigo bg-vizze-lavender px-3.5 py-1.5 rounded-full shadow-sm">
        Planos Claros & Previsíveis
      </span>
      <h2 class="text-3xl sm:text-5xl font-black text-vizze-ink font-heading tracking-tight mt-4">
        Escolha o plano ideal para a sua estrutura.
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3">
        Sem taxas surpresa de implantação. <em class="font-editorial italic font-normal text-vizze-ink">14 dias de teste grátis em todos os planos.</em> Cancele a qualquer momento.
      </p>

      <!-- Toggle Mensal / Anual -->
      <div class="mt-8 inline-flex items-center gap-2 bg-vizze-canvas p-1.5 rounded-2xl border border-vizze-divider shadow-inner">
        <button type="button" id="billing-monthly-btn" class="px-5 py-2.5 rounded-xl text-xs font-bold transition-all bg-white text-vizze-indigo shadow-sm border border-vizze-divider">
          Cobrança Mensal
        </button>
        <button type="button" id="billing-annual-btn" class="px-5 py-2.5 rounded-xl text-xs font-bold transition-all text-[#626778] hover:text-vizze-ink flex items-center gap-2">
          <span>Cobrança Anual</span>
          <span class="bg-[#DCEEE7] text-[#176451] text-[10px] font-extrabold px-2 py-0.5 rounded-full">ECONOMIZE 20%</span>
        </button>
      </div>
    </div>

    <!-- Grid de Planos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto items-stretch">
      <?php foreach ($plans as $key => $p): ?>
        <article class="flex flex-col justify-between rounded-3xl transition-all p-6 sm:p-7 <?= $p['popular'] ? 'border-2 border-vizze-indigo bg-gradient-to-b from-white via-[#FAF9FF] to-[#F3F0FF] shadow-2xl relative scale-[1.02] z-10' : 'border border-vizze-divider bg-white hover:border-[#CEC6EF] shadow-sm hover:shadow-md' ?>">
          
          <?php if ($p['popular']): ?>
            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-vizze-indigo text-white text-[10px] font-extrabold uppercase tracking-wider px-3.5 py-1 rounded-full shadow-md flex items-center gap-1.5">
              <span class="w-1.5 h-1.5 rounded-full bg-vizze-mint animate-pulse"></span>
              <?= $p['badge'] ?>
            </div>
          <?php else: ?>
            <div class="text-[10px] font-bold uppercase tracking-wider text-[#737080] mb-1">
              <?= $p['badge'] ?>
            </div>
          <?php endif; ?>

          <div>
            <h3 class="text-xl font-extrabold text-vizze-ink font-heading <?= $p['popular'] ? 'mt-2' : '' ?>"><?= $p['name'] ?></h3>
            <p class="text-xs text-[#626778] mt-1.5 mb-5 leading-relaxed min-h-[36px]"><?= $p['headline'] ?></p>

            <div class="py-4 border-y border-[#F0EDE7] mb-6">
              <div class="flex items-baseline gap-1">
                <span class="text-xs font-bold text-[#8A8F9E]">R$</span>
                <span class="text-4xl font-black font-heading text-vizze-ink plan-price-display" data-monthly="<?= $p['monthly_price'] ?>" data-annual="<?= $p['annual_price'] ?>">
                  <?= $p['monthly_price'] ?>
                </span>
                <span class="text-xs text-[#8A8F9E]">/mês</span>
              </div>
              <small class="text-[10px] text-[#737080] block mt-1 plan-billing-note">Cobrança mensal no cartão ou PIX</small>
            </div>

            <!-- Lista de Recursos -->
            <ul class="space-y-2.5 text-xs text-[#444857] mb-6">
              <?php foreach ($p['features'] as $feat): ?>
                <li class="flex items-start gap-2">
                  <svg class="w-4 h-4 text-vizze-indigo shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><?= htmlspecialchars($feat) ?></span>
                </li>
              <?php endforeach; ?>

              <?php foreach ($p['limitations'] as $lim): ?>
                <li class="flex items-start gap-2 text-[#9A9BA8] line-through">
                  <svg class="w-4 h-4 text-[#C4C4CE] shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                  <span><?= htmlspecialchars($lim) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Botão CTA do Plano com padrão Vizze Signature -->
          <div class="pt-2">
            <a
              href="/checkout/?plan=<?= $p['checkout_param'] ?>"
              class="vz-btn <?= $p['popular'] ? 'vz-btn-primary' : 'vz-btn-secondary' ?> w-full text-center"
            >
              <span><?= $p['cta'] ?></span>
              <span class="button-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
              </span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Garantia e Suporte -->
    <div class="mt-14 text-center text-xs text-[#737080] flex flex-wrap justify-center items-center gap-6">
      <span class="flex items-center gap-1.5">🔒 Checkout Seguro criptografado via Stripe</span>
      <span class="flex items-center gap-1.5">⚡ Ativação instantânea do seu ambiente</span>
      <span class="flex items-center gap-1.5">💬 Suporte humanizado dedicado no WhatsApp</span>
    </div>
  </div>
</section>
