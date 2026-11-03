<?php

/**
 * Vizze Public Site - Global Configuration & Official Visual Identity Helpers
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
define('ASSET_VERSION', '2.3.0');

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
 * Renderiza ícones oficiais homologados no Manual de Identidade Visual Vizze v2.0
 * (Família Lucide · stroke="currentColor" · fill="none" · stroke-width="2" · round caps/joins)
 * Possui atributos HTML e inline style explícitos para nunca expandir além de $size px.
 */
function vizzeIcon(string $name, int $size = 18, string $extraClass = ''): string
{
    $paths = [
        'arrow-right'   => '<path d="M5 12h14" /><path d="m12 5 7 7-7 7" />',
        'arrow-left'    => '<path d="m12 19-7-7 7-7" /><path d="M19 12H5" />',
        'chevron-down'  => '<path d="m6 9 6 6 6-6" />',
        'chevron-right' => '<path d="m9 18 6-6-6-6" />',
        'external-link' => '<path d="M15 3h6v6" /><path d="M10 14 21 3" /><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />',
        'lock-keyhole'  => '<circle cx="12" cy="16" r="1" /><rect x="3" y="10" width="18" height="12" rx="2" /><path d="M7 10V7a5 5 0 0 1 10 0v3" />',
        'confirmacao'   => '<circle cx="12" cy="12" r="10" /><path d="m16 9-5.5 5.5L8 12" />',
        'check'         => '<path d="M20 6 9 17l-5-5" />',
        'x'             => '<path d="M18 6 6 18" /><path d="m6 6 12 12" />',
        'mensagem'      => '<path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719" />',
        'menu'          => '<line x1="4" y1="7" x2="20" y2="7" /><line x1="4" y1="12" x2="20" y2="12" /><line x1="4" y1="17" x2="20" y2="17" />',
    ];

    $inner = $paths[$name] ?? $paths['arrow-right'];
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

    return sprintf(
        '<svg xmlns="http://www.w3.org/2000/svg" width="%d" height="%d" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="%s" style="%s">%s</svg>',
        $size,
        $size,
        htmlspecialchars($cls, ENT_QUOTES, 'UTF-8'),
        $inlineStyle,
        $inner
    );
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
