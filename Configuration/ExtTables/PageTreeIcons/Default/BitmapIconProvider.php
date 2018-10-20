<?php

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$extIconPath = 'EXT:tsconf/Resources/Public/Icons/PageTree/';

$extIcons = array(
		'animator' => array(
				'identifier' => 'contains-animator'
				, 'key' => 'animator'			// <- Key must be the part behind contains- of the identifier!
				, 'label' => 'Application animator'
				, 'source' => $extIconPath . 'tool-animator.png'
		),
		'balloon' => array(
				'identifier' => 'contains-balloon'
				, 'key' => 'balloon'
				, 'label' => 'Application balloon'
				, 'source' => $extIconPath . 'view-conversation-balloon.png'
		),
		'calendar' => array(
				'identifier' => 'contains-calendar'
				, 'key' => 'calendar'
				, 'label' => 'Application calendar'
				, 'source' => $extIconPath . 'office-calendar.png'
		),
		'appl-exit' => array(
				'identifier' => 'contains-appl-exit'
				, 'key' => 'appl-exit'
				, 'label' => 'Application exit'
				, 'source' => $extIconPath . 'application-exit.png'
		),
		'filter' => array(
				'identifier' => 'contains-filter'
				, 'key' => 'filter'
				, 'label' => 'Application filter'
				, 'source' => $extIconPath . 'view-filter.png'
		),
		'appl-rss' => array(
				'identifier' => 'contains-appl-rss'
				, 'key' => 'appl-rss'
				, 'label' => 'Application rss'
				, 'source' => $extIconPath . 'application-rss+xml.png'
		),
		'appl-intnt' => array(
				'identifier' => 'contains-appl-intnt'
				, 'key' => 'appl-intnt'
				, 'label' => 'Application web'
				, 'source' => $extIconPath . 'applications-internet.png'
		),
		'code-class' => array(
				'identifier' => 'contains-code-class'
				, 'key' => 'code-class'
				, 'label' => 'Code class'
				, 'source' => $extIconPath . 'code-class.png'
		),
		'code-cntxt' => array(
				'identifier' => 'contains-code-cntxt'
				, 'key' => 'code-cntxt'
				, 'label' => 'Code context'
				, 'source' => $extIconPath . 'code-context.png'
		),
		'media-dvd' => array(
				'identifier' => 'contains-media-dvd'
				, 'key' => 'media-dvd'
				, 'label' => 'Device media recorder'
				, 'source' => $extIconPath . 'media-optical-recordable.png'
		),
		'cam-photo' => array(
				'identifier' => 'contains-cam-photo'
				, 'key' => 'cam-photo'
				, 'label' => 'Device photo'
				, 'source' => $extIconPath . 'camera-photo.png'
		),
		'speaker' => array(
				'identifier' => 'contains-speaker'
				, 'key' => 'speaker'
				, 'label' => 'Device speaker'
				, 'source' => $extIconPath . 'speaker.png'
		),
		'call-start' => array(
				'identifier' => 'contains-call-start'
				, 'key' => 'call-start'
				, 'label' => 'Dialog call start'
				, 'source' => $extIconPath . 'call-start.png'
		),
		'call-stop' => array(
				'identifier' => 'contains-call-stop'
				, 'key' => 'call-stop'
				, 'label' => 'Dialog call stop'
				, 'source' => $extIconPath . 'call-stop.png'
		),
		'dlg-cancel' => array(
				'identifier' => 'contains-dlg-cancel'
				, 'key' => 'dlg-cancel'
				, 'label' => 'Dialog cancel'
				, 'source' => $extIconPath . 'dialog-cancel.png'
		),
		'dlg-close' => array(
				'identifier' => 'contains-dlg-close'
				, 'key' => 'dlg-close'
				, 'label' => 'Dialog close'
				, 'source' => $extIconPath . 'dialog-close.png'
		),
		'help' => array(
				'identifier' => 'contains-help'
				, 'key' => 'help'
				, 'label' => 'Dialog help'
				, 'source' => $extIconPath . 'help-hint.png'
		),
		'dlg-ok' => array(
				'identifier' => 'contains-dlg-ok'
				, 'key' => 'dlg-ok'
				, 'label' => 'Dialog ok'
				, 'source' => $extIconPath . 'dialog-ok-apply.png'
		),
		'dlg-passwd' => array(
				'identifier' => 'contains-dlg-passwd'
				, 'key' => 'dlg-passwd'
				, 'label' => 'Dialog password'
				, 'source' => $extIconPath . 'dialog-password.png'
		),
		'favorite' => array(
				'identifier' => 'contains-favorite'
				, 'key' => 'favorite'
				, 'label' => 'Emblem favorite'
				, 'source' => $extIconPath . 'emblem-favorite.png'
		),
		'important' => array(
				'identifier' => 'contains-important'
				, 'key' => 'important'
				, 'label' => 'Emblem important'
				, 'source' => $extIconPath . 'emblem-important.png'
		),
		'flg_black' => array(
				'identifier' => 'contains-flg_black'
				, 'key' => 'flg_black'
				, 'label' => 'Flag black'
				, 'source' => $extIconPath . 'flag-black.png'
		),
		'flg_blue' => array(
				'identifier' => 'contains-flg_blue'
				, 'key' => 'flg_blue'
				, 'label' => 'Flag blue'
				, 'source' => $extIconPath . 'flag-blue.png'
		),
		'flg_green' => array(
				'identifier' => 'contains-flg_green'
				, 'key' => 'flg_green'
				, 'label' => 'Flag green'
				, 'source' => $extIconPath . 'flag-green.png'
		),
		'flg_red' => array(
				'identifier' => 'contains-flg_red'
				, 'key' => 'flg_red'
				, 'label' => 'Flag red'
				, 'source' => $extIconPath . 'flag-red.png'
		),
		'flg_yellow' => array(
				'identifier' => 'contains-flg_yellow'
				, 'key' => 'flg_yellow'
				, 'label' => 'Flag yellow'
				, 'source' => $extIconPath . 'flag-yellow.png'
		),
		'fld_blue' => array(
				'identifier' => 'contains-fld_blue'
				, 'key' => 'fld_blue'
				, 'label' => 'Folder blue'
				, 'source' => $extIconPath . 'folder-blue.png'
		),
		'fld_bkmrk' => array(
				'identifier' => 'contains-fld_bkmrk'
				, 'key' => 'fld_bkmrk'
				, 'label' => 'Folder bookmark '
				, 'source' => $extIconPath . 'folder-bookmark.png'
		),
		'fld_brown' => array(
				'identifier' => 'contains-fld_brown'
				, 'key' => 'fld_brown'
				, 'label' => 'Folder brown'
				, 'source' => $extIconPath . 'folder-brown.png'
		),
		'fld_cyan' => array(
				'identifier' => 'contains-fld_cyan'
				, 'key' => 'fld_cyan'
				, 'label' => 'Folder cyan'
				, 'source' => $extIconPath . 'folder-cyan.png'
		),
		'fld' => array(
				'identifier' => 'contains-fld'
				, 'key' => 'fld'
				, 'label' => 'Folder default'
				, 'source' => $extIconPath . 'folder.png'
		),
		'fld_dev' => array(
				'identifier' => 'contains-fld_dev'
				, 'key' => 'fld_dev'
				, 'label' => 'Folder development'
				, 'source' => $extIconPath . 'folder-development.png'
		),
		'fld_docs' => array(
				'identifier' => 'contains-fld_docs'
				, 'key' => 'fld_docs'
				, 'label' => 'Folder documents'
				, 'source' => $extIconPath . 'folder-documents.png'
		),
		'fld_down' => array(
				'identifier' => 'contains-fld_down'
				, 'key' => 'fld_down'
				, 'label' => 'Folder downloads'
				, 'source' => $extIconPath . 'folder-downloads.png'
		),
		'fld_fvrts' => array(
				'identifier' => 'contains-fld_fvrts'
				, 'key' => 'fld_fvrts'
				, 'label' => 'Folder favorites'
				, 'source' => $extIconPath . 'folder-favorites.png'
		),
		'fld_green' => array(
				'identifier' => 'contains-fld_green'
				, 'key' => 'fld_green'
				, 'label' => 'Folder green'
				, 'source' => $extIconPath . 'folder-green.png'
		),
		'fld_imprtt' => array(
				'identifier' => 'contains-fld_imprtt'
				, 'key' => 'fld_imprtt'
				, 'label' => 'Folder important'
				, 'source' => $extIconPath . 'folder-important.png'
		),
		'fld_locked' => array(
				'identifier' => 'contains-fld_locked'
				, 'key' => 'fld_locked'
				, 'label' => 'Folder locked'
				, 'source' => $extIconPath . 'folder-locked.png'
		),
		'fld_orange' => array(
				'identifier' => 'contains-fld_orange'
				, 'key' => 'fld_orange'
				, 'label' => 'Folder orange'
				, 'source' => $extIconPath . 'folder-orange.png'
		),
		'fld_red' => array(
				'identifier' => 'contains-fld_red'
				, 'key' => 'fld_red'
				, 'label' => 'Folder red'
				, 'source' => $extIconPath . 'folder-red.png'
		),
		'fld_remote' => array(
				'identifier' => 'contains-fld_remote'
				, 'key' => 'fld_remote'
				, 'label' => 'Folder remote'
				, 'source' => $extIconPath . 'folder-remote.png'
		),
		'fld_sound' => array(
				'identifier' => 'contains-fld_sound'
				, 'key' => 'fld_sound'
				, 'label' => 'Folder sound'
				, 'source' => $extIconPath . 'folder-sound.png'
		),
		'fld_tar' => array(
				'identifier' => 'contains-fld_tar'
				, 'key' => 'fld_tar'
				, 'label' => 'Folder tar'
				, 'source' => $extIconPath . 'folder-tar.png'
		),
		'fld_txt' => array(
				'identifier' => 'contains-fld_txt'
				, 'key' => 'fld_txt'
				, 'label' => 'Folder txt'
				, 'source' => $extIconPath . 'folder-txt.png'
		),
		'fld_video' => array(
				'identifier' => 'contains-fld_video'
				, 'key' => 'fld_video'
				, 'label' => 'Folder video'
				, 'source' => $extIconPath . 'folder-video.png'
		),
		'fld_violet' => array(
				'identifier' => 'contains-fld_violet'
				, 'key' => 'fld_violet'
				, 'label' => 'Folder violet'
				, 'source' => $extIconPath . 'folder-violet.png'
		),
		'fld_yellow' => array(
				'identifier' => 'contains-fld_yellow'
				, 'key' => 'fld_yellow'
				, 'label' => 'Folder yellow'
				, 'source' => $extIconPath . 'folder-yellow.png'
		),
		'highscore' => array(
				'identifier' => 'contains-highscore'
				, 'key' => 'highscore'
				, 'label' => 'Games highscore'
				, 'source' => $extIconPath . 'games-highscores.png'
		),
		'roll' => array(
				'identifier' => 'contains-roll'
				, 'key' => 'roll'
				, 'label' => 'Games roll'
				, 'source' => $extIconPath . 'roll.png'
		),
		'jquery' => array(
				'identifier' => 'contains-jquery'
				, 'key' => 'jquery'
				, 'label' => 'jQuery'
				, 'source' => $extIconPath . 'jQuery.gif'
		),
		'library' => array(
				'identifier' => 'contains-library'
				, 'key' => 'library'
				, 'label' => 'Library'
				, 'source' => $extIconPath . 'library.png'
		),
		'bomb' => array(
				'identifier' => 'contains-bomb'
				, 'key' => 'bomb'
				, 'label' => 'System bomb'
				, 'source' => $extIconPath . 'edit-bomb.png'
		),
		'chronom' => array(
				'identifier' => 'contains-chronom'
				, 'key' => 'chronom'
				, 'label' => 'System chronometer'
				, 'source' => $extIconPath . 'chronometer.png'
		),
		'configure' => array(
				'identifier' => 'contains-configure'
				, 'key' => 'configure'
				, 'label' => 'System configure'
				, 'source' => $extIconPath . 'configure.png'
		),
		'appl-dev' => array(
				'identifier' => 'contains-appl-dev'
				, 'key' => 'appl-dev'
				, 'label' => 'System development'
				, 'source' => $extIconPath . 'applications-development.png'
		),
		'home' => array(
				'identifier' => 'contains-home'
				, 'key' => 'home'
				, 'label' => 'System home'
				, 'source' => $extIconPath . 'home-mdk.png'
		),
		'prefrncs' => array(
				'identifier' => 'contains-prefrncs'
				, 'key' => 'prefrncs'
				, 'label' => 'System preferences'
				, 'source' => $extIconPath . 'preferences-system.png'
		),
		'sec-high' => array(
				'identifier' => 'contains-sec-high'
				, 'key' => 'sec-high'
				, 'label' => 'System security-high'
				, 'source' => $extIconPath . 'security-high.png'
		),
		'sec-low' => array(
				'identifier' => 'contains-sec-low'
				, 'key' => 'sec-low'
				, 'label' => 'System security-low'
				, 'source' => $extIconPath . 'security-low.png'
		),
		'sec-mdm' => array(
				'identifier' => 'contains-sec-mdm'
				, 'key' => 'sec-mdm'
				, 'label' => 'System security-medium'
				, 'source' => $extIconPath . 'security-medium.png'
		),
		'stat-unknw' => array(
				'identifier' => 'contains-stat-unknw'
				, 'key' => 'stat-unknw'
				, 'label' => 'System status unknown'
				, 'source' => $extIconPath . 'status_unknown.png'
		),
		'trash' => array(
				'identifier' => 'contains-trash'
				, 'key' => 'trash'
				, 'label' => 'System trash'
				, 'source' => $extIconPath . 'user-trash.png'
		),
		'belayout' => array(
				'identifier' => 'contains-belayout'
				, 'key' => 'belayout'
				, 'label' => 'TYPO3 backend-layouts'
				, 'source' => $extIconPath . 'backend_layout.gif'
		),
		'typo3' => array(
				'identifier' => 'contains-typo3'
				, 'key' => 'typo3'
				, 'label' => 'TYPO3 logo'
				, 'source' => $extIconPath . 'typo3.png'
		),
		'tsconf' => array(
				'identifier' => 'contains-tsconf'
				, 'key' => 'tsconf'
				, 'label' => 'TYPO3 template'
				, 'source' => $extIconPath . 'template.gif'
		),
);

foreach( ( array ) $extIcons as $extIcon )
{
	$iconRegistry->registerIcon(
					$extIcon[ 'identifier' ]
					, \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class
					, [ 'source' => $extIcon[ 'source' ] ]
	);
	$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
			$extIcon[ 'label' ]
			, $extIcon[ 'key' ]
			, $extIcon[ 'identifier' ]
	);
	$TCA[ 'pages' ][ 'ctrl' ][ 'typeicon_classes' ][ $extIcon[ 'identifier' ] ] = $extIcon[ 'identifier' ];
}