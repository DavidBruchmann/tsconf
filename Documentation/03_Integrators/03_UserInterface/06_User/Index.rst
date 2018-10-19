.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../includes.txt


.. _integrators-installation_user

User
====


	:AdminPanel:
		Recommended: The backend user will have an adminPanel in the frontend.
	
	:Enable general cache cleaning:
		Recommended: The backend user is allowed to clean the TYPO3 general cache. A thunderbolt - the cache icon - will be displayed in the right top corner.
	
	:Enable system cache cleaning:
		Recommended: if you are integrating extensions and develop TYPO3. A thunderbolt - the cache icon - will be displayed in the right top corner. From TYPO3 version 6.2.
	
	:Default Upload Folder:
		Sets the default upload folder to 1:user_upload/, where 1 is the uid of your fileadmin storage. This option is allowed only, if all backend users have access to fileadmin/user_upload by a filemount! The upload button in content elements is missing without a default upload folder. See details at: http://docs.typo3.org/typo3cms/TSconfigReference/UserTsconfig/Options/
