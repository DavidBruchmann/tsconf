<?php
if (!defined ('TYPO3_MODE')) 
{
  die ('Access denied.');
}

  $TCA['pages']['columns']['module']['config']['items'][] = 
     array('Template', 'tsconf', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

  $ICON_TYPES['tsconf'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icons/template.gif');

?>
