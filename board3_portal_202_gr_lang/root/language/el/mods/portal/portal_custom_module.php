<?php
/**
*
* @package Board3 Portal v2 - Custom
* @copyright (c) Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'PORTAL_CUSTOM'		=> 'Προσαρμοσμένο μπλοκ',

	// ACP
	'ACP_PORTAL_CUSTOM_SETTINGS'			=> 'Ρυθμίσεις προσαρμοσμένου μπλοκ',
	'ACP_PORTAL_CUSTOM_SETTINGS_EXP'		=> 'Εδώ μπορείτε να επεξεργαστείτε το προσαρμοσμένο σας μπλοκ',
	'ACP_PORTAL_CUSTOM_CODE_SHORT'			=> 'Ο κώδικας που εισάγατε δεν είναι αρκετά μεγάλος.',
	'ACP_PORTAL_CUSTOM_PREVIEW'				=> 'Προεπισκόπιση',
	'ACP_PORTAL_CUSTOM_CODE'				=> 'Κώδικας προσαρμοσμένου μπλοκ',
	'ACP_PORTAL_CUSTOM_CODE_EXP'			=> 'Αλλάξτε τον κώδικα για το μικρό προσαρμοσμένο μπλοκ (HTML ή BBCode) εδώ.',
	'ACP_PORTAL_CUSTOM_PERMISSION'			=> 'Δικαιώματα προσαρμοσμένου μπλοκ',
	'ACP_PORTAL_CUSTOM_PERMISSION_EXP'		=> 'Επιλέξτε τις ομάδες που θα είναι σε θέση να βλέπουν το προσαρμοσμένο μπλοκ. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν το προσαρμοσμένο μπλοκ, μην επιλέξετε τίποτα.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'ACP_PORTAL_CUSTOM_BBCODE'				=> 'Ενεργοποίηση BBCode για το προσαρμοσμένο μπλοκ',
	'ACP_PORTAL_CUSTOM_BBCODE_EXP'			=> 'Τα BBCode μπορούν να χρησιμοποιηθούν σε αυτό το πλαίσιο. Εάν τα BBCode δεν είναι ενεργοποιημένα θα αναλυθεί ή HTML.',
));
