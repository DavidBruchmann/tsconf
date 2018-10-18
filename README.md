Backend Simplifier (tsconf)
===========================
The Backend Simplifier offers the configuration of the eight most commonly used
properties for simplifying the TYPO3 backend by a mouse click. User interface
is the extension manager. Enable page tree uids, use indvidual page tree icons,
activate the extended view and the clipboard and the admin panel for all editors.
Extend the cache thunderbolts with one for the system cache.
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
Versions 0.0.4 - 9.0.0 have been completely provided by Dirk Wildt (Die Netzmacher).   
These Versions have been downloaded here: https://extensions.typo3.org/extension/tsconf/  

The versions provided here are copies but versioned and tagged with git,
with this additional text-file `README.md` and **composer-support**.  

To install via composer use:  
```
composer require wdb/tsconf
```

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
9.0.0 / stable  
Supported TYPO3 version: 6.2.0 - 9.0.99  
December 30, 2017  
**Upgrade for TYPO3 9.0.**  
 - This version has a bug: The tsconf page tree icons won't displayed. I [Dirk Wildt] will fix it soon as possible.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.2.4 / stable  
Supported TYPO3 version: 6.2.0 - 8.9.99  
December 29, 2017  
**Improvement:**  
 - Move some code from ext_tables.php to TCA/Overrides.  
 - Bugfix: extension icon was missing.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.2.2 / stable  
Supported TYPO3 version: 6.2.0 - 8.9.99  
October 05, 2017  
**IMPROVEMENT**  
 - Extension manager > Reduce headers: Header 1 will not longer removed. This is in respect to fluid_styled_content. 0 (Default) is wrapped with h2.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.2.1 / stable  
Supported TYPO3 version: 6.2.0 - 8.9.99  
October 01, 2017  
 - BUGFIX for TYPO3 6.x  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.2.0 / stable  
Supported TYPO3 version: 6.2.0 - 8.9.99  
September 30, 2017  
 - UPGRADE for TYPO3 8.7.  
 - Compatible with TYPO3 6.2 and 7.6.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.1.1 / stable  
Supported TYPO3 version: 6.2.0 - 7.6.99  
December 14, 2016  
 - TYPO3 7.6 Compatibility.  
 - Bugfix pagetree icons.  
 - ReST documentation.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
7.0.0 / stable  
Supported TYPO3 version: 6.0.0 - 7.6.99  
June 28, 2016  
**COMPATIBILITY:**  
 - TYPO3 7.x is supported  
 - TYPO3 4.x isn't supported any longer.  
**Removed:**  
 - simplify page properties.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
6.2.1 / stable  
Supported TYPO3 version: 4.5.0 - 7.0.99  
October 21, 2015  
**Bugfix:**
 - JavaScript for enhanced page tree menu was misssing  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
6.2.0 / stable  
Supported TYPO3 version: 4.5.0 - 7.0.99  
October 06, 2015  
**New feature:**  
 - pagetree with enhanced context menu. Thanks to Andreas Kießling/pluspol for this new feature.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
6.1.0 / stable  
Supported TYPO3 version: 4.5.0 - 7.0.99  
April 01, 2015  
**New Feature:**  
 - Own Icons. Bugfix: TYPO3 4.x  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
6.0.1 / stable  
Supported TYPO3 version: 4.5.0 - 7.0.99  
January 20, 2015  
**Compatibility** from TYPO3 4.5 to 7.0  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
6.0.0 / stable  
Supported TYPO3 version: 6.0.0 - 7.0.99  
December 16, 2014  
**New feature:**  
 - default upload folder  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.6.0 / stable  
Supported TYPO3 version: 6.0.0 - 7.0.99  
December 09, 2014  
**Compatible** with TYPO3 7.0  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.5.2 / stable  
Supported TYPO3 version: 6.0.0 - 6.2.99  
November 22, 2014  
**Bugfix:**  
 - Class t3lib_extMgm is moved to \TYPO3\CMS\Core\Utility\ExtensionManagementUtility
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.5.1 / stable  
Supported TYPO3 version: 6.0.0 - 6.2.99  
October 29, 2014  
**Bugfix:**  
 - 1.5.x is running in TYPO3 from 6.x only.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.5.0 / stable  
Supported TYPO3 version: 4.5.0 - 6.2.99  
October 27, 2014  
**tt_content:**  
 - enhance the maximum for managing images from 7 to 12. Enables image cutting.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.4.4 / stable  
Supported TYPO3 version: 4.5.0 - 6.2.99  
July 07, 2014  
**NEW FEATURES:**  
 - default localisation icon and label  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.4.3 / stable  
Supported TYPO3 version: 4.5.0 - 6.2.99  
June 05, 2014  
**Improvement:**  
 - &Uuml;berschrift -> Ãœberschrift  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.4.2 / stable  
Supported TYPO3 version: 4.5.0 - 6.2.99  
June 01, 2014  
**NEW FEATURE:**  
 - options.clearCache.system is added and is enabled by default  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.4.0 / stable  
Supported TYPO3 version: 4.5.0 - 6.2.99  
May 07, 2014  
**NEW FEATURE:**  
 - TYPO3 6.2  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.3.1 / stable  
Supported TYPO3 version: 4.5.0 - 6.1.99  
January 25, 2014  
**FEATURE:**  
 - Big form fields for including TypoScript static templates  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.3.0 / stable  
Supported TYPO3 version: 4.5.0 - 6.1.99  
January 25, 2014  
**FEATURE:**  
 - Big form fields for including TypoScript static templates  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.2.0 / stable  
Supported TYPO3 version: 4.5.0 - 6.1.99  
January 13, 2014  
**Feature:**
 - TYPO3 6.1  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.1.1 / stable  
February 13, 2013  
**New icons:**  
 - backend_layout, jQuery and TYPO3  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.1.0 / stable  
February 01, 2013  
**IMPROVEMENT:**  
 - Downgrade for TYPO3 4.4  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.0.1 / stable  
March 20, 2012  
**IMPROVEMENT:**  
 - Usage of $ICON_TYPES is deprecated since 4.4  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
1.0.0 / stable  
February 23, 2012  
**NEW FEATURES**
 - 34 new icons  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.1.3 / stable  
May 05, 2011  
**IMPROVEMENTS:**  
 - 27 new icons: flags, folders and library.  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.1.2 / stable  
March 07, 2011  
**New feature:**  
 - Page tree: TypoScript template icon
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.1.1 / stable  
February 27, 2011  
**SEO:**  
 - Extension title is moved from tsConf to tsConfig  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.1.0 / stable  
February 27, 2011  
**NEW FEATURES:**  
 - Module web list: activate Extended view and Show clipboard by default.  
 - Module file list: activate Extended view, Display thumbnails and Show clipboard by default  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.0.7 / stable  
February 22, 2011  
 - **Corporate Design:** Netzmacher icon is moved to TYPO3 icon  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.0.5 / stable  
January 20, 2011  
**INITIAL RELEASE:** Configure your default userTSconf and pageTSconf supported by the extension manager!  
**BUGFIX:** proper manual  
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  
0.0.4 / stable  
January 20, 2011  
**INITIAL RELEASE:** Configure your default userTSconf and pageTSconf supported by the extension manager  
