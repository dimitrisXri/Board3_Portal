<?php
/**
*
* @package Board3 Portal v2.1
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
	'ACP_PORTAL_MODULES'		=> 'Μονάδες portal',
	'ACP_PORTAL'			=> 'Portal',
	'ACP_PORTAL_GENERAL_INFO'	=> 'Γενικές ρυθμίσεις',
	'ACP_PORTAL_UPLOAD'		=> 'Φόρτωση μονάδας',

	// Logs
	'LOG_PORTAL_LINK_ADDED'				=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Προστέθηκε σύνδεσμος: %s ',
	'LOG_PORTAL_LINK_UPDATED'			=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Ενημερώθηκε σύνδεσμος: %s ',
	'LOG_PORTAL_LINK_REMOVED'			=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Αφαιρέθηκε σύνδεσμος: %s ',
	'LOG_PORTAL_EVENT_ADDED'			=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Προστέθηκε εκδήλωση: %s ',
	'LOG_PORTAL_EVENT_UPDATED'			=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Ενημερώθηκε εκδήλωση: %s ',
	'LOG_PORTAL_EVENT_REMOVED'			=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; Αφαιρέθηκε εκδήλωση: %s ',
	'LOG_PORTAL_CONFIG'					=> '<strong>Οι ρυθμίσεις portal άλλαξαν</strong><br />&raquo; %s',

	// Adding the permissions
	'ACL_A_MANAGE_PORTAL'		=> 'Μπορεί να αλλάξει ρυθμίσεις portal',
	'ACL_U_VIEW_PORTAL'			=> 'Μπορεί να δει το portal',
));
