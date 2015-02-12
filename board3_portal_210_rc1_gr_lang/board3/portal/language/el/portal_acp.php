<?php
/**
*
* @package Board3 Portal v2.1
* @copyright (c) 2014 Board3 Group ( www.board3.de )
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
	// Portal Modules
	'ACP_PORTAL_MODULES_EXP'		=> 'Εδώ μπορείτε να διαχειριστείτε τις μονάδες σας portal. Εάν απενεργοποιήσετε όλες τις μονάδες, παρακαλώ να απενεργοποιήσετε το portal επίσης.',

	'MODULE_POS_TOP'				=> 'Πάνω',
	'MODULE_POS_LEFT'				=> 'Στήλη αριστερά',
	'MODULE_POS_RIGHT'				=> 'Στήλη δεξιά',
	'MODULE_POS_CENTER'				=> 'Μεσαία στήλη',
	'MODULE_POS_BOTTOM'				=> 'Κάτω',
	'ADD_MODULE'					=> 'Προσθήκη μονάδας',
	'CHOOSE_MODULE'					=> 'Επιλογή μονάδας',
	'CHOOSE_MODULE_EXP'				=> 'Επιλέξτε μια μονάδα από την λίστα στο αναδυόμενο μενού',
	'SUCCESS_ADD'					=> 'Η μονάδα προστέθηκε με επιτυχία.',
	'SUCCESS_DELETE'				=> 'Η μονάδα αφαιρέθηκε με επιτυχία.',
	'NO_MODULES'					=> 'Δεν εντοπίστηκαν μονάδες.',
	'MOVE_RIGHT'					=> 'Μετακίνηση δεξιά',
	'MOVE_LEFT'						=> 'Μετακίνηση αριστερά',
	'B3P_FILE_NOT_FOUND'			=> 'Το αρχείο που ζητήθηκε δεν μπορεί να βρεθεί',
	'UNABLE_TO_MOVE'				=> 'Δεν είναι δυνατή η μετακίνηση του μπλοκ στην στήλη που επιλέχθηκε.',
	'UNABLE_TO_MOVE_ROW'			=> 'Δεν είναι δυνατόν να μετακινηθεί το μπλοκ στην επιλεγμένη σειρά.',
	'DELETE_MODULE_CONFIRM'			=> 'Είστε σίγουροι ότι θέλετε να διαγράψετε την μονάδα "%1$s";',
	'MODULE_RESET_SUCCESS'			=> 'Οι ρυθμίσεις της μονάδας επαναφέρθηκαν με επιτυχία.',
	'MODULE_RESET_CONFIRM'			=> 'Είστε σίγουροι ότι θέλετε να επαναφέρετε τις ρυθμίσεις της μονάδας "%1$s";',
	'MODULE_NOT_EXISTS'				=> 'Η επιλεγμένη μονάδα δεν υπάρχει.',

	'MODULE_OPTIONS'			=> 'Επιλογές μονάδας',
	'MODULE_NAME'				=> 'Όνομα μονάδας',
	'MODULE_NAME_EXP'			=> 'Εισάγετε το όνομα της μονάδας το οποίο θα πρέπει να εμφανίζεται στην διαμόρφωση μονάδων.',
	'MODULE_IMAGE'				=> 'Εικόνα μονάδας',
	'MODULE_IMAGE_EXP'			=> 'Εισάγετε το όνομα του αρχείου της εικόνας μονάδας. Οι εικόνες θα πρέπει να υπάρχουν σε όλους τους styles/{το στυλ σας}/theme/images/portal/ φακέλους.',
	'MODULE_PERMISSIONS'		=> 'Δικαιώματα μονάδας',
	'MODULE_PERMISSIONS_EXP'	=> 'Επιλέξτε τις ομάδες οι οποίες θα είναι εξουσιοδοτημένες να βλέπουν την μονάδα. Εάν θέλετε όλα τα μέλη να είναι σε θέση να βλέπουν την μονάδα, μην επιλέγετε τίποτε.<br />Επιλογή / Από-επιλογή πολλαπλών ομάδων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'MODULE_IMAGE_WIDTH'		=> 'Πλάτος εικόνας μονάδας',
	'MODULE_IMAGE_WIDTH_EXP'	=> 'Εισάγετε το πλάτος της εικόνας μονάδας σε εικονοστοιχεία',
	'MODULE_IMAGE_HEIGHT'		=> 'Ύψος εικόνας μονάδας',
	'MODULE_IMAGE_HEIGHT_EXP'	=> 'Εισάγετε το ύψος της εικόνας μονάδας σε εικονοστοιχεία',
	'MODULE_RESET'				=> 'Επαναφορά ρυθμίσεων μονάδας',
	'MODULE_RESET_EXP'			=> 'Αυτό θα επαναφέρει όλες τις ρυθμίσεις στις προεπιλεγμένες!',
	'MODULE_STATUS'				=> 'Ενεργοποίηση μονάδας',
	'MODULE_ADD_ONCE'			=> 'Αυτή η μονάδα μπορεί να προστεθεί μόνο μία φορά.',
	'MODULE_IMAGE_ERROR'		=> 'Ένα σφάλμα προέκυψε κατά τον έλεγχο για την εικόνα της μονάδας:',
	'UNKNOWN_MODULE_METHOD'		=> 'Η μέθοδος μονάδας της μονάδας %1$s δεν ήταν δυνατόν να βρεθεί.',

	// general
	'ACP_PORTAL_CONFIG_INFO'				=> 'Γενικές ρυθμίσεις',
	'ACP_PORTAL_GENERAL_TITLE'				=> 'Διαχείριση portal',
	'ACP_PORTAL_GENERAL_TITLE_EXP'			=> 'Σας ευχαριστούμε που επιλέξατε το Board3 Portal! Εδώ μπορείτε να διαχειριστείτε την σελίδα του portal σας. Οι ακόλουθες επιλογές σας επιτρέπουν να προσαρμόσετε τις διάφορες γενικές ρυθμίσεις.',
	'PORTAL_ENABLE'							=> 'Ενεργοποίηση portal',
	'PORTAL_ENABLE_EXP'						=> 'Ενεργοποιεί ή απενεργοποιεί ολόκληρο το portal.',
	'PORTAL_LEFT_COLUMN'					=> 'Ενεργοποίηση στήλης αριστερά',
	'PORTAL_LEFT_COLUMN_EXP'				=> 'Αλλάξτε σε όχι, αν θέλετε να απενεργοποιήσετε την αριστερή στήλη',
	'PORTAL_RIGHT_COLUMN'					=> 'Ενεργοποίηση στήλης δεξιά',
	'PORTAL_RIGHT_COLUMN_EXP'				=> 'Αλλάξτε σε όχι, αν θέλετε να απενεργοποιήσετε την δεξιά στήλη',
	'PORTAL_VERSION_CHECK'					=> 'Έλεγχος έκδοσης σε portal',
	'PORTAL_DISPLAY_JUMPBOX'				=> 'Εμφάνιση Jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'			=> 'Εμφάνιση Jumpbox στο portal. Το Jumpbox θα εμφανίζεται μόνο, όταν είναι ταυτόχρονα ενεργοποιημένο και στις λειτουργίες του συστήματος συζητήσεων.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'		=> 'Ρυθμίσεις πλάτους για αριστερή και δεξιά στήλη',
	'PORTAL_LEFT_COLUMN_WIDTH'				=> 'Πλάτος της αριστερής στήλης',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'			=> 'Αλλάξτε το πλάτος της αριστερής στήλης σε εικονοστοιχεία. Προτεινόμενη τιμή είναι 180',
	'PORTAL_RIGHT_COLUMN_WIDTH'				=> 'Πλάτος της δεξιάς στήλης',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'			=> 'Αλλάξτε το πλάτος της δεξιάς στήλης σε εικονοστοιχεία. Προτεινόμενη τιμή είναι 180',

	'LINK_ADDED'							=> 'Ο σύνδεσμος προστέθηκε με επιτυχία',
	'LINK_UPDATED'							=> 'Ο σύνδεσμος ενημερώθηκε με επιτυχία',

	// Upload Module
	'MODULE_UPLOAD'					=> 'Φορτώστε μονάδα',
	'MODULE_UPLOAD_EXP'				=> 'Επιλέξτε το αρχείο zip της μονάδας που θέλετε να φορτώσετε:',
	'MODULE_UPLOAD_GO'				=> 'Φόρτωση',
	'NO_MODULE_UPLOAD'				=> 'Η διαμόρφωση του διακομιστή σας δεν επιτρέπει την φόρτωση αρχείων.',
	'NO_FILE_B3P'					=> 'Δεν καθορίστηκε κανένα αρχείο zip.',
	'MODULE_UPLOADED'				=> 'Η μονάδα φορτώθηκε με επιτυχία.',
	'MODULE_UPLOAD_MKDIR_FAILURE'	=> 'Δεν ήταν δυνατή η δημιουργία φακέλου.',
	'MODULE_COPY_FAILURE'			=> 'Δεν ήταν δυνατή η αντιγραφή του ακόλουθου αρχείου: %1$s',
	'MODULE_CORRUPTED'				=> 'Η μονάδα που προσπαθείτε να φορτώσετε φαίνεται να είναι κατεστραμμένο.',
	'PORTAL_NEW_FILES'				=> 'Νέα αρχεία',
	'PORTAL_MODULE_SOURCE'			=> 'Πηγή',
	'PORTAL_MODULE_TARGET'			=> 'Προορισμός',
	'PORTAL_MODULE_STATUS'			=> 'Κατάσταση',
	'PORTAL_MODULE_SUCCESS'			=> 'Αντιγράφτηκε με επιτυχία.',
	'PORTAL_MODULE_ERROR'			=> 'Σφάλμα. Το αρχείο υπάρχει ήδη ή δεν μπορεί να αντιγραφεί.',

	// Install
	'PORTAL_BASIC_INSTALL'			=> 'Προσθήκη βασικού συνόλου μονάδων',
	'PORTAL_BASIC_UNINSTALL'		=> 'Αφαίρεση μονάδων από τη βάση δεδομένων',

	/**
	* A copy of Handyman` s MOD version check, to view it on the portal overview
	*/
	'ANNOUNCEMENT_TOPIC'	=> 'Ανακοίνωση έκδοσης',
	'CURRENT_VERSION'		=> 'Τρέχουσα έκδοση',
	'DOWNLOAD_LATEST'		=> 'Μεταφόρτωση τελευταίας έκδοσης',
	'LATEST_VERSION'		=> 'Νεώτερη έκδοση',
	'NO_INFO'				=> 'Δεν ήταν δυνατή η επικοινωνία με τον διακομιστή έκδοσης',
	'NOT_UP_TO_DATE'		=> 'Το %s δεν είναι ενημερωμένο',
	'RELEASE_ANNOUNCEMENT'	=> 'Ανακοίνωσης θέμα',
	'UP_TO_DATE'			=> 'Το %s είναι ενημερωμένο',
	'VERSION_CHECK'			=> 'Έλεγχος έκδοσης επέκτασης',
));
