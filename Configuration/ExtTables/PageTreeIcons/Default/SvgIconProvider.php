<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIconPath = 'EXT:tsconf/Resources/Public/Icons/PageTree/';

$extIcons = array(
		'email' => array(
				'identifier' => 'contains-email'
				, 'key' => 'email'			// <- Key must be the part behind contains- of the identifier!
				, 'label' => 'Application email'
				, 'source' => $extIconPath . 'typo3-tsconf-email.svg'
		),
		'email2' => array(
				'identifier' => 'contains-email2'
				, 'key' => 'email2'			// <- Key must be the part behind contains- of the identifier!
				, 'label' => 'Application email2'
				, 'source' => $extIconPath . 'typo3-tsconf-email2.svg'
		),
);

foreach( ( array ) $extIcons as $extIcon )
{
	$iconRegistry->registerIcon(
					$extIcon[ 'identifier' ]
					, \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class
					, [ 'source' => $extIcon[ 'source' ] ]
	);
	$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
			$extIcon[ 'label' ]
			, $extIcon[ 'key' ]
			, $extIcon[ 'identifier' ]
	);
	$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];
}