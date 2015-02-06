<?php
/**
*
* @package Board3 Portal v2 - Links
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
	'PORTAL_LINKS'		=> 'Σύνδεσμοι',
	'LINKS_NO_LINKS'	=> 'Δεν υπάρχουν σύνδεσμοι',

	// ACP
	'ACP_PORTAL_LINKS'				=> 'Ρυθμίσεις συνδέσμων',
	'ACP_PORTAL_LINKS_EXP'			=> 'Προσαρμόστε τους συνδέσμους που παρατίθενται στο μπλοκ συνδέσμων',
	'ACP_PORTAL_LINK_TITLE'			=> 'Τίτλος',
	'ACP_PORTAL_LINK_TYPE'			=> 'Τύπος συνδέσμου',
	'ACP_PORTAL_LINK_TYPE_EXP'		=> 'Εάν έχετε έναν σύνδεσμο προς μια σελίδα της κοινότητας σας, επιλέξτε "Εσωτερικός δεσμός" για να αποφύγετε ανεπιθύμητες αποσυνδέσεις.',
	'ACP_PORTAL_LINK_INT'			=> 'Εσωτερικός σύνδεσμος',
	'ACP_PORTAL_LINK_EXT'			=> 'Εξωτερικός σύνδεσμος',
	'ACP_PORTAL_LINK_ADD'			=> 'Προσθήκη νέου συνδέσμου πλοήγησης',
	'ACP_PORTAL_LINK_URL'			=> 'Σύνδεσμος URL',
	'ACP_PORTAL_LINK_URL_EXP'		=> 'Εξωτερικοί σύνδεσμοι:<br />Όλοι οι σύνδεσμοι θα πρέπει να εισάγονται με ένα http://<br /><br />Εσωτερικοί σύνδεσμοι:<br />Εισάγετε μόνο το αρχείο php ως σύνδεσμο URL, π.χ. index.php?style=4.',
	'ACP_PORTAL_LINK_PERMISSION'	=> 'Δικαιώματα συνδέσμου',
	'ACP_PORTAL_LINK_PERMISSION_EXP'=> 'Επιλέξτε τις ομάδες οι οποίες θα είναι εξουσιοδοτημένες να βλέπουν τους συνδέσμους. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν τον σύνδεσμο, μην επιλέξετε τίποτα.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'ACP_PORTAL_LINKS_NEW_WINDOW'	=> 'Άνοιγμα εξωτερικών συνδέσμων σε ένα νέο παράθυρο',

	// Errors
	'NO_LINK_TITLE'					=> 'Πρέπει να εισάγετε έναν τίτλο για τον σύνδεσμο αυτόν.',
	'NO_LINK_URL'					=> 'Πρέπει να εισάγετε έναν σύνδεσμο URL.',
));
