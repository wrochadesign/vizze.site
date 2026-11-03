<!-- LIVE SHOWCASE: AS 3 PONTAS CONECTADAS EM TEMPO REAL -->
<section id="como-funciona" class="py-16 md:py-24 bg-vizze-surface border-y border-vizze-divider relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="text-xs font-bold uppercase tracking-widest text-vizze-indigo bg-vizze-lavender px-3 py-1 rounded-full">
        O TRIO QUE CONECTA SEU NEGÓCIO
      </span>
      <h2 class="text-3xl sm:text-5xl font-extrabold text-vizze-ink font-heading mt-3">
        Tudo acontece em sincronia imediata.
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3">
        Veja como o aplicativo do seu cliente, a TV da sua recepção e a grade da sua equipe conversam em tempo real sem você precisar digitar nada duas vezes.
      </p>
    </div>

    <!-- Interface Selector Tabs -->
    <div class="flex justify-center mb-10">
      <div class="inline-flex p-1.5 rounded-2xl bg-[#EDEAE3] border border-vizze-divider gap-1 shadow-inner" role="tablist">
        <button type="button" class="showcase-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all bg-white text-vizze-indigo shadow-sm" data-target="tab-pro">
          1. Workspace Pro (Grade & Gestão)
        </button>
        <button type="button" class="showcase-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-[#626778] hover:text-vizze-ink" data-target="tab-tv">
          2. Smart TV & Totem (Recepção)
        </button>
        <button type="button" class="showcase-tab px-5 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-[#626778] hover:text-vizze-ink" data-target="tab-client">
          3. App do Cliente (Passe Digital)
        </button>
      </div>
    </div>

    <!-- Showcase Container -->
    <div class="max-w-5xl mx-auto">

      <!-- SCREEN 1: BROWSER MOCKUP DO VIZZE PRO -->
      <div id="tab-pro" class="showcase-panel browser-mockup">
        <!-- Browser Top Bar -->
        <div class="browser-header flex items-center justify-between">
          <div class="flex items-center gap-2">
            <span class="browser-dot bg-[#FF5F56]"></span>
            <span class="browser-dot bg-[#FFBD2E]"></span>
            <span class="browser-dot bg-[#27C93F]"></span>
          </div>
          <div class="bg-white/80 border border-vizze-divider px-4 py-1 rounded-lg text-[11px] font-mono text-[#626778] flex items-center gap-1.5 shadow-xs">
            <svg class="w-3 h-3 text-[#176451]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span>pro.vizze.wrocha.com/agenda</span>
          </div>
          <span class="text-[11px] font-bold text-vizze-indigo bg-vizze-lavender px-2 py-0.5 rounded">Vizze Pro OS</span>
        </div>

        <!-- Pro App Content Preview -->
        <div class="p-5 sm:p-7 space-y-5 bg-vizze-canvas">
          <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-3 pb-4 border-b border-vizze-divider">
            <div>
              <p class="text-[10px] font-bold uppercase tracking-widest text-[#625A8C] mb-0.5">UNIDADE ATIVA</p>
              <h3 class="text-lg font-bold text-vizze-ink flex items-center gap-2">
                Barbearia Dom Rocha · Matriz Tatuapé
                <span class="text-[10px] font-bold bg-[#DCEEE7] text-[#176451] px-2 py-0.5 rounded-full">Holding Ativa</span>
              </h3>
            </div>
            <div class="flex items-center gap-2">
              <span class="text-xs text-[#737080]">Grade Simultânea · 2 Especialistas</span>
            </div>
          </div>

          <!-- Grade de Atendimentos Reais -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Cadeira 01 -->
            <div class="bg-white p-4 rounded-2xl border border-vizze-divider shadow-xs space-y-3">
              <div class="flex justify-between items-center border-b border-[#F0EDE7] pb-2.5">
                <div>
                  <span class="text-[10px] font-extrabold uppercase text-[#176451] tracking-wider block">CADEIRA 01</span>
                  <strong class="text-sm font-bold text-vizze-ink">Rodrigo Ramos</strong>
                </div>
                <span class="text-[11px] font-bold text-[#626778]">Ocupação: 92%</span>
              </div>

              <!-- Atendimento Ativo 09:00 -->
              <div class="p-3.5 rounded-xl bg-[#F7F6FF] border border-vizze-indigo/30 space-y-2">
                <div class="flex justify-between items-center">
                  <span class="text-xs font-bold text-vizze-indigo">09:00 · Carlos Eduardo</span>
                  <span class="text-xs font-mono font-bold text-vizze-indigo bg-white px-2 py-0.5 rounded border border-vizze-indigo/20">VZ-4821</span>
                </div>
                <p class="text-xs text-[#555A6C]">Combo Corte + Barba Premium · R$ 95,00</p>
                <div class="pt-2 flex justify-between items-center border-t border-vizze-lavender">
                  <span class="text-[10px] font-bold text-[#176451] bg-[#DCEEE7] px-2 py-0.5 rounded">Aguardando na recepção</span>
                  <button type="button" class="vz-btn vz-btn-primary vz-btn-compact !text-xs !py-1 !px-2.5">
                    <span>Chamar na TV</span>
                    <span class="button-icon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="m9 18 6-6-6-6"/></svg>
                    </span>
                  </button>
                </div>
              </div>

              <!-- Próximo 10:30 -->
              <div class="p-3 rounded-xl bg-white border border-[#EAE8E2] text-xs text-[#707585]">
                <div class="flex justify-between font-semibold text-vizze-ink">
                  <span>10:30 · Marcelo Tavares</span>
                  <span>R$ 60,00</span>
                </div>
                <small class="text-[11px]">Corte Executivo na tesoura</small>
              </div>
            </div>

            <!-- Cadeira 02 -->
            <div class="bg-white p-4 rounded-2xl border border-vizze-divider shadow-xs space-y-3">
              <div class="flex justify-between items-center border-b border-[#F0EDE7] pb-2.5">
                <div>
                  <span class="text-[10px] font-extrabold uppercase text-[#4036A8] tracking-wider block">CADEIRA 02</span>
                  <strong class="text-sm font-bold text-vizze-ink">Lucas Silva</strong>
                </div>
                <span class="text-[11px] font-bold text-[#626778]">Ocupação: 85%</span>
              </div>

              <!-- Atendimento 09:30 -->
              <div class="p-3.5 rounded-xl bg-white border border-vizze-divider space-y-2">
                <div class="flex justify-between items-center">
                  <span class="text-xs font-bold text-vizze-ink">09:30 · Felipe Santos</span>
                  <span class="text-xs font-mono font-bold text-[#626778] bg-[#F5F3EF] px-2 py-0.5 rounded">VZ-5341</span>
                </div>
                <p class="text-xs text-[#555A6C]">Corte Militar & Acabamento · R$ 60,00</p>
                <div class="pt-2 flex justify-between items-center border-t border-[#F0EDE7]">
                  <span class="text-[10px] font-semibold text-[#176451] bg-[#DCEEE7] px-2 py-0.5 rounded">Confirmado via WhatsApp</span>
                  <span class="text-xs font-bold text-vizze-ink">R$ 60,00</span>
                </div>
              </div>

              <!-- Próximo 11:00 -->
              <div class="p-3 rounded-xl bg-white border border-[#EAE8E2] text-xs text-[#707585]">
                <div class="flex justify-between font-semibold text-vizze-ink">
                  <span>11:00 · Guilherme Costa</span>
                  <span>R$ 95,00</span>
                </div>
                <small class="text-[11px]">Combo Corte + Barba Completo</small>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- SCREEN 2: OLED SMART TV MOCKUP -->
      <div id="tab-tv" class="showcase-panel tv-mockup hidden p-6 sm:p-10 space-y-6">
        <!-- Top Bar da TV -->
        <div class="flex justify-between items-center border-b border-white/10 pb-4">
          <div class="flex items-center gap-3">
            <span class="w-3 h-3 rounded-full bg-vizze-coral animate-ping"></span>
            <div>
              <strong class="text-sm sm:text-base font-bold text-white tracking-wider uppercase font-heading">
                RECEPÇÃO INTELIGENTE · BARBEARIA DOM ROCHA
              </strong>
              <small class="text-xs text-white/60 block">Wi-Fi Clientes: DomRocha_5G · Valet Conveniado nº 490</small>
            </div>
          </div>
          <div class="text-right">
            <span class="text-xs font-mono text-vizze-mint bg-white/10 px-3 py-1 rounded">TV-01 ATIVA</span>
            <span class="text-xs text-white/50 block mt-0.5">Sincronização instantânea</span>
          </div>
        </div>

        <!-- Takeover Chamada Principal -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
          <div class="md:col-span-2 bg-gradient-to-br from-vizze-indigo to-[#1E179E] p-8 rounded-2xl text-white space-y-3 border border-white/20 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-8 -bottom-8 opacity-10">
              <img src="/assets/svg/vizze-simbolo-branco.svg" class="w-48 h-48" alt="">
            </div>
            <span class="text-[11px] uppercase tracking-widest font-extrabold text-vizze-mint bg-white/10 px-3 py-1 rounded-full inline-block">
              CHAMANDO AGORA NA CADEIRA 01
            </span>
            <div class="text-5xl sm:text-7xl font-black font-mono tracking-tight text-white py-1">
              VZ-4821
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold font-heading text-white">
              Carlos Eduardo
            </h3>
            <p class="text-sm text-white/80">
              Serviço: <strong>Combo Corte + Barba Premium</strong> · Especialista: <strong>Rodrigo Ramos</strong>
            </p>
          </div>

          <!-- Próximos na Fila -->
          <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 flex flex-col justify-between">
            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-white/70 block mb-3 pb-2 border-b border-white/10">
                PRÓXIMOS NA FILA
              </span>
              <div class="space-y-3 text-xs">
                <div class="flex justify-between items-center py-1.5 border-b border-white/10 text-white">
                  <span>Felipe Santos</span>
                  <span class="font-mono font-bold text-vizze-coral">VZ-5341</span>
                </div>
                <div class="flex justify-between items-center py-1.5 border-b border-white/10 text-white">
                  <span>Marcelo Tavares</span>
                  <span class="font-mono font-bold text-vizze-mint">VZ-5104</span>
                </div>
                <div class="flex justify-between items-center py-1.5 text-white/60">
                  <span>Guilherme Costa</span>
                  <span class="font-mono text-white/50">VZ-5342</span>
                </div>
              </div>
            </div>
            <div class="pt-4 border-t border-white/10 text-[10px] text-white/50 text-center">
              Auto check-in disponível no Totem de Entrada
            </div>
          </div>
        </div>
      </div>

      <!-- SCREEN 3: MOBILE PWA MOCKUP -->
      <div id="tab-client" class="showcase-panel hidden flex justify-center">
        <div class="mobile-mockup">
          <!-- Dynamic Island / Notch -->
          <div class="bg-[#1C2033] pt-3 pb-2 flex justify-center">
            <div class="w-24 h-4 bg-black rounded-full"></div>
          </div>

          <!-- App Header -->
          <div class="p-5 bg-vizze-surface border-b border-vizze-divider space-y-4">
            <div class="flex justify-between items-center">
              <span class="text-[10px] font-extrabold uppercase tracking-wider text-vizze-indigo bg-vizze-lavender px-3 py-1 rounded-full">
                PASSE DIGITAL VIZZE
              </span>
              <span class="text-xs font-bold text-vizze-teal flex items-center gap-1">
                ● 520 VIZ ACUMULADOS
              </span>
            </div>

            <!-- Card do Agendamento Ativo -->
            <div class="p-4 rounded-2xl bg-vizze-sand border border-[#E5DECF] space-y-2.5">
              <div class="flex justify-between items-baseline">
                <span class="text-xs text-[#75613C] font-semibold">Hoje às 09:00</span>
                <strong class="font-mono text-sm text-[#121426] bg-white px-2 py-0.5 rounded border border-[#D9D1C2]">VZ-4821</strong>
              </div>
              <h4 class="text-base font-bold text-[#121426] font-heading">Barbearia Dom Rocha</h4>
              <p class="text-xs text-[#626778]">Combo Corte + Barba Premium com Rodrigo Ramos</p>
              <div class="pt-2 flex justify-between items-center border-t border-[#DFD7C5]">
                <span class="text-xs font-bold text-[#121426]">R$ 95,00</span>
                <span class="text-xs font-bold text-white bg-[#176451] px-3 py-1.5 rounded-lg flex items-center gap-1 shadow-xs">
                  <span>Avisar "Já cheguei"</span>
                  <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
              </div>
            </div>

            <!-- Cartão Fidelidade de Selos -->
            <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider space-y-2.5">
              <div class="flex justify-between text-xs">
                <strong class="text-vizze-ink font-bold">Fidelidade Dom Rocha</strong>
                <span class="text-vizze-indigo font-bold">4 de 5 selos</span>
              </div>
              <div class="flex gap-2">
                <span class="w-8 h-8 rounded-full bg-[#176451] text-white flex items-center justify-center text-xs font-bold">✓</span>
                <span class="w-8 h-8 rounded-full bg-[#176451] text-white flex items-center justify-center text-xs font-bold">✓</span>
                <span class="w-8 h-8 rounded-full bg-[#176451] text-white flex items-center justify-center text-xs font-bold">✓</span>
                <span class="w-8 h-8 rounded-full bg-[#176451] text-white flex items-center justify-center text-xs font-bold">✓</span>
                <span class="w-8 h-8 rounded-full bg-white border border-dashed border-[#8A8F9E] text-[#8A8F9E] flex items-center justify-center text-xs font-bold">5</span>
              </div>
              <small class="text-[10px] text-[#737080] block">Falta apenas 1 visita para ganhar cortesia especial.</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
