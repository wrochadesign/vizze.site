<!-- SIMULADOR INTERATIVO DE RETORNO SOBRE O INVESTIMENTO (ROI) -->
<section id="simulador" class="py-20 md:py-28 bg-vizze-canvas border-b border-vizze-divider relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-vizze-teal bg-emerald-50 border border-emerald-200/80 px-3.5 py-1.5 rounded-full shadow-sm">
        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
        Simulador de Lucro Real
      </span>
      <h2 class="text-3xl sm:text-5xl font-black text-vizze-ink font-heading tracking-tight mt-4">
        Quanto o seu negócio perde com <br class="hidden sm:inline">
        <em class="font-editorial font-normal italic text-vizze-indigo">faltas e horários vazios</em>?
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3">
        Mova os controles abaixo e veja na prática o impacto da confirmação automática e do Display Smart TV no seu caixa.
      </p>
    </div>

    <div class="max-w-4xl mx-auto bg-vizze-surface p-6 sm:p-10 rounded-3xl border border-vizze-divider shadow-xl grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      
      <!-- Controles / Sliders -->
      <div class="space-y-6">
        <!-- Controle 1: Cadeiras -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Cadeiras / Profissionais em atendimento:</span>
            <span id="label-chairs" class="text-xs font-extrabold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md">3 cadeiras</span>
          </div>
          <input type="range" id="input-chairs" min="1" max="10" value="3" step="1" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 2: Ticket Médio -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Ticket Médio por Atendimento:</span>
            <span id="label-ticket" class="text-xs font-extrabold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md">R$ 80,00</span>
          </div>
          <input type="range" id="input-ticket" min="40" max="200" value="80" step="5" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 3: Atendimentos por dia -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Atendimentos por Cadeira / Dia:</span>
            <span id="label-clients" class="text-xs font-extrabold text-vizze-indigo bg-vizze-lavender px-2.5 py-1 rounded-md">7 clientes</span>
          </div>
          <input type="range" id="input-clients" min="3" max="15" value="7" step="1" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 4: Taxa de faltas sem Vizze -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Taxa estimada de faltas e no-show:</span>
            <span id="label-noshow" class="text-xs font-extrabold text-[#B4233C] bg-[#FDE8E8] px-2.5 py-1 rounded-md">15% de faltas</span>
          </div>
          <input type="range" id="input-noshow" min="5" max="30" value="15" step="1" class="w-full accent-[#B4233C] h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>
      </div>

      <!-- Card de Resultados em Tempo Real -->
      <div class="bg-gradient-to-br from-[#121426] via-[#1A1C30] to-[#121426] text-white p-6 sm:p-8 rounded-2xl border border-white/10 space-y-5 shadow-2xl relative overflow-hidden">
        <!-- Glow suave de fundo -->
        <div class="absolute -top-12 -right-12 w-40 h-40 bg-vizze-indigo/20 rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative z-10">
          <span class="text-[10px] uppercase font-bold tracking-widest text-[#FF806B] block mb-1">
            Prejuízo estimado com faltas
          </span>
          <div id="stat-loss" class="text-2xl sm:text-3xl font-black text-[#FF806B] font-heading tracking-tight">
            - R$ 6.048,00 /mês
          </div>
          <small class="text-xs text-white/60">Faturamento que evapora todos os meses sem confirmação ativa.</small>
        </div>

        <div class="pt-4 border-t border-white/10 relative z-10">
          <span class="text-[10px] uppercase font-bold tracking-widest text-vizze-mint block mb-1">
            Lucro recuperado com o Vizze
          </span>
          <div id="stat-recovery" class="text-3xl sm:text-4xl font-black text-white font-heading tracking-tight">
            + R$ 4.838,00 <span class="text-xs font-normal text-white/70">/mês</span>
          </div>
          <small class="text-xs text-white/70 block mt-1">Estimativa de 80% das faltas recuperadas via WhatsApp e fila inteligente.</small>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-between items-center relative z-10">
          <div>
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">Plano Sugerido</span>
            <strong class="text-xs sm:text-sm text-vizze-mint font-semibold">Vizze Pro · R$ 149/mês</strong>
          </div>
          <div class="text-right">
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">Retorno Estimado</span>
            <strong id="stat-roi" class="text-base font-extrabold text-white bg-vizze-indigo px-3 py-1 rounded-lg">32x</strong>
          </div>
        </div>

        <div class="pt-2 relative z-10">
          <a href="#planos" class="vz-btn vz-btn-primary w-full text-center">
            <span>Começar a Recuperar este Faturamento</span>
            <span class="button-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
            </span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
