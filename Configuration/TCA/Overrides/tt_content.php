<?php

// #i0022, 171229, dwildt, +

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/confArray.php' );

switch( $confArr[ 'tca_ttcontentimages' ] )
{
	case('Disabled'):
		break;
	case('Bootstrap'):
	case('Default (recommended)'):
	default:
		unset( $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'eval' ] );
		unset( $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'eval' ] );
		break;
}

switch( $confArr[ 'tca_ttcontentimages' ] )
{
	case('Disabled'):
		break;
	case('Bootstrap'):
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'Bootstrap (tsconf)',
				'--div--'
						]
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'12'
				, '12'
						]
		);
		break;
	case('Default (recommended)'):
	default:
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'Foundation (tsconf)',
				'--div--'
						]
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'9'
				, '9'
						]
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'10'
				, '10'
						]
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'11'
				, '11'
						]
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
						'tt_content'
						, 'imagecols'
						, [
				'12'
				, '12'
						]
		);
		break;
}
