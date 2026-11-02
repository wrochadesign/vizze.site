<?php

/**
 * Vizze Public Site - Global Configuration
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

/**
 * Catálogo Oficial de Planos SaaS
 */
function getSaaSPlans(): array
{
    return [
        'solo_mei' => [
            'id'             => 'solo_mei',
            'name'           => 'Vizze Solo MEI',
            'headline'       => 'Para especialistas e autônomos que atendem em cadeira solo ou a domicílio',
            'monthly_price'  => 59,
            'annual_price'   => 47, // 20% OFF
            'period_label'   => '/mês',
            'badge'          => 'Plano Solo MEI',
            'popular'        => false,
            'color'          => 'sand',
            'features'       => [
                '1 profissional autônomo',
                'Página exclusiva e link na bio (@seunome)',
                'Agenda individual web & mobile',
                'Atendimento presencial e a domicílio',
                'Lembretes automáticos via WhatsApp',
                'Histórico e carteira de clientes própria',
                'Sem taxa de adesão ou fidelidade'
            ],
            'limitations'    => [
                'Sem chamada na TV ou Totem de entrada',
                'Sem colaboradores adicionais'
            ],
            'cta'            => 'Começar 14 dias grátis',
            'checkout_param' => 'solo_mei'
        ],
        'starter' => [
            'id'             => 'starter',
            'name'           => 'Vizze Starter Unidade',
            'headline'       => 'Para pequenos estúdios e barbearias com até 3 profissionais parceiros',
            'monthly_price'  => 99,
            'annual_price'   => 79,
            'period_label'   => '/mês',
            'badge'          => 'Até 3 Profissionais',
            'popular'        => false,
            'color'          => 'mint',
            'features'       => [
                'Até 3 profissionais simultâneos',
                'Grade multi-cadeiras sincronizada',
                'Cálculo e divisão de comissões',
                'Catálogo de serviços e preços por profissional',
                'Relatórios de caixa e fechamento diário',
                'Programa de fidelidade VIZ básico',
                'Suporte comercial via WhatsApp'
            ],
            'limitations'    => [
                'Sem chamada na TV ou Totem de entrada'
            ],
            'cta'            => 'Experimentar Starter',
            'checkout_param' => 'starter'
        ],
        'pro' => [
            'id'             => 'pro',
            'name'           => 'Vizze Pro Multi-Agenda + TV',
            'headline'       => 'O ecossistema completo com Smart TV e Totem. A escolha nº 1 dos negócios locais.',
            'monthly_price'  => 149,
            'annual_price'   => 119,
            'period_label'   => '/mês',
            'badge'          => 'Mais Escolhido · Recomendado',
            'popular'        => true,
            'color'          => 'indigo',
            'features'       => [
                'Profissionais e cadeiras ilimitadas',
                'Fila em tempo real e chamada na Smart TV',
                'Totem de auto check-in multimodal (QR / Código)',
                'Stories 24h na vitrine do app do cliente',
                'Controle automático de comissões e repasses',
                'Carteira de Fidelidade VIZ completa',
                'Aviso de chegada antecipada ("Já cheguei")',
                'Suporte prioritário via WhatsApp dedicado'
            ],
            'limitations'    => [],
            'cta'            => 'Contratar Vizze Pro',
            'checkout_param' => 'pro'
        ],
        'enterprise' => [
            'id'             => 'enterprise',
            'name'           => 'Vizze Enterprise Multi-Salas',
            'headline'       => 'Para franquias, holdings multi-lojas e clínicas integradas com alta demanda',
            'monthly_price'  => 229,
            'annual_price'   => 183,
            'period_label'   => '/mês',
            'badge'          => 'Holding & Franquias',
            'popular'        => false,
            'color'          => 'ink',
            'features'       => [
                'Holding Multi-Negócios unificada',
                'Múltiplas telas de TV e totens por unidade',
                'Acesso corporativo (Diretoria, Gestores e Equipe)',
                'DRE e faturamento consolidado de todas as lojas',
                'Integração com ERP Bling e emissão fiscal',
                'Treinamento operacional para a equipe',
                'Gerente de conta exclusivo'
            ],
            'limitations'    => [],
            'cta'            => 'Falar com Consultor',
            'checkout_param' => 'enterprise'
        ]
    ];
}
