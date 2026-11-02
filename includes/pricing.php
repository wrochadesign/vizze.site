<?php
require_once __DIR__ . '/config.php';
$plans = getSaaSPlans();
?>
<!-- TABELA OFICIAL DE PLANOS & PREÇOS (PRICING) -->
<section id="planos" class="py-16 md:py-24 bg-vizze-surface border-b border-vizze-divider">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-10">
      <span class="text-xs font-bold uppercase tracking-widest text-vizze-indigo bg-vizze-lavender px-3 py-1 rounded-full">
        PLANOS TRANSPARENTES
      </span>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-vizze-ink font-heading mt-3">
        Escolha o plano ideal para a sua estrutura.
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3">
        Sem taxas surpresa de adesão. 14 dias de teste grátis em todos os planos. Cancele quando quiser.
      </p>

      <!-- Toggle Mensal / Anual -->
      <div class="mt-8 inline-flex items-center gap-3 bg-vizze-canvas p-1.5 rounded-2xl border border-vizze-divider">
        <button type="button" id="billing-monthly-btn" class="px-4 py-2 rounded-xl text-xs font-bold transition-all bg-white text-vizze-indigo shadow-sm">
          Cobrança Mensal
        </button>
        <button type="button" id="billing-annual-btn" class="px-4 py-2 rounded-xl text-xs font-bold transition-all text-[#626778] hover:text-vizze-ink flex items-center gap-1.5">
          <span>Cobrança Anual</span>
          <span class="bg-[#DCEEE7] text-[#176451] text-[10px] font-extrabold px-2 py-0.5 rounded-full">ECONOMIZE 20%</span>
        </button>
      </div>
    </div>

    <!-- Grid de Planos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto items-stretch">
      <?php foreach ($plans as $key => $p): ?>
        <article class="flex flex-col justify-between rounded-3xl border transition-all p-6 sm:p-7 <?= $p['popular'] ? 'border-vizze-indigo bg-gradient-to-b from-[#FFF] to-[#F7F6FF] shadow-xl ring-2 ring-vizze-indigo relative scale-[1.02]' : 'border-vizze-divider bg-white hover:border-[#CEC6EF] shadow-sm' ?>">
          
          <?php if ($p['popular']): ?>
            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-vizze-indigo text-white text-[11px] font-extrabold uppercase tracking-wider px-3.5 py-1 rounded-full shadow">
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

          <!-- Botão CTA do Plano -->
          <a
            href="/checkout/?plan=<?= $p['checkout_param'] ?>"
            class="w-full text-center py-3.5 px-4 rounded-xl text-xs sm:text-sm font-bold transition-all block <?= $p['popular'] ? 'bg-vizze-indigo hover:bg-vizze-indigoHover text-white shadow-md hover:shadow-indigo-500/25' : 'bg-vizze-canvas hover:bg-vizze-lavender text-vizze-ink border border-vizze-divider hover:text-vizze-indigo' ?>"
          >
            <?= $p['cta'] ?> →
          </a>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Garantia e Suporte -->
    <div class="mt-12 text-center text-xs text-[#737080] flex flex-wrap justify-center items-center gap-6">
      <span>🔒 Checkout Seguro criptografado via Stripe</span>
      <span>⚡ Ativação instantânea da sua barbearia ou clínica</span>
      <span>💬 Suporte dedicado com consultor brasileiro</span>
    </div>
  </div>
</section>
