<?php
/**
*
* @package Board3 Portal v2 - Poll
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
	'PORTAL_POLL'			=> 'Δημοψηφίσματα',
	'LATEST_POLLS'			=> 'Τελευταία δημοψηφίσματα',
	'NO_OPTIONS'			=> 'Αυτό το δημοψήφισμα δεν έχει διαθέσιμες επιλογές.',
	'NO_POLL'				=> 'Δεν υπάρχουν διαθέσιμα δημοψηφίσματα',
	'RETURN_PORTAL'			=> '%sΕπιστροφή στο portal%s',
	
	// ACP
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Ρυθμίσεις δημοψηφισμάτων',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> 'Εδώ ρυθμίζετε το μπλοκ για τα δημοψηφίσματα.',
	'PORTAL_POLL_TOPIC_ID'				=> 'Δ. Συζήτηση(εις) δημοψηφισμάτων',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> 'Οι Δ. Συζητήσεις από τις οποίες θα εμφανίζονται τα δημοψηφίσματα. Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Ναι", επιλέξτε τις Δ. Συζητήσεις τις οποίες θέλετε να εξαιρέσετε.<br />Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Όχι" επιλέξτε τις Δ. Συζητήσεις που θέλετε να βλέπετε.<br /> Επιλογή / Από-επιλογή πολλαπλών Δ. Συζητήσεων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_POLL_EXCLUDE_ID'			=> 'Εξαίρεση Δ. Συζητήσεων',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τις επιλεγμένες Δ. Συζητήσεις από το μπλοκ των δημοψηφισμάτων, και "Όχι" εάν θέλετε να βλέπετε δημοψηφίσματα μόνο από τις επιλεγμένες Δ. Συζητήσεις στο μπλοκ δημοψηφισμάτων.',
	'PORTAL_POLL_LIMIT'					=> 'Όριο εμφάνισης δημοψηφισμάτων',
	'PORTAL_POLL_LIMIT_EXP'			=> 'Ο αριθμός των δημοψηφισμάτων που θέλετε να εμφανίζονται στη σελίδα του portal.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Επέτρεψε την ψηφοφορία',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> 'Επιτρέπει στα μέλη με τις απαραίτητες προσβάσεις να ψηφίζουν από τη σελίδα του portal.',
	'PORTAL_POLL_HIDE'					=> 'Απόκρυψη ληγμένων δημοψηφισμάτων;',
));
