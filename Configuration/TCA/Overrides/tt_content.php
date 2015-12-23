<?php
defined('TYPO3_MODE') or die();

// Additional fields for the tt_content table
$additionalColumns = array(
    'ce_style' => array(
        'label' => 'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:ce_style_formlabel',
        'exclude' => true,
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:ce_style.0',
                    '0'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:ce_style.1',
                    '1'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:ce_style.2',
                    '2'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:ce_style.3',
                    '3'
                )
            ),
            'default' => '0'
        )
    ),
    'header_style' => array(
        'label' => 'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:header_style_formlabel',
        'exclude' => true,
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:header_style.0',
                    '0'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:header_style.1',
                    '1'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:header_style.2',
                    '2'
                ),
                array(
                    'LLL:EXT:additional_fsc_styles/Resources/Private/Language/locallang_db.xlf:header_style.3',
                    '3'
                )
            ),
            'default' => '0'
        )
    ),
);

// Adding fields to the tt_content table definition in TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'ce_style', '', 'after:layout');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'header', 'header_style', 'after:header_layout');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'headers', 'header_style', 'after:header_layout');


// Add palette - not yet a simple solution found to group layout and ce_style into one pallete
/*
$GLOBALS['TCA']['tt_content']['palettes'] = array_merge(
    $GLOBALS['TCA']['tt_content']['palettes'],
    array(
        'layouts' => array(
            'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                ce_style;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:ce_style_formlabel
            ',
        )
    )
);
*/