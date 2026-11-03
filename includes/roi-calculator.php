<!-- SIMULADOR INTERATIVO DE RETORNO SOBRE O INVESTIMENTO (ROI) -->
<section id="simulador" class="py-16 md:py-24 bg-vizze-canvas border-b border-vizze-divider relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <div class="eyebrow-tag justify-center mb-3">
        <span class="eyebrow-num">02</span>
        <span>Calculadora de Retorno</span>
      </div>
      <h2 class="text-3xl sm:text-5xl font-bold text-vizze-ink font-heading leading-tight">
        Quanto o seu negócio perde com <br class="hidden sm:inline">
        <em class="font-editorial font-normal italic text-vizze-indigo">faltas e horários vazios</em>?
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3 leading-relaxed">
        Ajuste os controles à realidade do seu salão e veja quanto faturamento a confirmação automática recupera todos os meses.
      </p>
    </div>

    <div class="max-w-5xl mx-auto bg-vizze-surface p-6 sm:p-10 rounded-3xl border border-vizze-divider shadow-lg grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
      
      <!-- Controles / Sliders (7 colunas) -->
      <div class="lg:col-span-7 space-y-6">
        <!-- Controle 1: Cadeiras -->
        <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider/70">
          <div class="flex justify-between items-center mb-2 text-xs sm:text-sm font-semibold text-vizze-ink">
            <label for="input-chairs">Cadeiras ou profissionais em atendimento</label>
            <span id="label-chairs" class="text-xs font-bold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md tabular-nums">3 cadeiras</span>
          </div>
          <input type="range" id="input-chairs" min="1" max="10" value="3" step="1" class="vz-range" style="--range-progress: 22%;">
          <div class="flex justify-between text-[11px] text-[#737080] mt-1 tabular-nums">
            <span>1 (Solo MEI)</span>
            <span>5 cadeiras</span>
            <span>10+ cadeiras</span>
          </div>
        </div>

        <!-- Controle 2: Ticket Médio -->
        <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider/70">
          <div class="flex justify-between items-center mb-2 text-xs sm:text-sm font-semibold text-vizze-ink">
            <label for="input-ticket">Ticket médio por atendimento</label>
            <span id="label-ticket" class="text-xs font-bold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md tabular-nums">R$ 80,00</span>
          </div>
          <input type="range" id="input-ticket" min="40" max="200" value="80" step="5" class="vz-range" style="--range-progress: 25%;">
          <div class="flex justify-between text-[11px] text-[#737080] mt-1 tabular-nums">
            <span>R$ 40</span>
            <span>R$ 120</span>
            <span>R$ 200</span>
          </div>
        </div>

        <!-- Controle 3: Atendimentos por dia -->
        <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider/70">
          <div class="flex justify-between items-center mb-2 text-xs sm:text-sm font-semibold text-vizze-ink">
            <label for="input-clients">Atendimentos por cadeira / dia</label>
            <span id="label-clients" class="text-xs font-bold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md tabular-nums">7 clientes</span>
          </div>
          <input type="range" id="input-clients" min="3" max="15" value="7" step="1" class="vz-range" style="--range-progress: 33%;">
          <div class="flex justify-between text-[11px] text-[#737080] mt-1 tabular-nums">
            <span>3 por dia</span>
            <span>9 por dia</span>
            <span>15 por dia</span>
          </div>
        </div>

        <!-- Controle 4: Taxa de faltas sem Vizze -->
        <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider/70">
          <div class="flex justify-between items-center mb-2 text-xs sm:text-sm font-semibold text-vizze-ink">
            <label for="input-noshow">Taxa estimada de faltas e atrasos sem confirmação</label>
            <span id="label-noshow" class="text-xs font-bold text-vizze-error bg-[#FDE8EC] px-2.5 py-1 rounded-md tabular-nums">15% de faltas</span>
          </div>
          <input type="range" id="input-noshow" min="5" max="30" value="15" step="1" class="vz-range vz-range-danger" style="--range-progress: 40%;">
          <div class="flex justify-between text-[11px] text-[#737080] mt-1 tabular-nums">
            <span>5% (baixa)</span>
            <span>15% (média nacional)</span>
            <span>30% (crítica)</span>
          </div>
        </div>
      </div>

      <!-- Card de Resultados em Tempo Real (5 colunas) -->
      <div class="lg:col-span-5 bg-vizze-ink text-white p-6 sm:p-8 rounded-2xl border border-white/10 space-y-6 shadow-xl relative overflow-hidden">
        <!-- Faixa superior de perda atual -->
        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
          <span class="text-[11px] uppercase font-bold tracking-wider text-white/70 block mb-1">
            Faturamento perdido com horários vazios
          </span>
          <div id="stat-loss" class="text-2xl sm:text-3xl font-bold text-[#FF9B9B] font-heading tabular-nums">
            - R$ 6.048,00 /mês
          </div>
          <small class="text-xs text-white/60 block mt-1">Valor que deixa de entrar no caixa sem confirmação ativa.</small>
        </div>

        <!-- Destaque principal: Lucro Recuperado -->
        <div>
          <span class="inline-block text-[11px] uppercase font-bold tracking-wider text-vizze-teal bg-vizze-mint px-2.5 py-0.5 rounded mb-2">
            ✓ Receita recuperada com o Vizze
          </span>
          <div id="stat-recovery" class="text-3xl sm:text-4xl font-bold text-white font-heading tabular-nums">
            + R$ 4.838,40 <span class="text-sm font-normal text-white/70">/mês</span>
          </div>
          <small class="text-xs text-white/75 block mt-1.5 leading-relaxed">
            Com lembretes automáticos via WhatsApp, botão de confirmação e divulgação de vagas nos Stories 24h.
          </small>
        </div>

        <!-- Plano recomendado + ROI -->
        <div class="pt-4 border-t border-white/15 flex justify-between items-center gap-2">
          <div>
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">Plano Ideal</span>
            <strong id="stat-plan-name" class="text-xs sm:text-sm text-vizze-mint font-bold">Vizze Pro · R$ 149/mês</strong>
          </div>
          <div class="text-right">
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">Retorno sobre o plano</span>
            <strong id="stat-roi" class="inline-block text-sm font-bold text-vizze-ink bg-vizze-coral px-3 py-1 rounded-md tabular-nums mt-0.5">32x o valor</strong>
          </div>
        </div>

        <div class="pt-1">
          <a href="#planos" id="stat-plan-cta" class="vz-btn vz-btn-primary w-full">
            <span>Recuperar meu Faturamento</span>
            <span class="button-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
            </span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
