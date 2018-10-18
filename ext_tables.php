<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}

$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-exit', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-exit.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-rss', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-rss+xml.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'appl-intrnt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-internet.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'calendar', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/office-calendar.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'animator', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/tool-animator.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'balloon', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-conversation-balloon.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Application', 'filter', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-filter.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Code', 'code-class', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-class.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Code', 'code-cntxt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-context.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'cam-photo', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/camera-photo.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'media-dvd', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/media-optical-recordable.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Device', 'speaker', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/speaker.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'call-start', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-start.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'call-stop', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-stop.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-cancel', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-cancel.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-close', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-close.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-ok', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-ok-apply.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'dlg-passwd', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-password.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Dialog', 'help', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/help-hint.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Emblem', 'favorite', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-favorite.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Emblem', 'important', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-important.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_black', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-black.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_blue', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-blue.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_green', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-green.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_red', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-red.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Flag', 'flg_yellow', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-yellow.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_brown', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-brown.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_green', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-green.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_cyan', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-cyan.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_blue', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-blue.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_violet', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-violet.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_red', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-red.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_orange', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-orange.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_yellow', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-yellow.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_bkmrk', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-bookmark.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_dev', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-development.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_docs', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-documents.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_down', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-downloads.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_fvrts', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-favorites.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_imprtt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-important.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_locked', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-locked.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_remote', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-remote.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_sound', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-sound.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_tar', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-tar.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_txt', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-txt.png');
$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Folder', 'fld_video', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-video.png');

$TCA['pages']['columns']['module']['config']['items'][] = array('Games', 'highscore', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/games-highscores.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('Games', 'roll', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/roll.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Library', 'library', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/library.png');

$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'appl-dev', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-development.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'chronom', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/chronometer.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'configure', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/configure.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'bomb', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/edit-bomb.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'home', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/home-mdk.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'prefrncs', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/preferences-system.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-high', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-high.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-low', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-low.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'sec-mdm', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-medium.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'stat-unknw', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/status_unknown.png');
$TCA['pages']['columns']['module']['config']['items'][] = array('System', 'trash', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/user-trash.png');

$TCA['pages']['columns']['module']['config']['items'][] = 
   array('Template', 'tsconf', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

$ICON_TYPES['appl-exit'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-exit.png');
$ICON_TYPES['appl-rss'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/application-rss+xml.png');
$ICON_TYPES['appl-intrnt'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-internet.png');
$ICON_TYPES['calendar'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/office-calendar.png');
$ICON_TYPES['animator'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/tool-animator.png');
$ICON_TYPES['balloon'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-conversation-balloon.png');
$ICON_TYPES['filter'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/view-filter.png');
$ICON_TYPES['code-class'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-class.png');
$ICON_TYPES['code-cntxt'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/code-context.png');
$ICON_TYPES['cam-photo'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/camera-photo.png');
$ICON_TYPES['media-dvd'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/media-optical-recordable.png');
$ICON_TYPES['speaker'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/speaker.png');
$ICON_TYPES['call-start'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-start.png');
$ICON_TYPES['call-stop'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/call-stop.png');
$ICON_TYPES['dlg-cancel'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-cancel.png');
$ICON_TYPES['dlg-close'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-close.png');
$ICON_TYPES['dlg-ok'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-ok-apply.png');
$ICON_TYPES['dlg-passwd'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/dialog-password.png');
$ICON_TYPES['help'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/help-hint.png');
$ICON_TYPES['favorite'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-favorite.png');
$ICON_TYPES['important'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/emblem-important.png');
$ICON_TYPES['highscore'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/games-highscores.png');
$ICON_TYPES['roll'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/roll.png');
$ICON_TYPES['appl-dev'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/applications-development.png');
$ICON_TYPES['chronom'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/chronometer.png');
$ICON_TYPES['configure'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/configure.png');
$ICON_TYPES['bomb'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/edit-bomb.png');
$ICON_TYPES['home'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/home-mdk.png');
$ICON_TYPES['prefrncs'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/preferences-system.png');
$ICON_TYPES['sec-high'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-high.png');
$ICON_TYPES['sec-low'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-low.png');
$ICON_TYPES['sec-mdm'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/security-medium.png');
$ICON_TYPES['stat-unknw'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/status_unknown.png');
$ICON_TYPES['trash'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/user-trash.png');

$ICON_TYPES['flg_black']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-black.png');
$ICON_TYPES['flg_blue']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-blue.png');
$ICON_TYPES['flg_green']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-green.png');
$ICON_TYPES['flg_red']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-red.png');
$ICON_TYPES['flg_yellow']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/flag-yellow.png');

$ICON_TYPES['fld_blue']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-blue.png');
$ICON_TYPES['fld_bkmrk']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-bookmark.png');
$ICON_TYPES['fld_brown']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-brown.png');
$ICON_TYPES['fld_cyan']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-cyan.png');
$ICON_TYPES['fld_dev']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-development.png');
$ICON_TYPES['fld_docs']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-documents.png');
$ICON_TYPES['fld_down']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-downloads.png');
$ICON_TYPES['fld_fvrts']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-favorites.png');
$ICON_TYPES['fld_green']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-green.png');
$ICON_TYPES['fld_imprtt']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-important.png');
$ICON_TYPES['fld_locked']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-locked.png');
$ICON_TYPES['fld_orange']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-orange.png');
$ICON_TYPES['fld']		= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder.png');
$ICON_TYPES['fld_red']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-red.png');
$ICON_TYPES['fld_remote']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-remote.png');
$ICON_TYPES['fld_sound']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-sound.png');
$ICON_TYPES['fld_tar']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-tar.png');
$ICON_TYPES['fld_txt']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-txt.png');
$ICON_TYPES['fld_video']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-video.png');
$ICON_TYPES['fld_violet']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-violet.png');
$ICON_TYPES['fld_yellow']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/folder-yellow.png');

$ICON_TYPES['library']	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/library.png');
$ICON_TYPES['tsconf']    	= array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

?>