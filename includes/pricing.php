<?php
require_once __DIR__ . '/config.php';
$plans = getSaaSPlans();
?>
<!-- TABELA OFICIAL DE PLANOS & PREÇOS (PRICING) -->
<section id="planos" class="py-16 md:py-24 bg-vizze-surface border-b border-vizze-divider relative">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <div class="eyebrow-tag justify-center mb-3">
        <span class="eyebrow-num">03</span>
        <span>Planos Claros & Sem Fidelidade</span>
      </div>
      <h2 class="text-3xl sm:text-5xl font-bold text-vizze-ink font-heading leading-tight">
        Escolha o plano ideal para o <em class="font-editorial font-normal italic text-vizze-indigo">momento do seu negócio.</em>
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3 leading-relaxed">
        14 dias de teste grátis em qualquer plano. Sem taxa de implantação e com cancelamento livre a qualquer momento.
      </p>

      <!-- Toggle Mensal / Anual -->
      <div class="mt-8 inline-flex flex-wrap justify-center items-center p-1.5 bg-[#EDEAE3] rounded-2xl border border-vizze-divider gap-1 max-w-full" role="group" aria-label="Periodicidade de cobrança">
        <button type="button" id="billing-monthly-btn" class="px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all bg-white text-vizze-indigo shadow-sm">
          Cobrança Mensal
        </button>
        <button type="button" id="billing-annual-btn" class="px-4 sm:px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-[#555A6C] hover:text-vizze-ink flex items-center gap-1.5 sm:gap-2">
          <span>Cobrança Anual</span>
          <span class="bg-vizze-mint text-vizze-teal text-[10px] font-bold px-2 py-0.5 rounded-full whitespace-nowrap">-20% OFF</span>
        </button>
      </div>
    </div>

    <!-- Grid de Planos (4 colunas perfeitamente alinhadas) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto items-stretch">
      <?php foreach ($plans as $key => $p): ?>
        <article class="flex flex-col justify-between rounded-2xl transition-all p-6 relative <?= $p['popular'] ? 'border-2 border-vizze-indigo bg-gradient-to-b from-white via-[#FAF9FF] to-[#F3F1FF] shadow-xl' : 'border border-vizze-divider bg-vizze-surface hover:border-[#C7C3EF] shadow-xs' ?>">
          
          <div>
            <!-- Linha 1: Badge de Identificação (Altura uniforme em todos os 4 cards) -->
            <div class="flex items-center justify-between gap-2 h-7 mb-3">
              <?php if ($p['popular']): ?>
                <span class="inline-flex items-center gap-1.5 bg-vizze-indigo text-white text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-md whitespace-nowrap">
                  <span>★ <?= htmlspecialchars($p['badge']) ?></span>
                </span>
                <span class="text-[11px] font-bold text-vizze-indigo whitespace-nowrap">Recomendado</span>
              <?php else: ?>
                <span class="inline-flex items-center text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md whitespace-nowrap <?= $p['color'] === 'sand' ? 'bg-vizze-sand text-vizze-warning' : ($p['color'] === 'mint' ? 'bg-vizze-mint text-vizze-teal' : 'bg-vizze-lavender text-vizze-indigo') ?>">
                  <?= htmlspecialchars($p['badge']) ?>
                </span>
              <?php endif; ?>
            </div>

            <!-- Linha 2: Nome e Subtítulo (Altura uniforme para alinhar a caixa de preço) -->
            <div class="min-h-[108px]">
              <h3 class="text-xl font-bold text-vizze-ink font-heading leading-snug"><?= htmlspecialchars($p['name']) ?></h3>
              <p class="text-xs font-semibold text-vizze-indigo mt-0.5"><?= htmlspecialchars($p['subtitle']) ?></p>
              <p class="text-xs text-[#626778] mt-2 leading-relaxed"><?= htmlspecialchars($p['headline']) ?></p>
            </div>

            <!-- Linha 3: Preço Tabular Alinhado -->
            <div class="py-4 my-5 border-y border-vizze-divider/80">
              <div class="flex items-baseline gap-1 tabular-nums">
                <span class="text-xs font-bold text-[#626778]">R$</span>
                <span class="text-4xl font-bold font-heading text-vizze-ink plan-price-display" data-monthly="<?= $p['monthly_price'] ?>" data-annual="<?= $p['annual_price'] ?>">
                  <?= $p['monthly_price'] ?>
                </span>
                <span class="text-xs font-medium text-[#626778]">/mês</span>
              </div>
              <small class="text-[11px] text-[#626778] block mt-1 plan-billing-note">Faturado mensalmente · PIX ou Cartão</small>
            </div>

            <!-- Linha 4: Lista de Recursos -->
            <ul class="space-y-2.5 text-xs text-[#3F4454] mb-6">
              <?php foreach ($p['features'] as $feat): ?>
                <li class="flex items-start gap-2.5">
                  <svg class="w-4 h-4 text-vizze-teal shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"><polyline points="20 6 9 17 4 12"/></svg>
                  <span class="leading-snug"><?= htmlspecialchars($feat) ?></span>
                </li>
              <?php endforeach; ?>

              <?php foreach ($p['limitations'] as $lim): ?>
                <li class="flex items-start gap-2.5 text-[#8A8F9E]">
                  <svg class="w-4 h-4 text-[#B8BBC6] shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                  <span class="leading-snug line-through"><?= htmlspecialchars($lim) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <!-- Botão CTA do Plano com padrão Vizze Signature -->
          <div class="pt-2">
            <a
              href="/checkout/?plan=<?= $p['checkout_param'] ?>"
              data-base-href="/checkout/?plan=<?= $p['checkout_param'] ?>"
              class="plan-checkout-link vz-btn <?= $p['popular'] ? 'vz-btn-primary' : 'vz-btn-secondary' ?> w-full"
            >
              <span><?= htmlspecialchars($p['cta']) ?></span>
              <span class="button-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
              </span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Barra de Confiança & Garantias -->
    <div class="mt-12 pt-8 border-t border-vizze-divider/70 text-xs text-[#555A6C] flex flex-wrap justify-center items-center gap-x-8 gap-y-3">
      <span class="inline-flex items-center gap-2 font-medium">
        <svg class="w-4 h-4 text-vizze-indigo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        Ambiente Criptografado SSL 256-bit
      </span>
      <span class="inline-flex items-center gap-2 font-medium">
        <svg class="w-4 h-4 text-vizze-teal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
        Upgrade ou downgrade em 1 clique
      </span>
      <span class="inline-flex items-center gap-2 font-medium">
        <svg class="w-4 h-4 text-vizze-indigo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        Suporte comercial brasileiro no WhatsApp
      </span>
    </div>
  </div>
</section>
