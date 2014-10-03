<?php
/**
 * Bug70672
 * Bug70672 Hooks
 *
 * @author		Alexia E. Smith
 * @copyright	(c) 2014 Curse Inc.
 * @license		All Rights Reserved
 * @package		Bug70672
 * @link		http://www.curse.com/
 *
 **/

class Bug70672Hooks {
	/**
	 * Regular Expressions for matching bad JS content in CSS.
	 *
	 * @var		array
	 */
	static private $jsRegexes = [
		'#behavior:.*?url\(.*?[;}]#is',
		'#-moz-binding:.*?url\(.*?[;}]#is',
		'#expression\(#is'
	];

	/**
	 * Handle rejecting edits to CSS that include JS embeds.
	 *
	 * @access	public
	 * @param	object	$$wikiPage: WikiPage modified
	 * @param	object	$user: User performing the modification
	 * @param	object	$content: Content object
	 * @param	string	$summary: Edit summary/comment
	 * @param	boolean	$isMinor: Whether or not the edit was marked as minor
	 * @param	boolean	$isWatch: (No longer used)
	 * @param	object	$section: (No longer used)
	 * @param	integer	$flags: Flags
	 * @param	object	$status: Status object from newGood()
	 * @param	integer	$baseRevId: the rev ID (or false) this edit was based on
	 * @return	void
	 */
	static public function onPageContentSave($wikiPage, $user, $content, $summary, $isMinor, $isWatch, $section, $flags, $status) {
		if ($wikiPage->getTitle()->hasContentModel(CONTENT_MODEL_CSS)) {
			$text = $content->getNativeData();

			$text = str_replace(["\n", "\r", " ", "\t"], '', $text);

			foreach (self::$jsRegexes as $regex) {
				if (preg_match($regex, $text, $matches)) {
					$status->fatal('disallowed_css_js', $matches[0]);
					return false;
				}
			}
		}
		return true;
	}
}
?>