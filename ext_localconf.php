<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3_MODE') or die();

ExtensionUtility::configurePlugin(
    'Plan2Net.Lieferant',
    'LieferantList',
    [\Plan2Net\Lieferant\Controller\LieferantController::class => 'lieferantlist', ],
    [\Plan2Net\Lieferant\Controller\LieferantController::class => 'lieferantlist']

);

ExtensionUtility::configurePlugin(
    'Plan2Net.Lieferant',
    'LieferantDetail',
    [\Plan2Net\Lieferant\Controller\LieferantController::class => 'lieferantdetail'],
    [\Plan2Net\Lieferant\Controller\LieferantController::class => 'lieferantdetail']

);

      if (TYPO3_MODE === 'BE') {
        $icons = [


        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            if (!$iconRegistry->isRegistered($identifier)) {
                $iconRegistry->registerIcon(
                    $identifier,
                    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                    ['source' => 'EXT:Lieferant/Resources/Public/Icons/' . $path]
                );
            }
        }
    }

