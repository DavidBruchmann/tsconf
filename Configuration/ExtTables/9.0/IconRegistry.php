<?php

if( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

switch( true )
{
  case( $typo3Version < 7005000 ):
    return;
  default:
    // follow the workflow
    break;
}

$iconsPath = 'EXT:tsconf/Resources/Public/Icons/PageTree/';
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance( \TYPO3\CMS\Core\Imaging\IconRegistry::class );

$icons = array(
    'animator' => 'tool-animator.png'
    , 'appl-dev' => 'applications-development.png'
    , 'appl-exit' => 'application-exit.png'
    , 'appl-intnt' => 'applications-internet.png'
    , 'appl-rss' => 'application-rss+xml.png'
    , 'balloon' => 'view-conversation-balloon.png'
    , 'belayout' => 'backend_layout.gif'
    , 'bomb' => 'edit-bomb.png'
    , 'calendar' => 'office-calendar.png'
    , 'call-start' => 'call-start.png'
    , 'call-stop' => 'call-stop.png'
    , 'cam-photo' => 'camera-photo.png'
    , 'chronom' => 'chronometer.png'
    , 'code-class' => 'code-class.png'
    , 'code-cntxt' => 'code-context.png'
    , 'configure' => 'configure.png'
    , 'dlg-cancel' => 'dialog-cancel.png'
    , 'dlg-close' => 'dialog-close.png'
    , 'dlg-ok' => 'dialog-ok-apply.png'
    , 'dlg-passwd' => 'dialog-password.png'
    , 'favorite' => 'emblem-favorite.png'
    , 'filter' => 'view-filter.png'
    , 'fld_bkmrk' => 'folder-bookmark.png'
    , 'fld_blue' => 'folder-blue.png'
    , 'fld_brown' => 'folder-brown.png'
    , 'fld_cyan' => 'folder-cyan.png'
    , 'fld_dev' => 'folder-development.png'
    , 'fld_docs' => 'folder-documents.png'
    , 'fld_down' => 'folder-downloads.png'
    , 'fld_fvrts' => 'folder-favorites.png'
    , 'fld_green' => 'folder-green.png'
    , 'fld_imprtt' => 'folder-important.png'
    , 'fld_locked' => 'folder-locked.png'
    , 'fld_orange' => 'folder-orange.png'
    , 'fld_red' => 'folder-red.png'
    , 'fld_remote' => 'folder-remote.png'
    , 'fld_sound' => 'folder-sound.png'
    , 'fld_tar' => 'folder-tar.png'
    , 'fld_txt' => 'folder-txt.png'
    , 'fld_video' => 'folder-video.png'
    , 'fld_violet' => 'folder-violet.png'
    , 'fld_yellow' => 'folder-yellow.png'
    , 'fld' => 'folder.png'
    , 'flg_black' => 'flag-black.png'
    , 'flg_blue' => 'flag-blue.png'
    , 'flg_green' => 'flag-green.png'
    , 'flg_red' => 'flag-red.png'
    , 'flg_yellow' => 'flag-yellow.png'
    , 'help' => 'help-hint.png'
    , 'highscore' => 'games-highscores.png'
    , 'home' => 'home-mdk.png'
    , 'important' => 'emblem-important.png'
    , 'jquery' => 'jQuery.gif'
    , 'library' => 'library.png'
    , 'media-dvd' => 'media-optical-recordable.png'
    , 'prefrncs' => 'preferences-system.png'
    , 'roll' => 'roll.png'
    , 'sec-high' => 'security-high.png'
    , 'sec-low' => 'security-low.png'
    , 'sec-mdm' => 'security-medium.png'
    , 'speaker' => 'speaker.png'
    , 'stat-unknw' => 'status_unknown.png'
    , 'trash' => 'user-trash.png'
    , 'tsconf' => 'template.gif'
    , 'typo3' => 'typo3.png'
);

foreach( $icons as $class => $file )
{
  $source = $iconsPath . $file;
  $iconRegistry->registerIcon( $class, \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class, ['source' => $source ] );
}