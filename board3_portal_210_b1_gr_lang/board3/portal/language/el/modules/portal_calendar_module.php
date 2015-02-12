<?php
/**
*
* @package Board3 Portal v2.1 - Calendar
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'PORTAL_CALENDAR'			=> 'Ημερολόγιο',
	'VIEW_NEXT_MONTH'		=> 'επόμενος μήνας',
	'VIEW_PREVIOUS_MONTH'	=> 'Προηγούμενος μήνας',
	'EVENT_START'			=> 'Από',
	'EVENT_END'				=> 'Έως',
	'EVENT_TIME'			=> 'Ώρα',
	'EVENT_ALL_DAY'			=> 'Ολοήμερη εκδήλωση',
	'CURRENT_EVENTS'		=> 'Τρέχουσες εκδηλώσεις',
	'NO_CUR_EVENTS'			=> 'Δεν υπάρχουν τρέχουσες εκδηλώσεις',
	'UPCOMING_EVENTS'		=> 'Επερχόμενες εκδηλώσεις',
	'NO_UPCOMING_EVENTS'	=> 'Δεν υπάρχουν επερχόμενες εκδηλώσεις',

	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Κυ',
			'2'	=> 'Δε',
			'3'	=> 'Τρ',
			'4'	=> 'Τε',
			'5'	=> 'Πε',
			'6'	=> 'Πα',
			'7'	=> 'Σα',
		),

		'month'	=> array(
			'1'	=> 'Ιαν.',
			'2'	=> 'Φεβ.',
			'3'	=> 'Μαρ.',
			'4'	=> 'Απρ.',
			'5'	=> 'Μαι',
			'6'	=> 'Ιουν.',
			'7'	=> 'Ιουλ.',
			'8'	=> 'Αυγ.',
			'9'	=> 'Σεπ.',
			'10'=> 'Οκτ.',
			'11'=> 'Νοε.',
			'12'=> 'Δεκ.',
		),

		'long_month'=> array(
			'1'	=> 'Ιανουάριος',
			'2'	=> 'Φεβρουάριος',
			'3'	=> 'Μάρτιος',
			'4'	=> 'Απρίλιος',
			'5'	=> 'Μάιος',
			'6'	=> 'Ιούνιος',
			'7'	=> 'Ιούλιος',
			'8'	=> 'Αύγουστος',
			'9'	=> 'Σεπτέμβριος',
			'10'=> 'Οκτώβριος',
			'11'=> 'Νοέμβριος',
			'12'=> 'Δεκέμβριος',
		),
	),

	// ACP
	'ACP_PORTAL_CALENDAR'					=> 'Ρυθμίσεις ημερολογίου',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'Εδώ ρυθμίζετε το μπλοκ ημερολογίου.',
	'ACP_PORTAL_EVENTS'						=> 'Εκδηλώσεις ημερολογίου',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Χρώμα ενεργής ημέρας',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'HEX ή ονομαζόμενα χρώματα επιτρέπονται, όπως #FFFFFF για λευκό, ή ονόματα χρωμάτων (στα αγγλικά) όπως π.χ. violet.',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Χρώμα για Κυριακή',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'HEX ή ονομαζόμενα χρώματα επιτρέπονται, όπως #FFFFFF για λευκό, ή ονόματα χρωμάτων (στα αγγλικά) όπως π.χ. violet.',
	'PORTAL_LONG_MONTH'						=> 'Εμφάνιση πλήρη ονομάτων μήνα',
	'PORTAL_LONG_MONTH_EXP'				=> 'Εάν είναι απενεργοποιημένο οι μήνες θα συντομεύονται π.χ. Αυγ. αντί για Αύγουστος.',
	'PORTAL_SUNDAY_FIRST'					=> 'Πρώτη ημέρα της εβδομάδας',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'Αν είναι απενεργοποιημένο το ημερολόγιο θα εμφανίζει Δε. --> Κυ., διαφορετικά Κυ. --> Σα.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Εμφάνιση εκδηλώσεων',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Εμφανίζει εκδηλώσεις οι οποίες δημιουργήθηκαν στο μπλοκ ημερολογίου',
	'PORTAL_EVENTS_MANAGE'					=> 'Διαχείριση εκδηλώσεων',
	'NO_EVENT_TITLE'						=> 'Δεν καθορίσατε έναν τίτλο για την εκδήλωση.',
	'NO_EVENT_START'						=> 'Δεν καθορίσατε μια ώρα εκκίνησης για την εκδήλωση.',
	'ADD_EVENT'								=> 'Προσθήκη νέας εκδήλωσης',
	'EVENT_UPDATED'							=> 'Η εκδήλωση ενημερώθηκε με επιτυχία.',
	'EVENT_ADDED'							=> 'Η εκδήλωση προστέθηκε με επιτυχία.',
	'NO_EVENT'								=> 'Δεν καθορίστηκε καμία εκδήλωση.',
	'EVENT_TITLE'							=> 'Τίτλος εκδήλωσης',
	'EVENT_DESC'							=> 'Περιγραφή εκδήλωσης',
	'EVENT_LINK'							=> 'Σύνδεσμος εκδήλωσης',
	'EVENT_LINK_EXP'						=> 'Εισάγετε τον σύνδεσμο σε ένα θέμα ή μία ιστοσελίδα με την ανακοίνωση ή θέμα συζήτησης της εκδήλωσης.',
	'NO_EVENTS'								=> 'Καμία εκδήλωση',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'Η ώρα εκκίνησης που εισάγατε είναι λανθασμένη. Παρακαλώ ακολουθήστε σωστά τις οδηγίες.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'Η ώρα λήξης που εισάγατε είναι λανθασμένη. Παρακαλώ ακολουθήστε σωστά τις οδηγίες.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'Ο χρόνος εκκίνησης της εκδήλωσης πρέπει να είναι στο μέλλον.',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Ημερομηνία εκκίνησης εκδήλωσης',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Εισάγετε την ημερομηνία και ώρα, κατά την οποία ξεκινάει η εκδήλωση. Η ημερομηνία πρέπει να είναι σε μια παρόμοια μορφή: ΜΜ/ΗΗ/ΕΕΕΕ 3:00',
	'ACP_PORTAL_EVENT_END_DATE'			=> 'Ημερομηνία λήξης εκδήλωσης',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Εισάγετε την ημερομηνία και ώρα, κατά την οποία λήγει η εκδήλωση. Η ημερομηνία πρέπει να είναι σε μια παρόμοια μορφή: ΜΜ/ΗΗ/ΕΕΕΕ 3:00',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'Η λήξη της εκδήλωσης πρέπει να είναι μετά την εκκίνηση της εκδήλωσης.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Δικαιώματα εκδήλωσης',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Επιλέξτε τις ομάδες οι οποίες θα είναι εξουσιοδοτημένες να βλέπουν την εκδήλωση. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν την εκδήλωση, μην επιλέξετε τίποτε.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Άνοιγμα εξωτερικών συνδέσμων εκδηλώσεων σε νέο παράθυρο',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Ενημερώθηκε εκδήλωση</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Προστέθηκε εκδήλωση</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Αφαιρέθηκε εκδήλωση</strong><br />&raquo; %s',
));
