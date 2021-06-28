<?php
defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:lieferant/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl' => [
        'title' => $ll . 'lieferant_label',
        'label' => 'title',  
        'slug' => 'slug',
        'produkte' => 'produkte',
        'region' => 'region',
        'image' => 'image',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',


        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'typeicon_classes' => [
            'default' => 'ext-lieferant_domain_model_lieferant'
        ],
        'hideTable' => false,
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,title,title2,image'
    ],
    'columns' => [
        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ]
        ],
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_lieferant_domain_model_lieferant',
                'foreign_table_where' => 'AND tx_lieferant_domain_model_lieferant.pid=###CURRENT_PID### AND tx_lieferant_domain_model_lieferant.sys_language_uid IN (-1,0)',
                'default' => 0,
            ]
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'title' => [
            'exclude' => false,
            'label' => $ll . 'lieferant_lieferant.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],
        'slug'       => [
            'exclude'     => false,
            'label'       => 'URL-Segment',
            'config'      => [
                'type'              => 'slug',
                'generatorOptions'  => [
                    'fields'         => ['title'],
                    'fieldSeparator' => '/',
                    'replacements'   => [
                        '/' => '',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval'              => 'unique',
                'default'           => '',
            ],
        ],
        'Produkte'       => [
            'exclude' => false,
            'label' => $ll . 'lieferant_lieferant.produkte',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ]
        ],

        'region' => [
            'exclude' => true,
            'label' => $ll . 'lieferant.region_label',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_lieferant_domain_model_region',
                'maxitems' => 1,
                'minitems' => 0,
                'foreign_table' => 'tx_lieferant_domain_model_lieferant',
                'foreign_table_where' => ' AND (lieferant.region.sys_language_uid IN (-1,0) OR tx_lieferant_domain_model_lieferant.l10n_parent = 0) ORDER BY tx_lieferant_domain_model_lieferant.title',

                'size' => 10,

                'fieldInformation' => [
                    'tagInformation' => [
                        'renderType' => 'StaticText',
                        'options' => [
                            'labels' => [
                                [
                                    'label' => '',
                                    'bold' => true,
                                    'italic' => true,
                                ],
                            ],
                        ],
                    ],
                ],

                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                        'options' => [
                            'type' => 'popup',
                            'title' => $ll . 'tx_lieferant.edit',
                            'module' => [
                                'name' => 'wizard_edit',
                            ],
                            'popup_onlyOpenIfSelected' => true,
                            'icon' => 'actions-open',
                            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],

        'image' => [
            'exclude' => true,
            'label' => $ll . 'lieferant.image_label',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'fal_media',
                [
                    'behaviour' => [
                        'allowLanguageSynchronization' => true,
                    ],
                    'appearance' => [
                        'createNewRelationLinkTitle' => $ll . 'lieferant_domain_model_lieferant.fal_media.add',
                        'showPossibleLocalizationRecords' => true,
                        'showRemovedLocalizationRecords' => true,
                        'showAllLocalizationLink' => true,
                        'showSynchronizationLink' => true
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'image',
                        'tablenames' => 'tx_lieferant_domain_model_lieferant',
                        'table_local' => 'sys_file',
                    ],
                    // custom configuration for displaying fields in the overlay/reference table
                    // to use the newsPalette and imageoverlayPalette instead of the basicoverlayPalette
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_UNKNOWN => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ]
                        ],
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext']
            )
        ],

    ],
    'types' => [
        0 => [
            'showitem' => 'uri, --palette--;;paletteCore,title,slug,image,region'
        ]
    ],
    'palettes' => [
        'paletteCore' => [
            'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ],
    ]
];
