<?php

// #70445, 151006, dwildt, 3+
if( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/* * ****************************************************************************
 *
 * INDEX
 *
 * pagetree_enhanced_context_menu
 * page_mod_web_layout_menu_function
 * page_mod_web_list_enableButtons
 * tca_ttcontentimages
 * user_options_filelist_enableButtons
 * page_tceform_pages
 * page_tceform_ttcontent
 * page_mod_shared_deflangauge
 * pagetree_enhanced_context_menu
 * user_options_defaultUploadFolder
 * user_options_pagetreeuid
 * **************************************************************************** */


/* * ****************************************************************************
 * pagetree_enhanced_context_menu
 * **************************************************************************** */

// #70445, 151006, dwildt, 6+
//if ( TYPO3_MODE == 'BE' && $_EXTCONF[ 'pagetree_enhanced_context_menu' ] )
//{
//  // ##i0010, dwildt, 3-: Fatal error: Class 'Netzmacher\Tsconf\Xclass\PagetreeNode' not found in /opt/typo3_src-7.6.2/typo3/sysext/core/Classes/Utility/GeneralUtility.php on line 4508
//  $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SYS' ][ 'Objects' ][ 'TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode' ] = array(
//    'className' => '\\Netzmacher\\Tsconf\\Xclass\\PagetreeNode',
//  );
// }

/* * ****************************************************************************
 * page_mod_web_layout_menu_function
 * **************************************************************************** */

if( $_EXTCONF[ 'page_mod_web_layout_menu_function' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/weblayout_menu_functions.txt">' );
}

/* * ****************************************************************************
 * page_mod_web_list_enableButtons
 * **************************************************************************** */

if( $_EXTCONF[ 'page_mod_web_list_enableButtons' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/weblist_enablebuttons.txt">' );
}

/* * ****************************************************************************
 * tca_ttcontentimages
 * **************************************************************************** */

switch( $_EXTCONF[ 'tca_ttcontentimages' ] )
{
  case('Bootstrap'):
    $key = 'tsconf';
    $type = 'setup';
    $content = '
#############################################
## TypoScript added by extension "tsconf"
#############################################
tt_content.image.20.1.file.height.field = imageheight
tt_content.image.20.addClassesCol.override.cObject.10.12 = TEXT
tt_content.image.20.addClassesCol.override.cObject.10.12.value = col-md-1 col-sm-1 col-xs-12'
    ;
    $afterStaticUid = 'defaultContentRendering';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript( $key, $type, $content, $afterStaticUid );
    break;
  case('Disabled'):
  case('Default (recommended)'):
  default:
    break;
}

/* * ****************************************************************************
 * user_options_filelist_enableButtons
 * **************************************************************************** */

if( $_EXTCONF[ 'user_options_filelist_enableButtons' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/filelist_enablebuttons.txt">' );
}

/* * ****************************************************************************
 * page_tceform_pages
 * **************************************************************************** */

// #i0017, 161229, dwildt, 4-
//if( $_EXTCONF[ 'page_tceform_pages' ] )
//{
//  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/tceform_pages.txt">' );
//}

/* * ****************************************************************************
 * page_tceform_ttcontent
 * **************************************************************************** */

if( $_EXTCONF[ 'page_tceform_ttcontent' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/tceform_ttcontent.txt">' );
}

/* * ****************************************************************************
 * page_mod_shared_deflangauge
 * **************************************************************************** */

switch( $_EXTCONF[ 'page_mod_shared_deflangauge' ] )
{
  case('de'):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/mod_shared_defaultlang_de.txt">' );
    break;
  case('en'):
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/Page/mod_shared_defaultlang_en.txt">' );
    break;
  case(null):
  default:
// Don't include nothing
    break;
}

/* * ****************************************************************************
 * pagetree_enhanced_context_menu
 * **************************************************************************** */

if( $_EXTCONF[ 'user_adminpanel' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/adminPanel.txt">' );
}

/* * ****************************************************************************
 * user_clearcachesystem
 * **************************************************************************** */

if( $_EXTCONF[ 'user_clearcachesystem' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/clearCacheSystem.txt">' );
}

/* * ****************************************************************************
 * pagetree_enhanced_context_menu
 * **************************************************************************** */

if( $_EXTCONF[ 'user_options_cache' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/options_cache.txt">' );
}

/* * ****************************************************************************
 * user_options_defaultUploadFolder
 * **************************************************************************** */

if( $_EXTCONF[ 'user_options_defaultUploadFolder' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/options_defaultUploadFolder.txt">' );
}

/* * ****************************************************************************
 * user_options_pagetreeuid
 * **************************************************************************** */

if( $_EXTCONF[ 'user_options_pagetreeuid' ] )
{
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tsconf/Configuration/TSconfig/User/options_pagetreeuid.txt">' );
}