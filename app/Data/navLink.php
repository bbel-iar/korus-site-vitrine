<?php

declare(strict_types=1);

if (! function_exists('getNavLinkHeader')) {
    /**
     * Main site navigation used in the header.
     *
     * @return array<int, array<string, mixed>>
     */
    function getNavLinkHeader(): array
    {
        return [
            [
                'label' => 'Accueil',
                'href' => '/',
            ],
            [
                'label' => "L'imprimerie",
                'href' => '/imprimerie',
            ],
            [
                'label' => 'Engagements RSE',
                'href' => '/engagements-rse',
            ],
            [
                'label' => 'Savoir-faire',
                'href' => '/savoir-faire'
            ],
            [
                'label' => 'Services',
                'href' => '/services',
            ],
            [
                'label' => 'Contact / devis',
                'href' => '/contact-devis',
            ],
        ];
    }
}

if (! function_exists('getNavLinkFooter')) {
    /**
     * Footer navigation and ecosystem links.
     *
     * @return array<int, array<string, mixed>>
     */
    function getNavLinkFooter(): array
    {
        return [
            "int"=>[
                [
                    'label' => 'Accueil',
                    'href' => '/',
                ],
                [
                    'label' => "L'imprimerie",
                    'href' => '/imprimerie',
                ],
                [
                    'label' => 'Engagements RSE',
                    'href' => '/engagements-rse',
                ],
                [
                    'label' => 'Savoir-faire',
                    'href' => '/savoir-faire',
                ],
                [
                    'label' => 'Services',
                    'href' => '/services',
                ],
                [
                    'label' => 'Contact / devis',
                    'href' => '/contact-devis',
                ],
            ],
            "ext"=>[
                [
                    'label' => 'Imprimerie A Réaction',
                    'href' => 'https://www.imprimerieareaction.com/',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
                [
                    'label' => 'Korus Imprimerie',
                    'href' => 'https://www.korus-imprimerie.fr/',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
            ]
        ];
    }
}


function getNavLinkKnowhow(): array
{
    return [
        [
            'label' => "Impression numérique et Offset",
            'href' => '/savoir-faire/impression-numerique-et-offset',
        ],
        [
            'label' => 'Embellissement et finitions',
            'href' => '/savoir-faire/embellissement-et-finitions',
        ],
        [
            'label' => 'Grand format',
            'href' => '/savoir-faire/grand-format',
        ],
    ];
}

function getNavLinkServices(): array
{
    return [
        [
            'label' => 'Plateformes Web to print',
            'href' => '/services/plateformes-web-to-print',
        ],
        [
            'label' => 'Logistique et stockage',
            'href' => '/services/logistique-et-stockage',
        ],
        [
            'label' => 'Studio graphique',
            'href' => '/services/studio-graphique',
        ],
    ];
}
