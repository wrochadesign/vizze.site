<?php require_once __DIR__ . '/config.php'; ?>
<!-- FOOTER -->
<footer class="bg-vizze-ink text-white pt-16 pb-12 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-white/10">
      
      <!-- Coluna 1: Marca & Missão (5 colunas) -->
      <div class="md:col-span-5 space-y-4">
        <a href="<?= siteUrl() ?>" class="inline-block py-1" aria-label="Vizze">
          <img src="<?= assetUrl('assets/svg/vizze-logo-branco.svg') ?>" alt="Vizze" class="h-7 w-auto" style="height:28px;width:auto;">
        </a>
        <p class="text-xs sm:text-sm text-white/70 max-w-sm leading-relaxed">
          Uma marca. Vários encontros. A plataforma completa para agendamento multi-cadeiras, recepção inteligente em Smart TV e relacionamento com clientes locais.
        </p>
        <div class="pt-1">
          <span class="inline-flex items-center gap-2 text-[11px] text-vizze-mint bg-white/5 px-3 py-1.5 rounded-full border border-white/10">
            <span class="w-2 h-2 rounded-full bg-vizze-mint"></span>
            <span>Infraestrutura Cloud & API 100% Online</span>
          </span>
        </div>
      </div>

      <!-- Coluna 2: Produtos Oficiais (3 colunas) -->
      <div class="md:col-span-3 space-y-3">
        <h4 class="text-xs font-bold uppercase tracking-wider text-vizze-mint font-heading">Aplicativos Vizze</h4>
        <ul class="space-y-2.5 text-xs text-white/75">
          <li><a href="<?= URL_PRO_APP ?>" class="hover:text-white transition-colors">Vizze Pro · Gestão & Equipe</a></li>
          <li><a href="<?= URL_CLIENT_APP ?>" class="hover:text-white transition-colors">Vizze Cliente · Passe & Fidelidade</a></li>
          <li><a href="<?= URL_DISPLAY_APP ?>" class="hover:text-white transition-colors">Vizze Display · Smart TV & Totem</a></li>
          <li><a href="#simulador" class="hover:text-white transition-colors">Calculadora de Retorno (ROI)</a></li>
        </ul>
      </div>

      <!-- Coluna 3: Planos & Assinatura (4 colunas) -->
      <div class="md:col-span-4 space-y-3">
        <h4 class="text-xs font-bold uppercase tracking-wider text-vizze-mint font-heading">Planos & Contratação</h4>
        <ul class="space-y-2.5 text-xs text-white/75">
          <li><a href="<?= siteUrl('checkout/?plan=solo_mei') ?>" class="hover:text-white transition-colors">Vizze Solo MEI · R$ 59/mês</a></li>
          <li><a href="<?= siteUrl('checkout/?plan=starter') ?>" class="hover:text-white transition-colors">Vizze Starter Unidade · R$ 99/mês</a></li>
          <li><a href="<?= siteUrl('checkout/?plan=pro') ?>" class="hover:text-white transition-colors font-semibold text-vizze-lavender">Vizze Pro + Smart TV · R$ 149/mês</a></li>
          <li><a href="<?= siteUrl('checkout/?plan=enterprise') ?>" class="hover:text-white transition-colors">Vizze Enterprise Holding · R$ 229/mês</a></li>
          <li><a href="https://wa.me/<?= WA_SUPPORT_NUMBER ?>" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Atendimento Comercial via WhatsApp</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Bar & LGPD -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/55">
      <p>© <?= date('Y') ?> Vizze Tecnologia e Serviços Ltda. Todos os direitos reservados.</p>
      <div class="flex flex-wrap items-center justify-center gap-6">
        <button type="button" data-legal-open="lgpd" class="hover:text-white transition-colors cursor-pointer">Privacidade & LGPD</button>
        <button type="button" data-legal-open="termos" class="hover:text-white transition-colors cursor-pointer">Termos de Uso</button>
        <button type="button" data-legal-open="seguranca" class="hover:text-white transition-colors cursor-pointer">Segurança de Dados</button>
      </div>
    </div>
  </div>
</footer>

<!-- Modal Institucional de LGPD, Termos e Segurança -->
<div id="legal-modal" class="fixed inset-0 z-50 hidden bg-vizze-ink/70 backdrop-blur-xs flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="legal-modal-title">
  <div class="bg-vizze-surface border border-vizze-divider rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-2xl space-y-4">
    <div class="flex items-center justify-between border-b border-vizze-divider pb-3">
      <h3 id="legal-modal-title" class="text-lg font-bold text-vizze-ink font-heading">Política de Privacidade & LGPD</h3>
      <button type="button" id="legal-modal-close" class="w-8 h-8 rounded-lg border border-vizze-divider flex items-center justify-center text-[#626778] hover:text-vizze-ink" aria-label="Fechar janela">
        <?= vizzeIcon('x', 16) ?>
      </button>
    </div>
    <div id="legal-modal-body" class="text-xs sm:text-sm text-[#4B5162] leading-relaxed space-y-3 max-h-[60vh] overflow-y-auto">
      <p>Em conformidade com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018), a Vizze coleta e processa apenas os dados estritamente necessários para a operação da sua unidade, gestão de agendas e comunicação de agendamentos.</p>
      <p>Seus dados e a carteira de clientes do seu estabelecimento pertencem exclusivamente a você, contando com criptografia em trânsito (TLS 1.3), senhas protegidas com hash bcrypt e isolamento multi-tenant na API.</p>
    </div>
    <div class="pt-3 border-t border-vizze-divider flex justify-end">
      <button type="button" id="legal-modal-ok" class="vz-btn vz-btn-primary vz-btn-compact">Entendi</button>
    </div>
  </div>
</div>

<!-- Botão Flutuante do WhatsApp -->
<a
  href="https://wa.me/<?= WA_SUPPORT_NUMBER ?>?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20planos%20do%20Vizze."
  target="_blank"
  rel="noopener noreferrer"
  class="fixed bottom-5 right-5 z-40 bg-[#176451] hover:bg-[#124E3F] text-white p-3.5 rounded-2xl shadow-xl border border-vizze-mint/30 hover:scale-105 transition-all flex items-center justify-center gap-2 group"
  aria-label="Fale conosco no WhatsApp"
>
  <?= vizzeIcon('mensagem', 22) ?>
  <span class="hidden sm:inline text-xs font-semibold pr-1">Dúvidas? WhatsApp</span>
</a>

<!-- Scripts (Link com cache-busting + Fallback Inline garantido) -->
<script src="<?= assetUrl('assets/js/app.js') ?>"></script>
<script>
<?php
$inlineJsPath = dirname(__DIR__) . '/assets/js/app.js';
if (is_file($inlineJsPath)) {
    echo file_get_contents($inlineJsPath);
}
?>
</script>
</body>
</html>
