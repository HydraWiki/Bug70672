<?php
/**
 * Bug70672
 * Bug70672 Mediawiki Settings
 *
 * @author		Alexia E. Smith
 * @license		LGPL v3.0
 * @package		Bug70672
 * @link		https://github.com/Alexia/Bug70672
 *
 **/

/******************************************/
/* Credits								  */
/******************************************/
$credits = [
	'path'				=> __FILE__,
	'name'				=> 'Bug70672',
	'author'			=> 'Alexia E. Smith',
	'descriptionmsg'		=> 'bug70672_description',
	'version'			=> '1.0'
];
$wgExtensionCredits['other'][] = $credits;


/******************************************/
/* Language Strings, Page Aliases, Hooks  */
/******************************************/
$extDir = __DIR__;

$wgExtensionMessagesFiles['Bug70672']		= "{$extDir}/Bug70672.i18n.php";
$wgMessagesDirs['Bug70672']			= "{$extDir}/i18n";

$wgAutoloadClasses['Bug70672Hooks']		= "{$extDir}/Bug70672.hooks.php";

$wgHooks['PageContentSave'][]			= 'Bug70672Hooks::onPageContentSave';
