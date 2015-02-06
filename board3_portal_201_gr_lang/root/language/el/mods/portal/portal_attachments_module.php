<?php
/**
*
* @package Board3 Portal v2 - Attachments
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
	'DOWNLOADS'				=> 'Μεταφορτώσεις',
	'NO_ATTACHMENTS'		=> 'Δεν υπάρχουν συνημμένα',
	'PORTAL_ATTACHMENTS'	=> 'Συνημμένα',
	
	// ACP
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'Ρυθμίσεις συνημμένων',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXP'	=> 'Εδώ ρυθμίζετε το μπλοκ συνημμένων.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Όριο των συνημμένων που θα εμφανίζονται',
	'PORTAL_ATTACHMENTS_NUMBER_EXP'					=> '0 σημαίνει απεριόριστο',
	'PORTAL_ATTACHMENTS_FORUM_IDS'						=> 'Δ. Συζητήσεις συνημμένων',
	'PORTAL_ATTACHMENTS_FORUM_IDS_EXP'				=> 'Οι Δ. Συζητήσεις από τις οποίες θα εμφανίζονται τα συνημμένα. Εάν η "Εξαίρεση Δ .Συζητήσεων" έχει οριστεί σε "Ναι", επιλέξτε τις Δ. Συζητήσεις τις οποίες θέλετε να εξαιρέσετε.<br />Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Όχι" επιλέξτε τις Δ. Συζητήσεις που θέλετε να βλέπετε.<br />Επιλογή / Από-επιλογή πολλαπλών Δ. Συζητήσεων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE'					=> 'Εξαίρεση Δ. Συζητήσεων',
	'PORTAL_ATTACHMENTS_FORUM_EXCLUDE_EXP'			=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τις επιλεγμένες Δ. Συζητήσεις από το μπλοκ συνημμένων, και "Όχι" εάν θέλετε να βλέπετε μόνο τα συνημμένα από τις επιλεγμένες Δ. Συζητήσεις στο μπλοκ συνημμένων.',
	'PORTAL_ATTACHMENTS_MAX_LENGTH'						=> 'Όριο χαρακτήρων για κάθε συνημμένο',
	'PORTAL_ATTACHMENTS_MAX_LENGTH_EXP'				=> '0 σημαίνει απεριόριστο',
	'PORTAL_ATTACHMENTS_FILETYPE' 						=> 'Τύποι αρχείων',
	'PORTAL_ATTACHMENTS_FILETYPE_EXP' 				=> 'Εάν η "Εξαίρεση τύπων αρχείων" έχει οριστεί σε "Ναι", επιλέξτε τους τύπους αρχείων τους οποίους θέλετε να εξαιρέσετε.<br />Εάν η "Εξαίρεση τύπων αρχείων" έχει οριστεί σε "Όχι" επιλέξτε τους τύπους αρχείων που θέλετε να βλέπετε.<br />Επιλογή / Από-επιλογή πολλαπλών τύπων αρχείων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_ATTACHMENTS_EXCLUDE'						=> 'Εξαίρεση τύπων αρχείων',
	'PORTAL_ATTACHMENTS_EXCLUDE_EXP'				=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τους επιλεγμένους τύπους αρχείων από το μπλοκ συνημμένων, και "Όχι" εάν θέλετε να βλέπετε μόνο τους επιλεγμένους τύπους αρχείων στο μπλοκ συνημμένων.',
));
