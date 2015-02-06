<?php
/**
*
* @package Board3 Portal v2 - Calendar
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
	'PORTAL_CALENDAR'			=> 'Ημερολόγιο',
	'VIEW_NEXT_MONTH'		=> 'επόμενος μήνας',
	'VIEW_PREVIOUS_MONTH'	=> 'Προηγούμενος μήνας',
	'EVENT_START'			=> 'Από',
	'EVENT_END'				=> 'Έως',
	'EVENT_TIME'			=> 'Ώρα',
	'EVENT_ALL_DAY'			=> 'Ολοήμερο γεγονός',
	'CURRENT_EVENTS'		=> 'Τρέχοντα γεγονότα',
	'NO_CUR_EVENTS'			=> 'Δεν υπάρχουν τρέχοντα γεγονότα',
	'UPCOMING_EVENTS'		=> 'Επερχόμενα γεγονότα',
	'NO_UPCOMING_EVENTS'	=> 'Δεν υπάρχουν επερχόμενα γεγονότα',

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
	'ACP_PORTAL_EVENTS'						=> 'Γεγονότα ημερολογίου',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Χρώμα ενεργής ημέρας',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'	=> 'HEX ή ονομαζόμενα χρώματα επιτρέπονται, όπως #FFFFFF για λευκό, ή ονόματα χρωμάτων (στα αγγλικά) όπως π.χ. violet.',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Χρώμα για Κυριακή',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'	=> 'HEX ή ονομαζόμενα χρώματα επιτρέπονται, όπως #FFFFFF για λευκό, ή ονόματα χρωμάτων (στα αγγλικά) όπως π.χ. violet.',
	'PORTAL_LONG_MONTH'						=> 'Εμφάνιση πλήρη ονομάτων μήνα',
	'PORTAL_LONG_MONTH_EXP'				=> 'Εάν είναι απενεργοποιημένο οι μήνες θα συντομεύονται π.χ. Αυγ. αντί για Αύγουστος.',
	'PORTAL_SUNDAY_FIRST'					=> 'Πρώτη ημέρα της εβδομάδας',
	'PORTAL_SUNDAY_FIRST_EXP'			=> 'Αν είναι απενεργοποιημένο το ημερολόγιο θα εμφανίζει Δε. --> Κυ., διαφορετικά Κυ. --> Σα.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Εμφάνιση γεγονότων',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Εμφανίζει γεγονότα τα οποία δημιουργήθηκαν στο μπλοκ ημερολογίου',
	'PORTAL_EVENTS_MANAGE'					=> 'Διαχείριση γεγονότων',
	'NO_EVENT_TITLE'						=> 'Δεν καθορίσατε έναν τίτλο για το γεγονός.',
	'NO_EVENT_START'						=> 'Δεν καθορίσατε μια ώρα εκκίνησης για το γεγονός.',
	'ADD_EVENT'								=> 'Προσθήκη νέου γεγονότος',
	'EVENT_UPDATED'							=> 'Το γεγονός ενημερώθηκε με επιτυχία.',
	'EVENT_ADDED'							=> 'Το γεγονός προστέθηκε με επιτυχία.',
	'NO_EVENT'								=> 'Δεν καθορίστηκε κανένα γεγονός.',
	'EVENT_TITLE'							=> 'Τίτλος γεγονότος',
	'EVENT_DESC'							=> 'Περιγραφή γεγονότος',
	'EVENT_LINK'							=> 'Σύνδεσμος γεγονότος',
	'EVENT_LINK_EXP'						=> 'Εισάγετε τον σύνδεσμο σε ένα θέμα ή μία ιστοσελίδα με την ανακοίνωση ή θέμα συζήτησης του γεγονότος.',
	'NO_EVENTS'								=> 'Κανένα γεγονός',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'Η ώρα εκκίνησης που εισάγατε είναι λανθασμένη. Παρακαλώ ακολουθήστε σωστά τις οδηγίες.',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'Η ώρα λήξης που εισάγατε είναι λανθασμένη. Παρακαλώ ακολουθήστε σωστά τις οδηγίες.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'Ο χρόνος εκκίνησης του γεγονότος πρέπει να είναι στο μέλλον.',
	'ACP_PORTAL_EVENT_START_DAY'			=> 'Ημερομηνία εκκίνησης γεγονότος',
	'ACP_PORTAL_EVENT_START_DAY_EXP'		=> 'Εισάγετε την ημερομηνία, κατά την οποία ξεκινάει το γεγονός. Η ημερομηνία πρέπει να είναι σε μια παρόμοια μορφή: ΗΗ/ΜΜ/ΕΕΕΕ',
	'ACP_PORTAL_EVENT_START_TIME'			=> 'Ώρα εκκίνησης γεγονότος',
	'ACP_PORTAL_EVENT_START_TIME_EXP'		=> 'Εισάγετε την ώρα, κατά την οποία ξεκινάει το γεγονός. Η ώρα πρέπει να είναι σε 24ωρη μορφή, π.χ. 23:12',
	'ACP_PORTAL_EVENT_END_DAY'				=> 'Ημερομηνία λήξης γεγονότος',
	'ACP_PORTAL_EVENT_END_DAY_EXP'			=> 'Εισάγετε την ημερομηνία, κατά την οποία λήγει το γεγονός. Η ημερομηνία πρέπει να είναι σε μια παρόμοια μορφή: ΗΗ/ΜΜ/ΕΕΕΕ',
	'ACP_PORTAL_EVENT_END_TIME'				=> 'Ώρα λήξης γεγονότος',
	'ACP_PORTAL_EVENT_END_TIME_EXP'			=> 'Εισάγετε την ώρα, κατά την οποία λήγει το γεγονός. Η ώρα πρέπει να είναι σε 24ωρη μορφή, π.χ. 23:12',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'Η λήξη του γεγονότος πρέπει να είναι μετά την εκκίνηση του γεγονότος.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Δικαιώματα γεγονότος',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Επιλέξτε τις ομάδες οι οποίες θα είναι εξουσιοδοτημένες να βλέπουν το γεγονός. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν το γεγονός, μην επιλέξετε τίποτε.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Άνοιγμα εξωτερικών συνδέσμων γεγονότων σε νέο παράθυρο',

	// Logs
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Ενημερώθηκε γεγονός</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Προστέθηκε γεγονός</strong><br />&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Αφαιρέθηκε γεγονός</strong><br />&raquo; %s',
));
