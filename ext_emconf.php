<?php

defined('TYPO3') || die();

$EM_CONF[$_EXTKEY] = [
    'title' => 'Helpers',
    'description' => 'A TYPO3 extension with helper traits and utilities.',
    'category' => 'plugin',
    'author' => 'Oliver Kroener',
    'author_email' => 'ok@oliver-kroener.de',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
