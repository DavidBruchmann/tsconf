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
require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/7.6/pageTreeIcons.php' );

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