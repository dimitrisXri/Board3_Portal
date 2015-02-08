<?php
/**
*
* @package Board3 Portal v2.1 - Recent Module
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
	'PORTAL_RECENT'				=> 'Πρόσφατα',
	'PORTAL_RECENT_TOPIC'		=> 'Πρόσφατα θέματα',
	'PORTAL_RECENT_ANN'			=> 'Πρόσφατες ανακοινώσεις',
	'PORTAL_RECENT_HOT_TOPIC'	=> 'Πρόσφατα δημοφιλή θέματα',

	// ACP
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Ρυθμίσεις προσφάτων θεμάτων',
	'ACP_PORTAL_RECENT_SETTINGS_EXP'	=> 'Εδώ ρυθμίζετε το μπλοκ για τα πρόσφατα θέματα.',
	'PORTAL_MAX_TOPIC'						=> 'Όριο των πρόσφατων ανακοινώσεων / κορυφαίων θεμάτων',
	'PORTAL_MAX_TOPIC_EXP'				=> '0 σημαίνει απεριόριστο',
	'PORTAL_RECENT_TITLE_LIMIT'				=> 'Όριο χαρακτήρων για κάθε πρόσφατο θέμα',
	'PORTAL_RECENT_TITLE_LIMIT_EXP'		=> '0 σημαίνει απεριόριστο',
	'PORTAL_RECENT_FORUM'					=> 'Δ. Συζητήσεις πρόσφατων θεμάτων',
	'PORTAL_RECENT_FORUM_EXP'			=> 'Οι Δ. Συζητήσεις από τις οποίες αντλούνται τα θέματα, αφήστε κενό για να αντλούνται από όλες τις Δ. Συζητήσεις. Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Ναι", επιλέξτε τις Δ. Συζητήσεις τις οποίες θέλετε να εξαιρέσετε.<br />Εάν η "Εξαίρεση Δ. Συζητήσεων" έχει οριστεί σε "Όχι" επιλέξτε τις Δ. Συζητήσεις που θέλετε να βλέπετε.<br />Επιλογή / Από-επιλογή πολλαπλών Δ. Συζητήσεων με πατημένο το <samp>CTRL</samp> και πατώντας.',
	'PORTAL_EXCLUDE_FORUM'					=> 'Εξαίρεση Δ. Συζητήσεων',
	'PORTAL_EXCLUDE_FORUM_EXP'			=> 'Επιλέξτε "Ναι" εάν θέλετε να εξαιρέσετε τις επιλεγμένες Δ. Συζητήσεις από το μπλοκ των πρόσφατων θεμάτων, και "Όχι" εάν θέλετε να βλέπετε μόνο τις επιλεγμένες Δ. Συζητήσεις στο μπλοκ πρόσφατων θεμάτων.',
));
