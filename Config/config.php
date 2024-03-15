<?php

return [
    'name'        => 'Mautic Check',
    'description' => 'Mautic Check is a plugin that checks quality and security issues in Plugins.',
    'version'     => '1.0.0',
    'author'      => 'Lenon Leite - lenonleite',
    'services'    => [
        'integrations' => [
            'mautic.integration.mauticchecker' => [
                'class' => \MauticPlugin\MauticCheckerBundle\Integration\MauticCheckerIntegration::class,
                'tags'  => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            'mautic.integration.mauticchecker.configuration' => [
                'class' => \MauticPlugin\MauticCheckerBundle\Integration\Support\ConfigSupport::class,
                'tags'  => [
                    'mautic.config_integration',
                ],
            ],
            'mautic.integration.mauticchecker.config' => [
                'class' => \MauticPlugin\MauticCheckerBundle\Integration\Config::class,
                'tags'  => [
                    'mautic.integrations.helper',
                ],
            ],
        ],
        'commands' => [
            'mautic.check.phpstan' => [
                'tag'       => 'console.command',
                'class'     => \MauticPlugin\MauticCheckerBundle\Command\PHPStanCommand::class,
                'arguments' => [
                    'mautic.helper.paths',
                    'mautic.helper.core_parameters',
                ],
            ],
        ],
    ],
];
