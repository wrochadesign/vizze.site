<?php require_once __DIR__ . '/config.php'; ?>
<!-- FOOTER -->
<footer class="bg-vizze-ink text-white pt-16 pb-12 border-t border-white/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-white/10">
      
      <!-- Coluna 1: Marca & Missão -->
      <div class="md:col-span-2 space-y-4">
        <a href="/" class="flex items-center gap-2">
          <img src="/assets/svg/vizze-logo-branco.svg" alt="Vizze" class="h-7 w-auto">
        </a>
        <p class="text-xs sm:text-sm text-white/70 max-w-sm leading-relaxed">
          O Sistema Operacional feito para aproximar pessoas e bons serviços locais. Agenda inteligente, recepção na Smart TV e fidelidade VIZ.
        </p>
        <div class="flex items-center gap-3 pt-2">
          <span class="inline-flex items-center gap-1.5 text-[11px] text-white/60 bg-white/5 px-3 py-1 rounded-full border border-white/10">
            <span class="w-2 h-2 rounded-full bg-[#176451]"></span>
            <span>API Online & 100% Operacional</span>
          </span>
        </div>
      </div>

      <!-- Coluna 2: Ecossistema Apps -->
      <div class="space-y-3">
        <h4 class="text-xs font-bold uppercase tracking-wider text-vizze-mint font-heading">Ecossistema</h4>
        <ul class="space-y-2 text-xs text-white/70">
          <li><a href="<?= URL_PRO_APP ?>" class="hover:text-white transition-colors">Vizze Pro Workspace</a></li>
          <li><a href="<?= URL_CLIENT_APP ?>" class="hover:text-white transition-colors">Super App do Cliente</a></li>
          <li><a href="<?= URL_DISPLAY_APP ?>" class="hover:text-white transition-colors">Display Smart TV & Totem</a></li>
          <li><a href="<?= API_BASE_URL ?>" target="_blank" class="hover:text-white transition-colors">Documentação da API</a></li>
        </ul>
      </div>

      <!-- Coluna 3: Planos & Suporte -->
      <div class="space-y-3">
        <h4 class="text-xs font-bold uppercase tracking-wider text-vizze-mint font-heading">Planos SaaS</h4>
        <ul class="space-y-2 text-xs text-white/70">
          <li><a href="#planos" class="hover:text-white transition-colors">Vizze Solo MEI (R$ 59)</a></li>
          <li><a href="#planos" class="hover:text-white transition-colors">Vizze Starter (R$ 99)</a></li>
          <li><a href="#planos" class="hover:text-white transition-colors">Vizze Pro + TV (R$ 149)</a></li>
          <li><a href="#planos" class="hover:text-white transition-colors">Vizze Enterprise (R$ 229)</a></li>
          <li><a href="https://wa.me/<?= WA_SUPPORT_NUMBER ?>" target="_blank" class="hover:text-white transition-colors">Suporte via WhatsApp</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Bar & LGPD -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/50">
      <p>© <?= date('Y') ?> Vizze Tecnologia e Serviços Ltda. Todos os direitos reservados. CNPJ 34.190.882/0001-10.</p>
      <div class="flex items-center gap-6">
        <a href="#lgpd" class="hover:text-white transition-colors">Privacidade & LGPD</a>
        <a href="#termos" class="hover:text-white transition-colors">Termos de Uso</a>
        <a href="#seguranca" class="hover:text-white transition-colors">Segurança</a>
      </div>
    </div>
  </div>
</footer>

<!-- Botão Flutuante do WhatsApp -->
<a
  href="https://wa.me/<?= WA_SUPPORT_NUMBER ?>?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20planos%20do%20Vizze."
  target="_blank"
  rel="noopener noreferrer"
  class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#1EBE5D] text-white p-3.5 rounded-full shadow-2xl hover:scale-110 transition-all flex items-center justify-center group"
  aria-label="Fale conosco no WhatsApp"
>
  <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.41 1.56 1.56 2.41 3.63 2.41 5.83s-.85 4.27-2.41 5.83a8.21 8.21 0 0 1-5.82 2.42c-1.47 0-2.92-.39-4.19-1.14l-.3-.18-3.11.82.83-3.04-.2-.31a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24m4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.01-1.24-.74-.66-1.25-1.48-1.39-1.73-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.13-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.43h-.47c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1s.9 2.44 1.03 2.61c.13.17 1.78 2.71 4.3 3.8 2.53 1.09 2.53.73 2.99.69.45-.04 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29z"/></svg>
  <span class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs group-hover:ml-2 group-hover:pr-2 transition-all duration-300 font-bold text-xs">
    Fale Conosco
  </span>
</a>

<!-- Scripts -->
<script src="/assets/js/app.js"></script>
</body>
</html>
