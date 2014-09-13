<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SoerenKroell.' . $_EXTKEY,
	'Photobox',
	array(
		'Photobox' => 'list, show',
		'Image' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Photobox' => '',
		'Image' => '',
		
	)
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder