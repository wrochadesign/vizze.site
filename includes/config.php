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
