<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "Lieferant".
 *
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Lieferant',
    'description' => 'Lieferant',
    'category' => 'frontend',
    'author' => 'Mathias Schaller',
    'author_email' => 'mathias.schaller@gmx.at',
    'author_company' => 'mathias.schaller@gmx.at',
    'state' => 'stable',
    'priority' => '',
    'module' => '',
    'state' => 'excludeFromUpdates',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.1.3',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.99.99',
        ],
        'conflicts' => [],
    ],
    'autoload' => [
        'psr-4' => ['Plan2Net\\Lieferant\\' => 'Classes'],
    ],
];
