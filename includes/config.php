<?php

/**
 * Vizze Public Site - Global Configuration & Official Icon Library Loader
 */

define('SITE_NAME', 'Vizze · Local Services Operating System');
define('SITE_TAGLINE', 'O Sistema Operacional para Barbearias, Salões e Clínicas');
define('SITE_DESCRIPTION', 'Agenda inteligente multi-cadeiras, chamada em tempo real na Smart TV, totem de auto check-in e programa de fidelidade VIZ em um único ecossistema.');
define('SITE_CANONICAL', 'https://vizze.wrocha.com');
define('API_BASE_URL', getenv('API_BASE_URL') ?: 'https://api-vizze.wrocha.com/api/v1');

define('URL_CLIENT_APP', 'https://app.vizze.wrocha.com');
define('URL_PRO_APP', 'https://pro.vizze.wrocha.com');
define('URL_DISPLAY_APP', 'https://display.vizze.wrocha.com');
define('WA_SUPPORT_NUMBER', '5511994128800');
define('ASSET_VERSION', '2.4.0');

// Detecção automática de subdiretório para funcionar em raiz de domínio ou subpasta local
$detectedScript = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
$detectedBase = rtrim(dirname($detectedScript), '/');
if (substr($detectedBase, -9) === '/checkout') {
    $detectedBase = substr($detectedBase, 0, -9);
}
if ($detectedBase === '/' || $detectedBase === '.') {
    $detectedBase = '';
}
define('SITE_BASE_PATH', $detectedBase);

/**
 * Gera URLs internas relativas à raiz do site (compatível com subdiretórios e domínio raiz)
 */
function siteUrl(string $path = ''): string
{
    $clean = ltrim($path, '/');
    $base = SITE_BASE_PATH;
    if ($clean === '') {
        return $base === '' ? '/' : $base . '/';
    }
    if (str_starts_with($clean, '#')) {
        return ($base === '' ? '/' : $base . '/') . $clean;
    }
    return ($base === '' ? '' : $base) . '/' . $clean;
}

/**
 * Gera URL de ativo estático com cache-busting
 */
function assetUrl(string $path): string
{
    $url = siteUrl($path);
    $sep = str_contains($url, '?') ? '&' : '?';
    return $url . $sep . 'v=' . ASSET_VERSION;
}

/**
 * Carrega os arquivos SVG oficiais diretamente das bibliotecas homologadas em assets/icones/:
 * - Ícones de interface: Lucide (https://github.com/lucide-icons/lucide) em assets/icones/ e assets/icones/acoes/
 * - Ícones de marcas oficiais: Simple Icons (https://github.com/simple-icons/simple-icons) em assets/icones/marcas/
 * Nenhum ícone é desenhado manualmente; todos vêm dos arquivos .svg originais das bibliotecas.
 */
function vizzeIcon(string $name, int $size = 18, string $extraClass = ''): string
{
    $iconsDir = dirname(__DIR__) . '/assets/icones';
    $brandFile = $iconsDir . '/marcas/' . $name . '.svg';
    $actionFile = $iconsDir . '/acoes/' . $name . '.svg';
    $supportFile = $iconsDir . '/' . $name . '.svg';

    $isBrand = false;
    if (is_file($brandFile)) {
        $svgRaw = (string) file_get_contents($brandFile);
        $isBrand = true;
    } elseif (is_file($actionFile)) {
        $svgRaw = (string) file_get_contents($actionFile);
    } elseif (is_file($supportFile)) {
        $svgRaw = (string) file_get_contents($supportFile);
    } else {
        $svgRaw = (string) file_get_contents($iconsDir . '/acoes/arrow-right.svg');
    }

    // Remove <title> interno do Simple Icons quando decorativo (aria-hidden="true")
    $svgClean = preg_replace('/<title>.*?<\/title>/is', '', trim($svgRaw)) ?? trim($svgRaw);

    if ($isBrand) {
        $cls = trim('vz-brand-icon shrink-0 ' . $extraClass);
        $inlineStyle = sprintf(
            'width:%dpx;height:%dpx;min-width:%dpx;min-height:%dpx;max-width:%dpx;max-height:%dpx;fill:currentColor;stroke:none;display:inline-block;vertical-align:middle;flex-shrink:0;',
            $size,
            $size,
            $size,
            $size,
            $size,
            $size
        );
        $replacement = sprintf(
            '<svg width="%d" height="%d" fill="currentColor" stroke="none" aria-hidden="true" focusable="false" class="%s" style="%s"',
            $size,
            $size,
            htmlspecialchars($cls, ENT_QUOTES, 'UTF-8'),
            $inlineStyle
        );
    } else {
        $cls = trim('vz-svg-icon shrink-0 ' . $extraClass);
        $inlineStyle = sprintf(
            'width:%dpx;height:%dpx;min-width:%dpx;min-height:%dpx;max-width:%dpx;max-height:%dpx;fill:none;stroke:currentColor;stroke-width:2;display:inline-block;vertical-align:middle;flex-shrink:0;',
            $size,
            $size,
            $size,
            $size,
            $size,
            $size
        );
        // Remove width="24" height="24" originais do arquivo Lucide antes de injetar o tamanho exato
        $svgClean = preg_replace('/\b(width|height)="24"\s*/i', '', $svgClean) ?? $svgClean;
        $replacement = sprintf(
            '<svg width="%d" height="%d" aria-hidden="true" focusable="false" class="%s" style="%s"',
            $size,
            $size,
            htmlspecialchars($cls, ENT_QUOTES, 'UTF-8'),
            $inlineStyle
        );
    }

    return preg_replace('/<svg\b/i', $replacement, $svgClean, 1) ?? $svgClean;
}

