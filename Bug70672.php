<?php
/**
 * Bug70672
 * Bug70672 Mediawiki Settings
 *
 * @author		Alexia E. Smith
 * @copyright	(c) 2014 Curse Inc.
 * @license		All Rights Reserved
 * @package		Bug70672
 * @link		http://www.curse.com/
 *
 **/

/******************************************/
/* Credits								  */
/******************************************/
$credits = [
	'path'				=> __FILE__,
	'name'				=> 'Bug70672',
	'author'			=> 'Alexia E. Smith',
	'descriptionmsg'	=> 'bug70672_description',
	'version'			=> '1.0'
];
$wgExtensionCredits['other'][] = $credits;


/******************************************/
/* Language Strings, Page Aliases, Hooks  */
/******************************************/
$extDir = __DIR__;

$wgExtensionMessagesFiles['Bug70672']		= "{$extDir}/Bug70672.i18n.php";
$wgMessagesDirs['Bug70672']					= "{$extDir}/i18n";

$wgAutoloadClasses['Bug70672Hooks']			= "{$extDir}/Bug70672.hooks.php";
?>
