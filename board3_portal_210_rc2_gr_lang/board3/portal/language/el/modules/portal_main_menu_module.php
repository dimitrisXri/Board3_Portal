<?php
/**
*
* @package Board3 Portal v2.1 - Main Menu
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'M_MENU' 	=> 'Μενού',
	'M_CONTENT'	=> 'Περιεχόμενο',
	'M_ACP'		=> 'ΠΕΔ',
	'M_HELP'	=> 'Βοήθεια',
	'M_BBCODE'	=> 'Ερωτήσεις BBCode',
	'M_TERMS'	=> 'Όροι χρήσης',
	'M_PRV'		=> 'Προσωπικά δεδομένα',
	'M_SEARCH'	=> 'Αναζήτηση',
	'MENU_NO_LINKS'	=> 'Δεν υπάρχουν σύνδεσμοι',

	// ACP
	'ACP_PORTAL_MENU'				=> 'Ρυθμίσεις μενού',
	'ACP_PORTAL_MENU_LINK_SETTINGS'	=> 'Ρυθμίσεις συνδέσμου',
	'ACP_PORTAL_MENU_EXP'			=> 'Διαχείριση του κεντρικού μενού σας',
	'ACP_PORTAL_MENU_MANAGE'		=> 'Διαχείριση μενού',
	'ACP_PORTAL_MENU_MANAGE_EXP'	=> 'Εδώ μπορείτε να διαχειρίζεστε τους συνδέσμους του κεντρικού μενού σας.',
	'ACP_PORTAL_MENU_CAT'			=> 'Κατηγορία',
	'ACP_PORTAL_MENU_IS_CAT'		=> 'Καθορίστε ως ειδική κατηγορία συνδέσμων',
	'ACP_PORTAL_MENU_INT'			=> 'Εσωτερικός σύνδεσμος',
	'ACP_PORTAL_MENU_EXT'			=> 'Εξωτερικός σύνδεσμος',
	'ACP_PORTAL_MENU_TITLE'			=> 'Τίτλος',
	'ACP_PORTAL_MENU_URL'			=> 'Σύνδεσμος URL',
	'ACP_PORTAL_MENU_ADD'			=> 'Προσθήκη νέου συνδέσμου πλοήγησης',
	'ACP_PORTAL_MENU_TYPE'			=> 'Τύπος συνδέσμου',
	'ACP_PORTAL_MENU_TYPE_EXP'		=> 'Εάν έχετε έναν σύνδεσμο προς μια σελίδα της κοινότητας σας, επιλέξτε "Εσωτερικός δεσμός" για να αποφύγετε ανεπιθύμητες αποσυνδέσεις.',
	'ACP_PORTAL_MENU_CREATE_CAT'	=> 'Πρέπει πρώτα να δημιουργήσετε μία κατηγορία.',
	'ACP_PORTAL_MENU_URL_EXP'		=> 'Εξωτερικοί σύνδεσμοι:<br />Όλοι οι σύνδεσμοι πρέπει να εισάγονται με ένα http://<br /><br />Εσωτερικοί σύνδεσμοι:<br />Εισάγετε μόνο το αρχείο php ως σύνδεσμο URL, π.χ. index.php?style=4.',
	'ACP_PORTAL_MENU_PERMISSION'	=> 'Δικαιώματα συνδέσμου',
	'ACP_PORTAL_MENU_PERMISSION_EXP'=> 'Επιλέξτε τις ομάδες οι οποίες θα είναι εξουσιοδοτημένες να βλέπουν τους συνδέσμους. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν τον σύνδεσμο, μην επιλέξετε τίποτα.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'ACP_PORTAL_MENU_EXT_NEW_WINDOW'=> 'Άνοιγμα εξωτερικών συνδέσμων σε ένα νέο παράθυρο',

	// Errors
	'NO_LINK_TITLE'					=> 'Πρέπει να εισάγετε έναν τίτλο για αυτόν τον σύνδεσμο.',
	'NO_LINK_URL'					=> 'Πρέπει να εισάγετε έναν σύνδεσμο URL.',
));
