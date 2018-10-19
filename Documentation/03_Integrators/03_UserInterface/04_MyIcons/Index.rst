.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../includes.txt


.. _integrators-installation_myicons

My Icons
========

	:Path:
		Path to your configuration file for including individual icons. Without beginning slash. Default: typo3conf/ext/tsconf/Resources/Private/myPageTreeIcons.php. Copy this file to the fileadmin directory and adapt it to your needs. Example: fileadmin/mytsconf/myPageTreeIcons.php

Your Configuration File
-----------------------

#. Copy Resources/Private/myPageTreeIcons.php to fileadmin/mytsconf

# cp typo3conf/ext/tsconf/Resources/Private/myPageTreeIcons.php fileadmin/mytsconf

#. Copy your icons to fileadmin/mytsconf In the sample below:

- fileadmin/mytsconf/my.gif
- fileadmin/mytsconf/myOtherIcon.gif

#. Adapt the properties to your needs. Be aware, that in the methods below the second parameter
   should not be longer than ten characters

  - Proper: myOthIcon <- 9 characters
  - Not proper: myOtherIcon <- 11 characters

Code Snippet (TYPO3 < 8.x only!)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

You have to adapt the variables in the code snippet below, which are marked red and bold.

::

	$myExtIconPath = t3lib_extMgm::extRelPath( $_EXTKEY ) . '**../fileadmin/mytsconf/** ';
	
	$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		'**My icon** ', '**myIcon** ', $myExtIconPath . '**my.gif** '
	);
	
	$TCA[ 'pages' ][ 'columns' ][ 'module' ][ 'config' ][ 'items' ][] = array(
		'**My other icon** ', '**myOthIcon** ', $myExtIconPath . '**myOtherIcon.gif** '
	);
	
	switch ( true )
	{
		case( $typo3Version < 6000000 ):
			t3lib_SpriteManager::addTcaTypeIcon(
				'pages', 'contains-**myIcon** ', $myExtIconPath . '**my.gif** '
			);
			t3lib_SpriteManager::addTcaTypeIcon(
				'pages', 'contains-**myOthIcon** ', $myExtIconPath . '**myOtherIcon.gif** '
			);
			break;
		default:
			TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
				'pages', 'contains-**myIcon** ', $myExtIconPath . '**my.gif** '
			);
			TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
				'pages', 'contains-**myOthIcon** ', $myExtIconPath . '**myOtherIcon.gif** '
			);
			break;
	}