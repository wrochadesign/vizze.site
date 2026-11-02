<!-- SIMULADOR INTERATIVO DE RETORNO SOBRE O INVESTIMENTO (ROI) -->
<section id="simulador" class="py-16 md:py-24 bg-vizze-canvas border-b border-vizze-divider">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="text-xs font-bold uppercase tracking-widest text-[#176451] bg-[#DCEEE7] px-3 py-1 rounded-full">
        SIMULADOR DE LUCRO REAL
      </span>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-vizze-ink font-heading mt-3">
        Quanto o seu negócio perde com faltas e cadeiras vazias?
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3">
        Mova os controles abaixo e veja exatamente quanto o Vizze recupera no seu faturamento todos os meses.
      </p>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-6 sm:p-10 rounded-3xl border border-vizze-divider shadow-xl grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      
      <!-- Controles / Sliders -->
      <div class="space-y-6">
        <!-- Controle 1: Cadeiras -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Número de Cadeiras / Profissionais:</span>
            <span id="label-chairs" class="text-sm font-extrabold text-vizze-indigo bg-vizze-lavender px-2 py-0.5 rounded">3 cadeiras</span>
          </div>
          <input type="range" id="input-chairs" min="1" max="10" value="3" step="1" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 2: Ticket Médio -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Ticket Médio por Atendimento:</span>
            <span id="label-ticket" class="text-sm font-extrabold text-vizze-indigo bg-vizze-lavender px-2 py-0.5 rounded">R$ 80,00</span>
          </div>
          <input type="range" id="input-ticket" min="40" max="200" value="80" step="5" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 3: Atendimentos por dia -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Atendimentos por Cadeira / Dia:</span>
            <span id="label-clients" class="text-sm font-extrabold text-vizze-indigo bg-vizze-lavender px-2 py-0.5 rounded">7 clientes</span>
          </div>
          <input type="range" id="input-clients" min="3" max="15" value="7" step="1" class="w-full accent-vizze-indigo h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>

        <!-- Controle 4: Taxa de faltas sem Vizze -->
        <div>
          <div class="flex justify-between items-center mb-2 text-xs font-bold text-vizze-ink">
            <span>Faltas e Cancelamentos sem confirmação:</span>
            <span id="label-noshow" class="text-sm font-extrabold text-[#B4233C] bg-[#FDE8E8] px-2 py-0.5 rounded">15% de faltas</span>
          </div>
          <input type="range" id="input-noshow" min="5" max="30" value="15" step="1" class="w-full accent-[#B4233C] h-2 bg-[#EDEAE3] rounded-lg cursor-pointer">
        </div>
      </div>

      <!-- Card de Resultados em Tempo Real -->
      <div class="bg-gradient-to-br from-[#121426] to-[#202235] text-white p-6 sm:p-8 rounded-2xl border border-white/10 space-y-5 shadow-inner">
        <div>
          <span class="text-[10px] uppercase font-bold tracking-widest text-[#B4233C] block mb-1">
            PREJUÍZO ATUAL COM HORÁRIOS VAZIOS
          </span>
          <div id="stat-loss" class="text-2xl sm:text-3xl font-extrabold text-[#FF806B] font-mono">
            - R$ 6.048,00 /mês
          </div>
          <small class="text-xs text-white/60">Dinheiro que deixa de entrar na sua conta hoje.</small>
        </div>

        <div class="pt-4 border-t border-white/10">
          <span class="text-[10px] uppercase font-bold tracking-widest text-vizze-mint block mb-1">
            LUCRO EXTRA RECUPERADO COM O VIZZE
          </span>
          <div id="stat-recovery" class="text-3xl sm:text-4xl font-extrabold text-white font-mono">
            + R$ 4.838,00 <span class="text-sm font-normal text-white/70">/mês</span>
          </div>
          <small class="text-xs text-white/70 block mt-1">Preenchimento de vagas com Stories 24h + confirmação WhatsApp.</small>
        </div>

        <div class="pt-4 border-t border-white/10 flex justify-between items-center">
          <div>
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">PLANO RECOMENDADO</span>
            <strong class="text-sm text-vizze-mint">Vizze Pro · R$ 149/mês</strong>
          </div>
          <div class="text-right">
            <span class="text-[10px] uppercase tracking-wider text-white/60 block">RETORNO ESTIMADO (ROI)</span>
            <strong id="stat-roi" class="text-lg font-bold text-white bg-vizze-indigo px-3 py-1 rounded-lg">32x</strong>
          </div>
        </div>

        <a href="#planos" class="w-full bg-vizze-indigo hover:bg-vizze-indigoHover text-white text-center text-sm font-bold py-3 px-4 rounded-xl block transition-all">
          Começar a Recuperar este Faturamento →
        </a>
      </div>

    </div>
  </div>
</section>