/**
 * Catálogo Oficial de Planos SaaS
 */
function getSaaSPlans(): array
{
    return [
        'solo_mei' => [
            'id'             => 'solo_mei',
            'name'           => 'Vizze Solo MEI',
            'subtitle'       => 'Autônomo & Cadeira Individual',
            'headline'       => 'Para especialistas que atendem sozinhos em estúdio próprio ou a domicílio.',
            'monthly_price'  => 59,
            'annual_price'   => 47,
            'period_label'   => '/mês',
            'badge'          => '1 Profissional',
            'popular'        => false,
            'color'          => 'sand',
            'features'       => [
                '1 profissional / agenda individual',
                'Página exclusiva e link na bio (@seunome)',
                'Agendamento web & mobile sem app pesado',
                'Atendimento presencial e a domicílio',
                'Lembretes automáticos via WhatsApp',
                'Histórico e carteira de clientes própria',
                'Sem taxa de adesão ou fidelidade'
            ],
            'limitations'    => [
                'Sem chamada na Smart TV ou Totem',
                'Sem grade de equipe / comissões'
            ],
            'cta'            => 'Testar Solo Grátis',
            'checkout_param' => 'solo_mei'
        ],
        'starter' => [
            'id'             => 'starter',
            'name'           => 'Vizze Starter',
            'subtitle'       => 'Unidade até 3 Profissionais',
            'headline'       => 'Para barbearias, salões e estúdios compactos organizarem agenda e caixa.',
            'monthly_price'  => 99,
            'annual_price'   => 79,
            'period_label'   => '/mês',
            'badge'          => 'Até 3 Cadeiras',
            'popular'        => false,
            'color'          => 'mint',
            'features'       => [
                'Até 3 profissionais simultâneos',
                'Grade multi-cadeiras sincronizada',
                'Cálculo automático de comissões (MEI)',
                'Catálogo de serviços e preços por cadeira',
                'Relatórios de caixa e fechamento diário',
                'Cartão de selos e fidelidade VIZ básico',
                'Suporte comercial via WhatsApp'
            ],
            'limitations'    => [
                'Sem chamada na Smart TV ou Totem'
            ],
            'cta'            => 'Testar Starter Grátis',
            'checkout_param' => 'starter'
        ],
        'pro' => [
            'id'             => 'pro',
            'name'           => 'Vizze Pro + TV',
            'subtitle'       => 'Multi-Agenda, Smart TV & Totem',
            'headline'       => 'O ecossistema completo com recepção na Smart TV. A escolha nº 1 dos salões.',
            'monthly_price'  => 149,
            'annual_price'   => 119,
            'period_label'   => '/mês',
            'badge'          => 'Mais Escolhido',
            'popular'        => true,
            'color'          => 'indigo',
            'features'       => [
                'Profissionais e cadeiras ilimitadas',
                'Fila ao vivo e chamada sonora na Smart TV',
                'Totem de auto check-in (QR Code / Senha)',
                'Stories 24h na vitrine do app do cliente',
                'Rateio automático de comissões e repasses',
                'Carteira de Fidelidade VIZ completa',
                'Botão de chegada antecipada ("Já cheguei")',
                'Suporte prioritário via WhatsApp dedicado'
            ],
            'limitations'    => [],
            'cta'            => 'Começar Teste Pro',
            'checkout_param' => 'pro'
        ],
        'enterprise' => [
            'id'             => 'enterprise',
            'name'           => 'Vizze Enterprise',
            'subtitle'       => 'Redes, Franquias & Multi-Salas',
            'headline'       => 'Para holdings multi-unidades e clínicas integradas com operação avançada.',
            'monthly_price'  => 229,
            'annual_price'   => 183,
            'period_label'   => '/mês',
            'badge'          => 'Multi-Unidades',
            'popular'        => false,
            'color'          => 'ink',
            'features'       => [
                'Holding Multi-Negócios unificada',
                'Múltiplas Smart TVs e totens por loja',
                'Perfis corporativos (Diretoria e Gestores)',
                'DRE e faturamento consolidado entre filiais',
                'Integração com ERP Bling e emissão fiscal',
                'Onboarding assistido para toda a equipe',
                'Gerente de conta exclusivo'
            ],
            'limitations'    => [],
            'cta'            => 'Assinar Enterprise',
            'checkout_param' => 'enterprise'
        ]
    ];
}
