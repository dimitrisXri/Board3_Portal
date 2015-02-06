<?php
/**
*
* @package Board3 Portal v2.1 - News
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
	'LATEST_NEWS'			=> 'Τελευταία νέα',
	'READ_FULL'				=> 'Ανάγνωση όλων',
	'NO_NEWS'				=> 'Δεν υπάρχουν νέα',
	'POSTED_BY'				=> 'Συγγραφέας',
	'COMMENTS'				=> 'Σχόλια',
	'VIEW_COMMENTS'			=> 'Προβολή σχολίων',
	'PORTAL_POST_REPLY'		=> 'Δημοσίευση σχολίων',
	'TOPIC_VIEWS'			=> 'Προβολές',
	'JUMP_NEWEST'			=> 'Μετάβαση στην νεώτερη δημοσίευση',
	'JUMP_FIRST'			=> 'Μετάβαση στην πρώτη δημοσίευση',
	'JUMP_TO_POST'			=> 'Μετάβαση στην δημοσίευση',

	// ACP
	'ACP_PORTAL_NEWS_SETTINGS'			=> 'Ρυθμίσεις νέων',
	'ACP_PORTAL_NEWS_SETTINGS_EXP'	=> 'Εδώ ρυθμίζετε το μπλοκ νέων.',
	'PORTAL_NEWS_STYLE'					=> 'Στυλ συμπαγούς μπλοκ νέων',
	'PORTAL_NEWS_STYLE_EXP'			=> '"Ναι" σημαίνει χρήση συμπαγούς στυλ για τα νέα. "Όχι" σημαίνει χρήση του μεγάλου στυλ (προβολή κειμένου).',
	'PORTAL_SHOW_ALL_NEWS'				=> 'Εμφάνιση όλων των άρθρων σε αυτήν την Δ. Συζήτηση',
	'PORTAL_SHOW_ALL_NEWS_EXP'		=> 'Περιλαμβάνει και τις σημειώσεις.',
	'PORTAL_NUMBER_OF_NEWS'				=> 'Αριθμός των νέων άρθρων στο portal',
	'PORTAL_NUMBER_OF_NEWS_EXP'		=> '0 σημαίνει απεριόριστο',
	'PORTAL_NEWS_LENGTH'				=> 'Μέγιστο μήκος των νέων άρθρων',
	'PORTAL_NEWS_LENGTH_EXP'		=> '0 σημαίνει απεριόριστο',
	'PORTAL_NEWS_FORUM'				=> 'Δ. Συζητήσεις νέων',
	'PORTAL_NEWS_FORUM_EXP'			=> 'Οι Δ. Συζητήσεις από τις οποίες αντλούνται τα θέματα, αφήστε κενό για να αντλούνται από όλες τις Δ. Συζητήσεις. Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Ναι", επιλέξτε τις Δ. Συζητήσεις που θέλετε να εξαιρούνται.<br />Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Όχι" επιλέξτε τις Δ. Συζητήσεις που θέλετε να βλέπετε.<br />Επιλογή / Από-επιλογή πολλαπλών Δ. Συζητήσεων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_NEWS_EXCLUDE'				=> 'Εξαίρεση Δ. Συζητήσεων',
	'PORTAL_NEWS_EXCLUDE_EXP'		=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τις επιλεγμένες Δ. Συζητήσεις από το μπλοκ των νέων, και "Όχι" εάν θέλετε να βλέπετε μόνο τις επιλεγμένες Δ. Συζητήσεις στο μπλοκ νέων.',
	'PORTAL_NEWS_PERMISSIONS'			=> 'Ενεργοποίηση / Απενεργοποίηση προσβάσεων;',
	'PORTAL_NEWS_PERMISSIONS_EXP'	=> 'Να λαμβάνονται υπόψη τα δικαιώματα προβολής κατά την εμφάνιση των νέων',
	'PORTAL_NEWS_SHOW_LAST'				=> 'Ταξινόμηση ως προς τις νεώτερες δημοσιεύσεις',
	'PORTAL_NEWS_SHOW_LAST_EXP'		=> 'Εάν είναι ενεργοποιημένο, τα νέα θα ταξινομούνται ως προς τις νεώτερες δημοσιεύσεις. Εάν είναι απενεργοποιημένο, τα νέα θα ταξινομούνται ως προς το νεώτερο θέμα.',
	'PORTAL_NEWS_ARCHIVE'				=> 'Ενεργοποίηση του συστήματος αρχειοθέτησης νέων',
	'PORTAL_NEWS_ARCHIVE_EXP'		=> 'Εάν είναι ενεργοποιημένο το σύστημα αρχειοθέτησης νέων / αρίθμηση σελίδων θα εμφανίζεται.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Προβολή του αριθμού απαντήσεων και προβολών',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Αυτή η ρύθμιση αφορά το συμπαγές μπλοκ.<br />Εάν Ναι, οι αριθμοί των απαντήσεων και προβολών θα εμφανίζονται σε 2 επιπλέον στήλες. Εάν Όχι, οι απαντήσεις και προβολές θα εμφανίζονται δίπλα από το όνομα της Δ. Συζήτησης. Επιλέξτε Όχι εάν έχετε προβλήματα με την προβολή των επιπλέον στηλών λόγω του επιπλέον απαιτούμενου πλάτους.',
));
