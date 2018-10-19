<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

use Netzmacher\Tsconf\Hooks\ClickMenuAction;

/* * ****************************************************************************
 *
 * INDEX
 *
 * Set TYPO3 version
 * Add page TSconf and user TSconf
 * Add pagetree icons
 * tca_ttcontentimages
 * page_tceform_ttcontent
 * tca_systemplate
 * pagetree_enhanced_context_menu
 * **************************************************************************** */


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;

/* * ****************************************************************************
 * Add page TSconf and user TSconf
 * **************************************************************************** */

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/confArray.php' );

/* * ****************************************************************************
 * Add pagetree icons
 * **************************************************************************** */


/* * ****************************************************************************
 * Page TSConfig
 * **************************************************************************** */
switch( TRUE )
{
	case($typo3Version < 8000000):
		// #t1576, 170930, dwildt, ~
		require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/7.6.php' );
		//require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/IconRegistry.php' );
		break;
	case($typo3Version >= 8000000):
	default:
		// #t1576, 170930, dwildt, +
		require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/PageTreeIcons/Default.php' );
		//require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/IconRegistry.php' );
		break;
}

/* * ****************************************************************************
 * tca_ttcontentimages
 * **************************************************************************** */

// #62476, 141026, dwildt, +
switch( $confArr[ 'tca_ttcontentimages' ] )
{
	case('Disabled'):
		break;
	case('Bootstrap'):
	case('Default (recommended)'):
	default:
		// #i0006, 141208, dwildt, -
		// Breaking: #61785 - loadTCA function in GeneralUtility removed
		//\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'tt_content' );
		// default: $GLOBALS[ 'TCA' ]['tt_content']['columns']['imageheight']['config']['eval'] = 'int';
		unset( $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imageheight' ][ 'config' ][ 'eval' ] );
		unset( $GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagewidth' ][ 'config' ][ 'eval' ] );
		break;
}
switch( $confArr[ 'tca_ttcontentimages' ] )
{
	case('Disabled'):
		break;
	case('Bootstrap'):
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '0' ] = 12;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '1' ] = 12;
		break;
	case('Default (recommended)'):
	default:
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '8' ][ '0' ] = 8;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '8' ][ '1' ] = 8;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '9' ][ '0' ] = 9;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '9' ][ '1' ] = 9;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '10' ][ '0' ] = 10;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '10' ][ '1' ] = 10;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '11' ][ '0' ] = 11;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '11' ][ '1' ] = 11;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '0' ] = 12;
		$GLOBALS[ 'TCA' ][ 'tt_content' ][ 'columns' ][ 'imagecols' ][ 'config' ][ 'items' ][ '12' ][ '1' ] = 12;
		break;
}

/* * ****************************************************************************
 * page_tceform_ttcontent
 * **************************************************************************** */

if( $confArr[ 'page_tceform_ttcontent' ] )
{
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SYS' ][ 'locallangXMLOverride' ][ 'EXT:frontend/Resources/Private/Language/locallang_ttc.xlf' ][] = 'EXT:tsconf/Resources/Private/Language/frontend/locallang_ttc.xlf';
	// #i0013, dwildt, 1+
	$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SYS' ][ 'locallangXMLOverride' ][ 'EXT:cms/locallang_ttc.xlf' ][] = 'EXT:tsconf/Resources/Private/Language/frontend/locallang_ttc.xlf';
}


/* * ****************************************************************************
 * tca_systemplate
 * **************************************************************************** */

if( $confArr[ 'tca_systemplate' ] )
{
	// #i0006, 141208, dwildt, -
	// Breaking: #61785 - loadTCA function in GeneralUtility removed
	//\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA( 'sys_template' );
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'selectedListStyle' ] = 'width:385px;';
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'itemListStyle' ] = 'width:385px;';
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'size' ] = '40';
}

/* * ****************************************************************************
 * pagetree_enhanced_context_menu
 * **************************************************************************** */

// #i0012, 160625, dwildt, Update code
// #70445, 151006, dwildt, 9+
if( TYPO3_MODE == 'BE' && $confArr[ 'pagetree_enhanced_context_menu' ] )
{
	$extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath( $_EXTKEY );
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent(
					'TYPO3.Tsconf.ClickmenuAction', 'Netzmacher\\Tsconf\\Hooks\\ClickMenuAction'
	);
	$GLOBALS[ 'TBE_MODULES' ][ '_configuration' ][ $_EXTKEY ][ 'jsFiles' ][ 'TreeActions' ] = 'EXT:tsconf/Resources/Public/Js/TreeActions.js';
	ClickMenuAction::addContextMenuItems();
}