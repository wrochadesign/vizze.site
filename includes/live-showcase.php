<!-- LIVE SHOWCASE: AS 3 PONTAS CONECTADAS EM TEMPO REAL -->
<section id="como-funciona" class="py-16 md:py-24 bg-vizze-surface border-y border-vizze-divider relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-10">
      <div class="eyebrow-tag justify-center mb-3">
        <span class="eyebrow-num">01</span>
        <span>Três Produtos · A Mesma Vizze</span>
      </div>
      <h2 class="text-3xl sm:text-5xl font-bold text-vizze-ink font-heading leading-tight">
        Tudo acontece em <em class="font-editorial font-normal italic text-vizze-indigo">sincronia imediata.</em>
      </h2>
      <p class="text-base sm:text-lg text-[#555A6C] mt-3 leading-relaxed">
        Veja como a grade da sua equipe, a TV da recepção e o celular do cliente conversam em tempo real sem precisar digitar nada duas vezes.
      </p>
    </div>

    <!-- Interface Selector Tabs (100% responsivo no mobile e desktop) -->
    <div class="flex justify-center mb-10">
      <div class="grid grid-cols-1 sm:inline-flex w-full sm:w-auto p-1.5 rounded-2xl bg-[#EDEAE3] border border-vizze-divider gap-1.5" role="tablist" aria-label="Alternar visualização dos aplicativos Vizze">
        <button type="button" class="showcase-tab px-5 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all bg-white text-vizze-indigo shadow-sm text-center" data-target="tab-pro" role="tab" aria-selected="true">
          1. Vizze Pro (Grade & Equipe)
        </button>
        <button type="button" class="showcase-tab px-5 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all text-[#555A6C] hover:text-vizze-ink text-center" data-target="tab-tv" role="tab" aria-selected="false">
          2. Vizze Display (Smart TV & Totem)
        </button>
        <button type="button" class="showcase-tab px-5 py-3 rounded-xl text-xs sm:text-sm font-semibold transition-all text-[#555A6C] hover:text-vizze-ink text-center" data-target="tab-client" role="tab" aria-selected="false">
          3. Vizze Cliente (Passe & Fidelidade)
        </button>
      </div>
    </div>

    <!-- Showcase Container -->
    <div class="max-w-5xl mx-auto">

      <!-- SCREEN 1: BROWSER MOCKUP DO VIZZE PRO -->
      <div id="tab-pro" class="showcase-panel browser-mockup">
        <!-- Browser Top Bar -->
        <div class="browser-header">
          <div class="flex items-center gap-2">
            <span class="browser-dot bg-[#FF5F56]"></span>
            <span class="browser-dot bg-[#FFBD2E]"></span>
            <span class="browser-dot bg-[#27C93F]"></span>
          </div>
          <div class="bg-white/90 border border-vizze-divider px-3 sm:px-4 py-1 rounded-lg text-[11px] font-mono text-[#555A6C] flex items-center gap-1.5 truncate max-w-[200px] sm:max-w-none">
            <svg class="w-3 h-3 text-vizze-teal shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            <span class="truncate">pro.vizze.wrocha.com/agenda</span>
          </div>
          <span class="hidden sm:inline-block text-[11px] font-bold text-vizze-indigo bg-vizze-lavender px-2.5 py-0.5 rounded">Vizze Pro</span>
        </div>

        <!-- Pro App Content Preview -->
        <div class="p-4 sm:p-7 space-y-5 bg-vizze-canvas">
          <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-3 pb-4 border-b border-vizze-divider">
            <div>
              <p class="text-[10px] font-bold uppercase tracking-widest text-vizze-indigo mb-0.5">UNIDADE EM OPERAÇÃO</p>
              <h3 class="text-base sm:text-lg font-bold text-vizze-ink flex flex-wrap items-center gap-2">
                <span>Barbearia Dom Rocha · Matriz Tatuapé</span>
                <span class="text-[11px] font-semibold bg-vizze-mint text-vizze-teal px-2.5 py-0.5 rounded-full">✓ Sincronizado</span>
              </h3>
            </div>
            <div class="flex items-center gap-3 text-xs text-[#555A6C] tabular-nums">
              <span class="bg-white border border-vizze-divider px-3 py-1.5 rounded-lg font-medium">Hoje · 14 agendamentos</span>
            </div>
          </div>

          <!-- Grade de Atendimentos Reais -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Cadeira 01 -->
            <div class="bg-white p-4 sm:p-5 rounded-2xl border border-vizze-divider space-y-3.5">
              <div class="flex justify-between items-center border-b border-[#F0EDE7] pb-3">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-full bg-vizze-lavender text-vizze-indigo font-bold text-xs flex items-center justify-center">RR</span>
                  <div>
                    <span class="text-[10px] font-bold uppercase text-vizze-teal tracking-wider block">CADEIRA 01 · COMISSÃO 60%</span>
                    <strong class="text-sm font-bold text-vizze-ink">Rodrigo Ramos</strong>
                  </div>
                </div>
                <span class="text-xs font-semibold text-vizze-teal bg-vizze-mint px-2.5 py-1 rounded-md tabular-nums">92% ocupada</span>
              </div>

              <!-- Atendimento Ativo 09:00 -->
              <div class="p-3.5 rounded-xl bg-[#F5F4FF] border border-vizze-indigo/30 space-y-2.5">
                <div class="flex justify-between items-center gap-2">
                  <span class="text-xs font-bold text-vizze-indigo tabular-nums">09:00 · Carlos Eduardo</span>
                  <span class="text-xs font-mono font-bold text-vizze-indigo bg-white px-2 py-0.5 rounded border border-vizze-indigo/25">VZ-4821</span>
                </div>
                <p class="text-xs text-[#525769]">Combo Corte + Barba Premium · <strong class="tabular-nums text-vizze-ink">R$ 95,00</strong></p>
                <div class="pt-2.5 flex flex-wrap justify-between items-center gap-2 border-t border-vizze-indigo/15">
                  <span class="text-[11px] font-semibold text-vizze-teal bg-vizze-mint px-2 py-0.5 rounded">✓ Check-in na recepção</span>
                  <button type="button" id="btn-simulate-tv-call" class="vz-btn vz-btn-primary vz-btn-compact !min-h-[34px] !py-1.5 !px-3 !text-xs">
                    <span>Chamar na TV</span>
                    <span class="button-icon" aria-hidden="true">
                      <svg viewBox="0 0 24 24"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </span>
                  </button>
                </div>
              </div>

              <!-- Próximo 10:30 -->
              <div class="p-3 rounded-xl bg-vizze-canvas border border-vizze-divider text-xs flex justify-between items-center">
                <div>
                  <strong class="font-semibold text-vizze-ink block tabular-nums">10:30 · Marcelo Tavares</strong>
                  <span class="text-[11px] text-[#626778]">Corte Executivo na tesoura</span>
                </div>
                <span class="font-bold text-vizze-ink tabular-nums">R$ 60,00</span>
              </div>
            </div>

            <!-- Cadeira 02 -->
            <div class="bg-white p-4 sm:p-5 rounded-2xl border border-vizze-divider space-y-3.5">
              <div class="flex justify-between items-center border-b border-[#F0EDE7] pb-3">
                <div class="flex items-center gap-2.5">
                  <span class="w-8 h-8 rounded-full bg-vizze-sand text-vizze-warning font-bold text-xs flex items-center justify-center">LS</span>
                  <div>
                    <span class="text-[10px] font-bold uppercase text-vizze-indigo tracking-wider block">CADEIRA 02 · COMISSÃO 50%</span>
                    <strong class="text-sm font-bold text-vizze-ink">Lucas Silva</strong>
                  </div>
                </div>
                <span class="text-xs font-semibold text-[#555A6C] bg-vizze-canvas px-2.5 py-1 rounded-md border border-vizze-divider tabular-nums">85% ocupada</span>
              </div>

              <!-- Atendimento 09:30 -->
              <div class="p-3.5 rounded-xl bg-white border border-vizze-divider space-y-2.5">
                <div class="flex justify-between items-center gap-2">
                  <span class="text-xs font-bold text-vizze-ink tabular-nums">09:30 · Felipe Santos</span>
                  <span class="text-xs font-mono font-bold text-[#555A6C] bg-vizze-canvas px-2 py-0.5 rounded border border-vizze-divider">VZ-5341</span>
                </div>
                <p class="text-xs text-[#525769]">Corte Militar & Acabamento · <strong class="tabular-nums text-vizze-ink">R$ 60,00</strong></p>
                <div class="pt-2.5 flex justify-between items-center border-t border-[#F0EDE7]">
                  <span class="text-[11px] font-semibold text-vizze-teal bg-vizze-mint px-2 py-0.5 rounded">✓ Confirmado no WhatsApp</span>
                  <span class="text-xs font-bold text-vizze-ink tabular-nums">Repasse: R$ 30,00</span>
                </div>
              </div>

              <!-- Próximo 11:00 -->
              <div class="p-3 rounded-xl bg-vizze-canvas border border-vizze-divider text-xs flex justify-between items-center">
                <div>
                  <strong class="font-semibold text-vizze-ink block tabular-nums">11:00 · Guilherme Costa</strong>
                  <span class="text-[11px] text-[#626778]">Combo Corte + Barba Completo</span>
                </div>
                <span class="font-bold text-vizze-ink tabular-nums">R$ 95,00</span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- SCREEN 2: OLED SMART TV MOCKUP -->
      <div id="tab-tv" class="showcase-panel tv-mockup hidden p-5 sm:p-9 space-y-6">
        <!-- Top Bar da TV -->
        <div class="flex flex-wrap justify-between items-center gap-3 border-b border-white/10 pb-4">
          <div class="flex items-center gap-3">
            <img src="/assets/svg/vizze-simbolo-branco.svg" alt="" class="w-6 h-6">
            <div>
              <strong class="text-xs sm:text-sm font-bold text-white tracking-wider uppercase font-heading block">
                VIZZE DISPLAY · BARBEARIA DOM ROCHA
              </strong>
              <small class="text-[11px] text-white/60 block">Wi-Fi Clientes: DomRocha_5G · Valet Conveniado nº 490</small>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-[11px] font-mono font-bold text-vizze-ink bg-vizze-mint px-2.5 py-1 rounded">TV RECEPÇÃO ATIVA</span>
          </div>
        </div>

        <!-- Takeover Chamada Principal -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
          <div class="md:col-span-2 bg-gradient-to-br from-vizze-indigo to-[#1E179E] p-6 sm:p-8 rounded-2xl text-white space-y-3 border border-white/20 shadow-xl relative overflow-hidden">
            <span class="text-[11px] uppercase tracking-widest font-bold text-vizze-ink bg-vizze-coral px-3 py-1 rounded-md inline-block">
              CHAMANDO AGORA · CADEIRA 01
            </span>
            <div class="text-4xl sm:text-6xl font-bold font-mono tracking-tight text-white py-1 tabular-nums">
              VZ-4821
            </div>
            <h3 class="text-2xl sm:text-3xl font-bold font-heading text-white">
              Carlos Eduardo
            </h3>
            <p class="text-xs sm:text-sm text-white/85 pt-1">
              Serviço: <strong>Combo Corte + Barba Premium</strong> · Especialista: <strong>Rodrigo Ramos</strong>
            </p>
          </div>

          <!-- Próximos na Fila -->
          <div class="bg-white/5 p-5 sm:p-6 rounded-2xl border border-white/10 flex flex-col justify-between">
            <div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-vizze-mint block mb-3 pb-2 border-b border-white/10">
                PRÓXIMOS ATENDIMENTOS
              </span>
              <div class="space-y-3 text-xs tabular-nums">
                <div class="flex justify-between items-center py-1.5 border-b border-white/10 text-white">
                  <span>09:30 · Felipe Santos</span>
                  <span class="font-mono font-bold text-vizze-coral">VZ-5341</span>
                </div>
                <div class="flex justify-between items-center py-1.5 border-b border-white/10 text-white">
                  <span>10:30 · Marcelo Tavares</span>
                  <span class="font-mono font-bold text-vizze-mint">VZ-5104</span>
                </div>
                <div class="flex justify-between items-center py-1.5 text-white/65">
                  <span>11:00 · Guilherme Costa</span>
                  <span class="font-mono text-white/50">VZ-5342</span>
                </div>
              </div>
            </div>
            <div class="pt-4 mt-4 border-t border-white/10 text-[11px] text-white/60 text-center">
              Confirme sua chegada pelo celular ou no Totem de Entrada
            </div>
          </div>
        </div>
      </div>

      <!-- SCREEN 3: MOBILE PWA MOCKUP + CONTEXTO LADO A LADO -->
      <div id="tab-client" class="showcase-panel hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-vizze-canvas p-5 sm:p-8 rounded-3xl border border-vizze-divider">
          
          <!-- Mockup iPhone (5 colunas) -->
          <div class="lg:col-span-5">
            <div class="mobile-mockup">
              <div class="bg-[#191C2E] pt-2.5 pb-2 flex justify-center">
                <div class="w-20 h-3.5 bg-black rounded-full"></div>
              </div>

              <div class="p-4 sm:p-5 bg-vizze-surface space-y-4">
                <div class="flex justify-between items-center">
                  <img src="/assets/svg/vizze-logo-indigo.svg" alt="Vizze" class="h-5 w-auto">
                  <span class="text-[11px] font-bold text-vizze-teal bg-vizze-mint px-2.5 py-0.5 rounded-full tabular-nums">
                    520 VIZ
                  </span>
                </div>

                <!-- Card do Agendamento Ativo (Areia #F7F1E6 conforme Manual) -->
                <div class="p-4 rounded-2xl bg-vizze-sand border border-[#E2D9C5] space-y-2.5">
                  <div class="flex justify-between items-center">
                    <span class="text-[11px] text-vizze-warning font-bold uppercase tracking-wider">Hoje · 09:00</span>
                    <strong class="font-mono text-xs text-vizze-ink bg-white px-2 py-0.5 rounded border border-[#D9D1C2]">VZ-4821</strong>
                  </div>
                  <h4 class="text-base font-bold text-vizze-ink font-heading">Barbearia Dom Rocha</h4>
                  <p class="text-xs text-[#525769]">Combo Corte + Barba · Rodrigo Ramos</p>
                  <div class="pt-2.5 flex justify-between items-center border-t border-[#DFD7C5]">
                    <span class="text-xs font-bold text-vizze-ink tabular-nums">R$ 95,00</span>
                    <span class="text-[11px] font-bold text-white bg-vizze-indigo px-3 py-1.5 rounded-lg inline-flex items-center gap-1.5">
                      <span>Já cheguei</span>
                      <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                    </span>
                  </div>
                </div>

                <!-- Cartão Fidelidade de Selos -->
                <div class="p-4 rounded-2xl bg-vizze-canvas border border-vizze-divider space-y-2.5">
                  <div class="flex justify-between text-xs">
                    <strong class="text-vizze-ink font-semibold">Cartão Fidelidade</strong>
                    <span class="text-vizze-indigo font-bold tabular-nums">4 de 5 selos</span>
                  </div>
                  <div class="flex justify-between gap-1.5">
                    <span class="w-8 h-8 rounded-full bg-vizze-teal text-white flex items-center justify-center text-xs font-bold">✓</span>
                    <span class="w-8 h-8 rounded-full bg-vizze-teal text-white flex items-center justify-center text-xs font-bold">✓</span>
                    <span class="w-8 h-8 rounded-full bg-vizze-teal text-white flex items-center justify-center text-xs font-bold">✓</span>
                    <span class="w-8 h-8 rounded-full bg-vizze-teal text-white flex items-center justify-center text-xs font-bold">✓</span>
                    <span class="w-8 h-8 rounded-full bg-white border border-dashed border-[#8A8F9E] text-[#626778] flex items-center justify-center text-xs font-bold">5</span>
                  </div>
                  <small class="text-[11px] text-[#626778] block">Mais 1 visita para ganhar Barba Terapia.</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Diferenciais do Super App do Cliente (7 colunas) -->
          <div class="lg:col-span-7 space-y-5">
            <span class="inline-block text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-md bg-vizze-mint text-vizze-teal">
              Vizze Cliente · Sem ocupar memória
            </span>
            <h3 class="text-2xl sm:text-3xl font-bold text-vizze-ink font-heading">
              Uma rede de serviços locais no bolso do seu cliente.
            </h3>
            <p class="text-sm sm:text-base text-[#525769] leading-relaxed">
              Seu cliente não precisa baixar nada pesado na App Store ou Google Play. Pelo link do seu Instagram ou WhatsApp, ele agenda em 15 segundos, recebe o <strong>Passe Digital</strong> e acompanha seus selos de fidelidade.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">
              <div class="p-4 rounded-2xl bg-vizze-surface border border-vizze-divider">
                <strong class="text-xs font-bold text-vizze-ink block mb-1">Botão "Já Cheguei"</strong>
                <p class="text-xs text-[#626778]">O cliente avisa que chegou pelo celular e o nome dele entra na TV da recepção automaticamente.</p>
              </div>
              <div class="p-4 rounded-2xl bg-vizze-surface border border-vizze-divider">
                <strong class="text-xs font-bold text-vizze-ink block mb-1">Fidelidade VIZ & Selos</strong>
                <p class="text-xs text-[#626778]">Aumente a recorrência com cartões de selos digitais e pontos VIZ a cada atendimento concluído.</p>
              </div>
            </div>
            <div class="pt-2">
              <a href="<?= URL_CLIENT_APP ?>" target="_blank" rel="noopener noreferrer" class="vz-btn vz-btn-secondary">
                <span>Testar App do Cliente ao Vivo</span>
                <span class="button-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
