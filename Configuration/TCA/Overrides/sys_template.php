<?php

// #i0022, 171229, dwildt, +

require_once( PATH_typo3conf . 'ext/tsconf/Configuration/ExtTables/confArray.php' );

if( $confArr[ 'tca_systemplate' ] )
{
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'selectedListStyle' ] = 'width:385px;';
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'itemListStyle' ] = 'width:385px;';
	$GLOBALS[ 'TCA' ][ 'sys_template' ][ 'columns' ][ 'include_static_file' ][ 'config' ][ 'size' ] = '40';
}