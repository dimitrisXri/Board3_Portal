<?php
/**
*
* @package Board3 Portal v2 - Announcements
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
	'LATEST_ANNOUNCEMENTS'		=> 'Τελευταίες γενικές ανακοινώσεις',
	'GLOBAL_ANNOUNCEMENTS'		=> 'Γενικές ανακοινώσεις',
	'GLOBAL_ANNOUNCEMENT'		=> 'Γενική ανακοίνωση',
	'VIEW_LATEST_ANNOUNCEMENT'  => '1 ανακοίνωση',
	'VIEW_LATEST_ANNOUNCEMENTS' => '%d ανακοινώσεις',
	'READ_FULL'					=> 'Ανάγνωση όλων',
	'NO_ANNOUNCEMENTS'			=> 'Δεν υπάρχουν γενικές ανακοινώσεις',
	'POSTED_BY'					=> 'Συγγραφέας',
	'COMMENTS'					=> 'Σχόλια',
	'VIEW_COMMENTS'				=> 'Προβολή σχολίων',
	'PORTAL_POST_REPLY'			=> 'Δημοσίευση σχολίων',
	'TOPIC_VIEWS'				=> 'Προβολές',
	'JUMP_NEWEST'				=> 'Μετάβαση στην νεώτερη δημοσίευση',
	'JUMP_FIRST'				=> 'Μετάβαση στην πρώτη δημοσίευση',
	'JUMP_TO_POST'				=> 'Μετάβαση στην δημοσίευση',

	// ACP
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Ρυθμίσεις γενικών ανακοινώσεων',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'		=> 'Εδώ ρυθμίζετε το μπλοκ των γενικών ανακοινώσεων.',
	'PORTAL_ANNOUNCEMENTS'						=> 'Εμφάνιση γενικών ανακοινώσεων',
	'PORTAL_ANNOUNCEMENTS_EXP'				=> 'Εμφάνιση αυτού του μπλοκ στο portal.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Στυλ συμπαγούς μπλοκ γενικών ανακοινώσεων',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'		=> '"Ναι" σημαίνει χρήση συμπαγούς στυλ μπλοκ για τις γενικές ανακοινώσεις. "Όχι" σημαίνει χρήση εκτεταμένου στυλ (προβολή κειμένου).',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Αριθμός των ανακοινώσεων στο portal',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'	=> '0 σημαίνει απεριόριστο',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Ο αριθμός των ημερών που θα εμφανίζονται οι ανακοινώσεις',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'			=> '0 σημαίνει απεριόριστο',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Μέγιστο μέγεθος / μήκος των γενικών ανακοινώσεων',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'		=> '0 σημαίνει απεριόριστο',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'Δ. Συζητήσεις ανακοινώσεων',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'	=> 'Οι Δ. Συζητήσεις από τις οποίες θα ανακτώνται οι ανακοινώσεις. Αφήστε αυτό κενό για ανάκτηση ανακοινώσεων από όλες τις Δ. Συζητήσεις. Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Ναι", επιλέξτε τις Δ. Συζητήσεις τις οποίες θέλετε να εξαιρέσετε.<br />Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Όχι" επιλέξτε τις Δ. Συζητήσεις που θέλετε να βλέπετε.<br />Επιλογή / Από-επιλογή πολλαπλών συζητήσεων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'		=> 'Εξαίρεση Δ. Συζητήσεων',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τις επιλεγμένες Δ. Συζητήσεις από το μπλοκ ανακοινώσεων, και "Όχι" εάν θέλετε να βλέπετε μόνο τις επιλεγμένες Δ. Συζητήσεις στο μπλοκ ανακοινώσεων.',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'			=> 'Ενεργοποίηση / Απενεργοποίηση δικαιωμάτων',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'	=> 'Όταν εμφανίζονται οι ανακοινώσεις θα λαμβάνονται υπόψη τα δικαιώματα προβολής Δ. Συζήτησης των μελών.',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'				=> 'Ενεργοποίηση αρχειοθέτησης ανακοινώσεων',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'		=> 'Εάν είναι ενεργοποιημένο, το σύστημα αρχειοθέτησης ανακοινώσεων / αρίθμηση σελίδων θα εμφανίζεται.',
	'PORTAL_SHOW_REPLIES_VIEWS'				=> 'Εμφάνιση του αριθμού απαντήσεων και προβολών',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'		=> 'Αυτή ρύθμιση αφορά το συμπαγές μπλοκ.<br />Εάν Ναι, οι αριθμοί των απαντήσεων και προβολών θα εμφανίζονται σε 2 επιπλέον στήλες. Εάν Όχι, οι απαντήσεις και προβολές θα εμφανίζονται δίπλα από το όνομα της Δ. Συζήτησης. Επιλέξτε Όχι εάν έχετε προβλήματα με την προβολή των επιπλέον στηλών λόγω του επιπλέον απαιτούμενου πλάτους',
));
