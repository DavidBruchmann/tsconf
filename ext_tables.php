<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * ****************************************************************************
 * TYPO3 Version
 * **************************************************************************** */

list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;

switch( TRUE )
{
	case($typo3Version < 8007000):
		require( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/7.6/index.php' );
		break;
	case($typo3Version < 9000000):
		require( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/8.7/index.php' );
		break;
	case($typo3Version >= 9000000):
	default:
		require( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/9.0/index.php' );
		break;
}