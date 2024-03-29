<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_skphotobox_domain_model_photobox'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_skphotobox_domain_model_photobox']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, category, images',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, category, images, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_skphotobox_domain_model_photobox',
				'foreign_table_where' => 'AND tx_skphotobox_domain_model_photobox.pid=###CURRENT_PID### AND tx_skphotobox_domain_model_photobox.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_photobox/Resources/Private/Language/locallang_db.xlf:tx_skphotobox_domain_model_photobox.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'category' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_photobox/Resources/Private/Language/locallang_db.xlf:tx_skphotobox_domain_model_photobox.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_skphotobox_domain_model_category',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'images' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_photobox/Resources/Private/Language/locallang_db.xlf:tx_skphotobox_domain_model_photobox.images',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_skphotobox_domain_model_image',
				'foreign_field' => 'photobox', // uid_foreign
				'foreign_sortby' => 'crdate',
				'foreign_label' => 'title',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'newRecordLinkTitle' => 'Bild hinzufügen',
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1,
					'expandSingle' => 1,
					'useSortable' => 1,
					'elementBrowserAllowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
					'elementBrowserType' => 'file',
					'headerThumbnail' => array(
                        'width' => '45',
                        'height' => '45c',
					),
					'enabledControls' => array(
                        'info' => FALSE,
                        'new' => FALSE,
                        'dragdrop' => TRUE,
                        'sort' => FALSE,
                        'hide' => TRUE,
                        'delete' => TRUE,
                        'localize' => TRUE,
					),
                ),
			),
			$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']

		),
		
	),
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder



$tempColumns = array(

	'images' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_photobox/Resources/Private/Language/locallang_db.xlf:tx_skphotobox_domain_model_photobox.images',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_skphotobox_domain_model_image',
				'foreign_field' => 'photobox',
				'foreign_sortby' => 'crdate',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'newRecordLinkTitle' => 'Bild hinzufügen',
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1,
					'expandSingle' => 1,
					'useSortable' => 1,
					'headerThumbnail' => array(
                        'field' => 'uid',
                        'width' => '45',
                        'height' => '45c',
					),
					'enabledControls' => array(
                        'info' => FALSE,
                        'new' => FALSE,
                        'dragdrop' => TRUE,
                        'sort' => FALSE,
                        'hide' => TRUE,
                        'delete' => TRUE,
                        'localize' => TRUE,
					),
                ),
			),

		),
);


//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAColumns('tx_skphotobox_domain_model_photobox', $tempColumns, 1);
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_language_uid;;;;1-1-1');