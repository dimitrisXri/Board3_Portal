<?php
/**
*
* @package Board3 Portal v2 - Birthday List
* @copyright (c) Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
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
	'BIRTHDAYS_AHEAD'              => 'Στις επόμενες %s ημέρες',
	'NO_BIRTHDAYS_AHEAD'        => 'Κανένα μέλος δεν έχει γενέθλια μέσα σε αυτή την περίοδο.',
	
	// ACP
	'ACP_PORTAL_BIRTHDAYS_SETTINGS'			=> 'Ρυθμίσεις για μπλοκ γενεθλίων',
	'ACP_PORTAL_BIRTHDAYS_SETTINGS_EXP'	=> 'Εδώ ρυθμίζετε το μπλοκ γενεθλίων.',
	'PORTAL_BIRTHDAYS'						=> 'Γενέθλια',
	'PORTAL_BIRTHDAYS_AHEAD'				=> 'Γενέθλια στις προσεχείς ημέρες',
	'PORTAL_BIRTHDAYS_AHEAD_EXP'		=> 'Σε πόσες προσεχείς ημέρες θα αναζητούνται μελλοντικά γενέθλια.<br />"0" απενεργοποιεί αυτή τη λίστα.',
));
